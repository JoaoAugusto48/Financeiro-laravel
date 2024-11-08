<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_categories')->insert(
            array([
                'id' => 1,
                'name' => 'Saúde',
                'description' => 'Gasto com Saúde',
                'status' => 1,
                'user_id' => 1,
                'favorite' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Alimentação',
                'description' => '',
                'status' => 1,
                'user_id' => 1,
                'favorite' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Compras',
                'description' => 'Minhas compras em geral',
                'status' => 1,
                'user_id' => 1,
                'favorite' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Outros',
                'description' => 'Outras possibilidades de Gastos',
                'status' => 1,
                'user_id' => 1,
                'favorite' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'Sálario',
                'description' => '',
                'status' => 1,
                'user_id' => 1,
                'favorite' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'Ensino',
                'description' => 'Com aulas, cursos, entre outros',
                'status' => 1,
                'user_id' => 1,
                'favorite' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ));
    }
}
