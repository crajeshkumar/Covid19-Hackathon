<?php

use Illuminate\Database\Seeder;

class Docs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name'=>'Doctor 1',
            'shift_from'=>36,
            'shift_to'=>72,   
        ]);

        DB::table('doctors')->insert([
            'name'=>'Doctor 2',
            'shift_from'=>38,
            'shift_to'=>76
        ]);
    }
}
