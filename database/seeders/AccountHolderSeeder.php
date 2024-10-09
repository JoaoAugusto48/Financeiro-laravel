<?php

namespace Database\Seeders;

use App\Enums\AccountHolderTypeEnum;
use Carbon\Carbon;
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
                'type' => AccountHolderTypeEnum::PEOPLE->name,
                'description' => 'Sou eu',
                'phone' => '(18) 99818 0912',
                'email' => 'jpaiaobonifacio@gmail.com',
                'address' => 'Rosalina Candida Franco, 67 - Palmital',
                'category_id' => 1,
                'linkAccount' => true,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'José Renato',
                'type' => AccountHolderTypeEnum::PEOPLE->name,
                'description' => 'Sou eu',
                'phone' => '(18) 99818 1232',
                'email' => 'usuareio@example.com',
                'address' => 'Rua das Margaridas, 123 - Palmital',
                'category_id' => 1,
                'linkAccount' => false,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Supermercado Palmital',
                'type' => AccountHolderTypeEnum::COMPANY->name,
                'description' => 'Sou eu',
                'phone' => '(18) 99818 1232',
                'email' => 'usuareio@example.com',
                'address' => 'Rua das Margaridas, 142 - Palmital',
                'category_id' => 1,
                'linkAccount' => false,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ));
    }
}
