<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Statistic extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['29/04/2020', 10, 27, 1],
            ['30/04/2020', 12, 29, 1],
            ['01/05/2020', 12, 29, 1],
            ['02/05/2020', 10, 32, 1],
            ['03/05/2020', 10, 32, 1],
            ['04/05/2020', 10, 32, 1],
            ['05/05/2020', 10, 32, 1],
            ['06/05/2020', 10, 32, 1],
            ['07/05/2020', 12, 32, 1],
            ['08/05/2020', 19, 34, 1],
        ];

        foreach($data as $row){
            DB::table('statistics')->insert([
                'date'=>$row[0],
                'positive'=>$row[1],
                'cured'=>$row[2],
                'deceased'=>$row[3]
            ]); 
        }
    }
}
