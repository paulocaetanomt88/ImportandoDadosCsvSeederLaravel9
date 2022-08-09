<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Insere todos os dados definidos em nosso arquivo  CSV 
     */
    public function run()
    {
        Transaction::truncate();

        // abre o arquivo csv no modo leitura
        $csvData = fopen(base_path('database/csv/transaction_report.csv'), 'r');

        // define o variavel do mecanismo para pular a primeira linha porque é o cabeçalho
        $transRow = true;

        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Transaction::create([
                    'transaction_date' => $data['0'],
                    'price' => $data['1'],
                    'payment_type' => $data['2'],
                    'name' => $data['3'],
                    'city' => $data['4'],
                    'zip' => $data['5'],
                ]);
            }
            $transRow = false;
        }

        // fecha o arquivo
        fclose($csvData);
    }
}
