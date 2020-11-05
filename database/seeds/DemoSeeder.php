<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->truncate();
        DB::table('promocodes')->truncate();
        DB::table('promocode_usages')->truncate();
        DB::table('provider_devices')->truncate();
        DB::table('provider_documents')->truncate();
        DB::table('provider_profiles')->truncate();
        DB::table('provider_services')->truncate();
        DB::table('request_filters')->truncate();
        DB::table('user_request_payments')->truncate();
        DB::table('user_request_ratings')->truncate();
        DB::table('user_requests')->truncate();
        DB::table('users')->truncate();
        DB::table('users')->insert([[
            'first_name' => 'Fakher',
            'last_name' => 'Demo',
            'email' => 'demo@fakher.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'picture' => 'http://lorempixel.com/512/512/business/Xuber-Services',
        ],[
            'first_name' => 'Emilia',
            'last_name' => 'Epps',
            'email' => 'demo2@fakher.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'picture' => 'http://lorempixel.com/512/512/business/Xuber-Services',
        ]]);

        DB::table('providers')->truncate();
        DB::table('providers')->insert([[
            'first_name' => 'Fakher',
            'last_name' => 'Demo',
            'email' => 'demo@fakher.com',
            'password' => bcrypt('123456'),
            'status' => 'approved',
            'latitude' => '13.00',
            'longitude' => '80.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'avatar' => 'http://lorempixel.com/512/512/business/Xuber-Services',
        ],[
            'first_name' => 'Thomas',
            'last_name' => 'Jenkins',
            'email' => 'demo2@fakher.com',
            'password' => bcrypt('123456'),
            'status' => 'approved',
            'latitude' => '13.00',
            'longitude' => '80.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'avatar' => 'http://lorempixel.com/512/512/business/Xuber-Services',
        ]]);

        DB::table('provider_services')->truncate();
        DB::table('provider_services')->insert([[
            'provider_id' => 1,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 2,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 3,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 4,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 5,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 6,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 7,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 8,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 9,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 10,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 11,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 12,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 13,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 14,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 15,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 16,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 17,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 18,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 19,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 20,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 21,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 22,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 23,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 24,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 25,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 26,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 27,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 28,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 29,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'provider_id' => 30,
            'service_type_id' => 1,
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);
    }
}
