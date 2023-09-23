<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('medecine_types')->delete();
        DB::table('medecine_types')->insert(['name' => Str::random(6)]);
    }
}
