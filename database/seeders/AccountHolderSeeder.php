<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountHolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('account_holders')->insert(
            array([
                'id' => 1,
                'name' => 'João Augusto',
                'linkAccount' => true,
                'user_id' => 1
            ])
        );
    }
}
