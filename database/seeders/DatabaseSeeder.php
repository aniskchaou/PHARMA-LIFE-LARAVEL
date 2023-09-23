<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*  DB::table('customer')->delete();
        DB::table('customer')->insert(['name' => Str::random(6),'email'=>Str::random(6).'.gmail.com','address'=>Str::random(6)]); */

        $this->call(CustomerSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(MedicineBrandSeeder::class);
        $this->call(MedicineCategorySeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(MedicineTypeSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SupplierSeeder::class);
    }
}
