<?php

namespace Database\Seeders;

use App\Enums\AccountHolderTypeEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            array([
                'id' => 1,
                'name' => 'Cliente VIP',
                'description' => 'Clientes com benefícios',
                'type' => AccountHolderTypeEnum::CLIENT->name,
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Loja de Varejo',
                'description' => 'Lojas que vendem de tudo',
                'type' => AccountHolderTypeEnum::COMPANY->name,
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ));
    }
}
