<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MainCategory;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([SupplierSeeder::class, MainCategorySeeder::class, CategorySeeder::class, ProductSeeder::class, CustomerSeeder::class, CompanySeeder::class, DepartementSeeder::class, EmployeeSeeder::class, AddressSeeder::class, CartItemSeeder::class, OrderSeeder::class, OrderDetailSeeder::class]);
    }
}
