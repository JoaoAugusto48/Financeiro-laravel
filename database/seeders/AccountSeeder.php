<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'accountNumber' => '151',
                'balance' => 0,
                'description' => 'Conta criada para cuidar das minhas próprias transações bancarias',
                'favorite' => false,
                'accountHolder_id' => 1,
                'bank_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'user_id' => 1,
            ])
        );
    }
}
