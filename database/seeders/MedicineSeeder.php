<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('medicines')->delete();
        DB::table('medicines')->insert(['name' => Str::random(6),'code'=>Str::random(6),
        'brand'=>Str::random(6),'description'=>'','type'=>'','stock'=>'','category'=>'',
        'barcode'=>'','expiration'=>'','unit'=>'','image'=>'']);
    }
}
