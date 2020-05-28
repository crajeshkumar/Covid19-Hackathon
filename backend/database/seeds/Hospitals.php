<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hospitals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals_map')->insert([
            'address' => 'Dhubri Civil Hospital',
            'city' => 'Jhagrarpar',
            'latitude' => '26.035340',
            'longitude' => '89.964576',
            'phone' => '081348 63193'
        ]);

        DB::table('hospitals_map')->insert([
            'address' => 'Patkijuli Christian Hospital',
            'city' => 'Baksa',
            'latitude' => '26.7642',
            'longitude' => '91.4911',
            'phone' => '081348 63193'
        ]);

        DB::table('hospitals_map')->insert([
            'address' => 'Sanjivani Hospital',
            'city' => 'Barpeta',
            'latitude' => '26.3252',
            'longitude' => '90.9986',
            'phone' => '081348 63193'
        ]);


        DB::table('hospitals_map')->insert([
            'address' => 'Biswanath Chariali Civil Hospital',
            'city' => 'Biswanath',
            'latitude' => '26.7322',
            'longitude' => '93.1462',
            'phone' => '081348 63193'
        ]);

        DB::table('hospitals_map')->insert([
            'address' => 'Bongaigaon Civil Hospital',
            'city' => 'Bongaigaon',
            'latitude' => '26.4311',
            'longitude' => '90.5769',
            'phone' => '081348 63193'
        ]);
        DB::table('hospitals_map')->insert([
            'address' => 'Lakhipur Hospital BPHC',
            'city' => 'Cachar',
            'latitude' => '24.7925',
            'longitude' => '92.9988',
            'phone' => '081348 63193'
        ]);
        DB::table('hospitals_map')->insert([
            'address' => 'Chanakya Medical',
            'city' => 'Cachar',
            'latitude' => '27.0305',
            'longitude' => '95.0190',
            'phone' => '081348 63193'
        ]);
    }
}
