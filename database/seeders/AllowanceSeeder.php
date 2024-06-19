<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllowanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allowances')->insert(
            array([
                'id' => 1,
                'title' => 'Inglês',
                'account_id' => 1,
                'value' => 240,
                'kindTransaction' => 'withdraw',
                'descriptionReason' => 'Pagamento mensal de Inglês',
            ],
            [
                'id' => 2,
                'title' => 'Salário',
                'account_id' => 1,
                'value' => 2100,
                'kindTransaction' => 'deposit',
                'descriptionReason' => '',
            ])
        );
    }
}
