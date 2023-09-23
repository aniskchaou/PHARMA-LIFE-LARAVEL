<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('employees')->delete();
        DB::table('employees')->insert(['name' => Str::random(6),'code'=>Str::random(6).'.gmail.com',
        'address'=>Str::random(6),'telephone'=>Str::random(6),'email'=>Str::random(6),'code'=>Str::random(6),'salarytype'=>Str::random(6)]);
    }

}
