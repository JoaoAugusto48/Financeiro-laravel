<?php

namespace Database\Seeders;

use App\Enums\TransactionEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert(
            array(
                [
                    'id' => 1,
                    'title' => 'Inglês',
                    'value' => 240,
                    'description' => 'Pagamento mensal de Inglês',
                    'favorite' => false,
                    'transaction_type' => TransactionEnum::EXPENSE->name,
                    'account_id' => 1,
                    'transaction_category_id' => 1,
                    'external_account_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => 1,
                ]
            ),
        );
    }
}
