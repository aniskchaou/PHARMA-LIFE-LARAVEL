<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('sales')->delete();
        DB::table('sales')->insert(['name' => Str::random(6),'date'=>'12/01/2022',
        'customer'=>Str::random(6),'reference'=>'3R232E','amount'=>'100']);
    }

}
