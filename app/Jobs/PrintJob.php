<?php

namespace App\Jobs;

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\EscposImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PrintJob implements ShouldQueue
{
    use Queueable, InteractsWithQueue, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the print job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            // Connect to the printer
            $connector = new CupsPrintConnector("GEZHI_micro_printer"); // Change to your printer's name
            $printer = new Printer($connector);

            // Print Header
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->setEmphasis(true);
            $printer->text("*** " . strtoupper($this->data['store_name']) . " ***\n");
            $printer->setEmphasis(false);
            $printer->text($this->data['store_tagline'] . "\n\n");

            // Print Itemized List
            $printer->setJustification(Printer::JUSTIFY_LEFT);
            foreach ($this->data['items'] as $item) {
                $printer->text(sprintf("%-25s %7s\n", $item['name'], $item['price']));
            }

            $printer->text("-------------------------------\n");

            // Print Total
            $printer->setEmphasis(true);
            $printer->text("TOTAL:                     $" . number_format($this->data['total'], 2) . "\n\n");

            // Footer
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text($this->data['footer_message'] . "\n\n");

            // Cut the paper
            $printer->cut();
            $printer->close();

        } catch (\Exception $e) {
            // Log or handle error
            \Illuminate\Support\Facades\Log::error('Error printing receipt: ' . $e->getMessage());
        }
    }
}
