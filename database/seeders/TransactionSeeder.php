<?php

namespace Database\Seeders;

use App\Enums\TransactionEnum;
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
                'dateTransaction' => Carbon::now()->format('Y-m-d'),
                'kindTransaction' => TransactionEnum::EXPENSE->name,
                'description' => 'Bolo de Chocolate',
                'transactionCategory_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ])
        );
    }
}
