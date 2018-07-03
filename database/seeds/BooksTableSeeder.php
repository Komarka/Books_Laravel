<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <20 ; $i++) { 
    		  DB::table('books')->insert([
            'author' => str_random(10),
            'name' => str_random(10),
            'pages' => rand(100,300),
            'plot' => str_random(50),
            'image'=>'images/'.rand(1,5).'.png'
            
        ]);
    	}
      
    }
}
