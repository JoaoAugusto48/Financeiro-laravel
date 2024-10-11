<?php

namespace Database\Seeders;

use App\Enums\TransactionEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllowanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allowances')->insert(
            array([
                'id' => 1,
                'title' => 'Inglês',
                'account_id' => 1,
                'value' => 240,
                'kindTransaction' => TransactionEnum::EXPENSE->name,
                'favorite' => false,
                'description' => 'Pagamento mensal de Inglês',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'title' => 'Salário',
                'account_id' => 1,
                'value' => 2100,
                'kindTransaction' => TransactionEnum::REVENUE->name,
                'favorite' => true,
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ])
        );
    }
}
