<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(BankSeeder::class);
        // $this->call(AccountHolderCategorySeeder::class);
        $this->call(AccountCategorySeeder::class);
        $this->call(AccountHolderSeeder::class);
        $this->call(ExternalAccountSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(CashAccountSeeder::class);
        $this->call(TransactionCategorySeeder::class);
        // $this->call(AllowanceSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(TransactionSeeder::class);

        
        $this->call(InvestmentPlanSeeder::class);
        $this->call(InvestmentSeeder::class);
        $this->call(IncomeSeeder::class);
        $this->call(ExpensesSeeder::class);
    }
}
