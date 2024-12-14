<?php

namespace App\Console\Commands;

use App\Http\Controllers\PrintController;
use Illuminate\Console\Command;
use App\Http\Controllers\RabbitMQController;

class RabbitMQConsumer extends Command
{
    protected $signature = 'rabbitmq:consume';
    protected $description = 'Consume messages from RabbitMQ';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Example of consuming a message from RabbitMQ
        $message = 'Hello from RabbitMQ!';

        // Instantiate the controller and call the method
        $controller = app(PrintController::class);
        $controller->printReceipt(request());

        // Output to the console (optional)
        $this->info('Message processed by controller.');
    }
}
