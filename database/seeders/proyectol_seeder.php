<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class proyectol_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /* DB::table('proyectol')->insert([
            'nombre'=>'proyectolllll',
            'objetivo'=>'jjjjjjj',
           'caracteristicas'=>'llllll',
           'resultado'=>'hhhhhh',
          
        ]);*/

        DB::table('proyectol')->insert([

            'nombre'=>'pkkkk',
            'objetivo'=>'kkkkkkk',
            'caracteristicas'=>'rffff',
            'resultado'=>'fffff'
        ]);
        
    }
}
