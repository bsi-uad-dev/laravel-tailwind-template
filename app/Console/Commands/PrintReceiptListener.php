<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use App\Http\Controllers\PrintController;
use Illuminate\Support\Facades\Log;

class PrintReceiptListener extends Command
{
    protected $signature = 'rabbitmq:listen';

    protected $description = 'Listen to RabbitMQ for print requests and call printReceipt';

    protected $controller;

    public function __construct(PrintController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function handle()
    {
        // Set up the RabbitMQ connection
        $connection = new AMQPStreamConnection(
            env('RABBITMQ_HOST', 'localhost'), 
            env('RABBITMQ_PORT', 5672), 
            env('RABBITMQ_USERNAME', 'guest'), 
            env('RABBITMQ_PASSWORD', 'guest'), 
            env('RABBITMQ_VHOST', '/')
        );

        $channel = $connection->channel();
        
        // Declare a queue (this should match the queue name in your setup)
        $channel->queue_declare(env('RABBITMQ_QUEUE', 'print_queue'), false, true, false, false);

        // Set up the callback for when a message is received
        $callback = function ($msg) {
            // Decode the message body into an array
            $data = json_decode($msg->body, true);

            // Call the printReceipt method from PrintController
            $response = $this->controller->printReceipt($data);

            // Log the result
            Log::info('Receipt printed successfully: ' . json_encode($data));

            // Acknowledge the message as processed
            $msg->ack();
        };

        // Consume messages from the queue
        $channel->basic_consume(env('RABBITMQ_QUEUE', 'print_queue'), '', false, true, false, false, $callback);

        // Wait for messages to arrive and process them
        while($channel->is_consuming()) {
            $channel->wait();
        }

        // Close the channel and connection
        $channel->close();
        $connection->close();
    }
}
