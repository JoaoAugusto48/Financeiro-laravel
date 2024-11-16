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
            array(
                [
                    'id' => 1,
                    'name' => 'João Augusto',
                    'description' => 'Sou eu',
                    'phone1' => '(18) 99818-0912',
                    'phone2' => '',
                    'email' => 'teste@gmail.com',
                    'address_street' => 'Rosalina Candida Franco',
                    'address_number' => '67',
                    'address_city' => 'Palmital',
                    'address_country' => 'Brasil',
                    'address_complement' => '',
                    'address_postal_code' => '19973-174',
                    'status' => true,
                    'favorite' => false,
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'name' => 'Gabriela',
                    'description' => 'Sou eu',
                    'phone1' => '(18) 99919-0912',
                    'phone2' => '',
                    'email' => 'teste@gmail.com',
                    'address_street' => 'Rosalina Candida Franco',
                    'address_number' => '67',
                    'address_city' => 'Palmital',
                    'address_country' => 'Brasil',
                    'address_complement' => '',
                    'address_postal_code' => '19973-174',
                    'status' => true,
                    'favorite' => false,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => 1,
                ],
            )
        );
    }
}
