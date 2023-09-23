<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('services')->delete();
        DB::table('services')->insert(['name' => Str::random(6),'charge'=>Str::random(6).'.gmail.com',
        'description'=>Str::random(6),'employee'=>'','payment'=>'','employee'=>'','customer'=>'','date'=>'','details'=>'']);
    }

}
