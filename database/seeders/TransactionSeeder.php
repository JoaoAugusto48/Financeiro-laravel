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
            array(
                [
                    'id' => 1,
                    'value' => 240,
                    'description' => 'Pagamento mensal de Inglês',
                    'transactionType' => TransactionEnum::EXPENSE->name,
                    'dateTransaction' => Carbon::now()->format('Y-m-d H:i:s'),
                    'account_id' => 1,
                    'transactionCategory_id' => 1,
                    'externalAccount_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => 1,
                ],
            )
        );
    }
}
