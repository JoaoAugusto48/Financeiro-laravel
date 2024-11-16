<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExternalAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('external_accounts')->insert(
            array(
                [
                    'id' => 1,
                    'name' => 'Supermercado Palmital',
                    'description' => 'Mercado onde faço minhas compras',
                    'phone1' => '(18) 99712-3456',
                    'phone2' => '',
                    'email' => 'teste@gmail.com',
                    'address_street' => '',
                    'address_number' => '',
                    'address_city' => '',
                    'address_country' => '',
                    'address_complement' => '',
                    'address_postal_code' => '',
                    'account_category_id' => 1,
                    'status' => true,
                    'favorite' => false,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => 1,
                ],
            ),
        );
    }
}
