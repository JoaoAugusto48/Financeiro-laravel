<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->insert(
            array([
                'id' => 1,
                'bank_id' => 1,
                'accountHolder_id' => 1,
                'accountNumber' => '1519',
                'balance' => 0
            ])
        );
    }
}
