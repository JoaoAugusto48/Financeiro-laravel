<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banks')->insert(
            array([
                'id' => 1,
                'number' => '001',
                'name' => 'Bando do Brasil',
                'abbreviation' => 'BB'
            ],
            [
                'id' => 2,
                'number' => '002',
                'name' => 'Nubank',
                'abbreviation' => 'Nu'
            ])
        );
    }
}
