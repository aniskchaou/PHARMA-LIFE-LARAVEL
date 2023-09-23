<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('customers')->delete();
        DB::table('customers')->insert(['name' => Str::random(6),'email'=>Str::random(6).'.gmail.com','address'=>Str::random(6),'telephone'=>'9707969']);
    }
}
