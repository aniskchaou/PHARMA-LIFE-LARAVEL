<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('medecine_categorys')->delete();
        DB::table('medecine_categorys')->insert(['name' => Str::random(6)]);
    }
}
