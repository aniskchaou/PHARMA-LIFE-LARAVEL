<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicineBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('medicine_brands')->delete();
        DB::table('medicine_brands')->insert(['name' =>'Doliprane']);
    }
}
