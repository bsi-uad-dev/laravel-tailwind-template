<?php

namespace App\Http\Controllers;

use App\Jobs\PrintJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\EscposImage;

class PrintController extends Controller
{
    //

    public function printReceipt()
    {
        // Validasi data yang diterima dari request
        // $data = $request->validate([
        //     'store_name'     => 'required|string',
        //     'store_tagline'  => 'required|string',
        //     'items'          => 'required|array',
        //     'total'          => 'required|int',
        //     'footer_message' => 'required|string',
        // ]);

        // dd("oke");

        $data = [
            "store_name" => "Inifnity Gym",
            "store_tagline" => "Jl. Seturan Raya, Sleman",
            "items" => [["name" => "Zumba Class", "price" => "Rp. 100.000"]],
            "total" => 100000,
            "footer_message" => "Semoga Gym Anda Menyenangkan!",
        ];

        // $data = json_decode(`{
        //     "store_name": "My Store",
        //     "store_tagline": "Your one-stop shop for everything!",
        //     "items": [
        //         {"name": "Apple iPhone 14", "price": "$999.99"},
        //         {"name": "Wireless Headphones", "price": "$129.99"},
        //         {"name": "Laptop Stand", "price": "$49.99"}
        //     ],
        //     "total": 1179.97,
        //     "footer_message": "Thank you for shopping with us!"
        // }`, true);

        try {
            // Menghubungkan ke printer thermal melalui CUPS
            $connector = new CupsPrintConnector("eppos58"); // Ganti dengan nama printer Anda
            $printer = new Printer($connector);

            // Header
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->setEmphasis(true);
            $printer->text("*** " . strtoupper($data['store_name']) . " ***\n");
            $printer->setEmphasis(false);
            $printer->text($data['store_tagline'] . "\n\n");

            $printer->text("-------------------------------\n");
            $printer->text("\n");

            // Print Itemized List
            $printer->setJustification(Printer::JUSTIFY_LEFT);
            foreach ($data['items'] as $item) {
                $printer->text(sprintf("%-20s %7s\n", $item['name'], $item['price']));
            }
            $printer->text("\n");


            $printer->text("-------------------------------\n");

            // Print Total
            $printer->setEmphasis(true);
            $total = "Rp. " . number_format($data['total'], 0, ',', '.');
            $printer->text(sprintf("%-20s %7s\n", 'Total : ', $total));
            // $printer->text("TOTAL:          Rp." . number_format($data['total'], 2) . "\n\n");

            // Footer
            $printer->text("\n");
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text($data['footer_message'] . "\n\n");

            // Potong kertas
            $printer->cut();
            $printer->close();

            // Mengembalikan respons jika berhasil
            return response()->json(['status' => 'success', 'message' => 'Struk berhasil dicetak']);
        } catch (\Exception $e) {
            // Mengembalikan respons jika terjadi error
            return response()->json(['status' => 'error', 'message' => 'Kesalahan saat mencetak: ' . $e->getMessage()]);
        }
    }
}
