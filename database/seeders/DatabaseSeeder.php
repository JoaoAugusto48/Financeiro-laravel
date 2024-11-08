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
        $this->call(AccountHolderCategorySeeder::class);
        $this->call(TransactionCategorySeeder::class);
        $this->call(AccountHolderSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(AllowanceSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
