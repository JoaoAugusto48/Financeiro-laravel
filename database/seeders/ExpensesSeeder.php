<?php

namespace Database\Seeders;

use App\Enums\MonthEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses')->insert(
            array(
                [
                    'id' => 1,
                    'month' => MonthEnum::NOVEMBER->name,
                    'year' => 2024,
                    'totalAmount' => 120,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => 1,
                ],
            ),
        );
    }
}
