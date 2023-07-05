<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*\App\Models\Product::factory(200)->create();*/
        /*User::factory(10)->create();
        Customer::factory(200)->create();*/
        Invoice::factory(100)->create();
        InvoiceItem::factory(400)->create();

        /* $this->call([
             PermissionsTableSeeder::class,
             RolesTableSeeder::class,
             PermissionRoleTableSeeder::class,
             UsersTableSeeder::class,
             RoleUserTableSeeder::class,
             CountriesTableSeeder::class,
         ]);*/
    }
}
