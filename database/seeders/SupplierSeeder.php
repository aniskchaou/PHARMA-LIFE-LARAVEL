<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('suppliers')->delete();
        DB::table('suppliers')->insert(['country'=>'France','telephone'=>'9687696','name' => Str::random(6),'email'=>Str::random(6).'.gmail.com','address'=>Str::random(6)]);
    }
}
