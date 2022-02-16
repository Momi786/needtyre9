<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $adminRecords = [
            [
                'id' => '1',
                'name' => 'admin',
                'type' => 'admin',
                'mobile' => '00000',
                'email' =>  'admin@gamil.com',
                'password' => '$2y$10$Va1epv4xL1.jjuet9L5DD.N0qZ6M/bCPSjGUHLvRmVHghepIq/RIW',
                'img' => '',
                'status' => 1
            ],

        ];

        DB::table('admins')->insert($adminRecords);
    }
}
