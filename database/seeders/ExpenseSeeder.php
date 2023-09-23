<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('expenses')->delete();
        DB::table('expenses')->insert(['name' => Str::random(6),'supplier'=>Str::random(6).'.gmail.com',
        'date'=>Str::random(6),'amount'=>Str::random(6),'note'=>Str::random(6)]);
    }
}
