<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            array(
                [
                    'id' => 1,
                    'number' => '001',
                    'name' => 'Banco do Brasil',
                    'deleteable' => false,
                    'favorite' => false,
                    'is_active' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'number' => '002',
                    'name' => 'Caixa Federal',
                    'deleteable' => false,
                    'favorite' => false,
                    'is_active' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 3,
                    'number' => '003',
                    'name' => 'Nubank',
                    'deleteable' => false,
                    'favorite' => true,
                    'is_active' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            )
        );
    }
}
