<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Categories')->delete();
        
        \DB::table('Categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'MEDIOS',
                'order' => 'AA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'ACUERDOS',
                'order' => 'BB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'NOVEDADES',
                'order' => 'CC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}