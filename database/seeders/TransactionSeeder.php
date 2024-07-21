<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert(
            array([
                'id' => 1,
                'account_id' => 1,
                'value' => 15.99,
                'kindTransaction' => 'withdraw',
                'description' => 'Bolo de Chocolate',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ])
        );
    }
}
