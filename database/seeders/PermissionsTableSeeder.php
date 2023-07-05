<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_management_access',
            ],
            [
                'id' => 2,
                'title' => 'permission_create',
            ],
            [
                'id' => 3,
                'title' => 'permission_edit',
            ],
            [
                'id' => 4,
                'title' => 'permission_show',
            ],
            [
                'id' => 5,
                'title' => 'permission_delete',
            ],
            [
                'id' => 6,
                'title' => 'permission_access',
            ],
            [
                'id' => 7,
                'title' => 'role_create',
            ],
            [
                'id' => 8,
                'title' => 'role_edit',
            ],
            [
                'id' => 9,
                'title' => 'role_show',
            ],
            [
                'id' => 10,
                'title' => 'role_delete',
            ],
            [
                'id' => 11,
                'title' => 'role_access',
            ],
            [
                'id' => 12,
                'title' => 'user_create',
            ],
            [
                'id' => 13,
                'title' => 'user_edit',
            ],
            [
                'id' => 14,
                'title' => 'user_show',
            ],
            [
                'id' => 15,
                'title' => 'user_delete',
            ],
            [
                'id' => 16,
                'title' => 'user_access',
            ],
            [
                'id' => 17,
                'title' => 'plan_create',
            ],
            [
                'id' => 18,
                'title' => 'plan_edit',
            ],
            [
                'id' => 19,
                'title' => 'plan_delete',
            ],
            [
                'id' => 20,
                'title' => 'plan_access',
            ],
            [
                'id' => 21,
                'title' => 'feature_create',
            ],
            [
                'id' => 22,
                'title' => 'feature_edit',
            ],
            [
                'id' => 23,
                'title' => 'feature_delete',
            ],
            [
                'id' => 24,
                'title' => 'feature_access',
            ],
            [
                'id' => 25,
                'title' => 'country_create',
            ],
            [
                'id' => 26,
                'title' => 'country_edit',
            ],
            [
                'id' => 27,
                'title' => 'country_delete',
            ],
            [
                'id' => 28,
                'title' => 'country_access',
            ],
            [
                'id' => 29,
                'title' => 'product_create',
            ],
            [
                'id' => 30,
                'title' => 'product_edit',
            ],
            [
                'id' => 31,
                'title' => 'product_delete',
            ],
            [
                'id' => 32,
                'title' => 'product_access',
            ],
            [
                'id' => 33,
                'title' => 'customer_create',
            ],
            [
                'id' => 34,
                'title' => 'customer_edit',
            ],
            [
                'id' => 35,
                'title' => 'customer_delete',
            ],
            [
                'id' => 36,
                'title' => 'customer_access',
            ],
            [
                'id' => 37,
                'title' => 'invoice_create',
            ],
            [
                'id' => 38,
                'title' => 'invoice_edit',
            ],
            [
                'id' => 39,
                'title' => 'invoice_show',
            ],
            [
                'id' => 40,
                'title' => 'invoice_delete',
            ],
            [
                'id' => 41,
                'title' => 'invoice_access',
            ],
            [
                'id' => 42,
                'title' => 'feature_plan_create',
            ],
            [
                'id' => 43,
                'title' => 'feature_plan_edit',
            ],
            [
                'id' => 44,
                'title' => 'feature_plan_delete',
            ],
            [
                'id' => 45,
                'title' => 'feature_plan_access',
            ],
            [
                'id' => 46,
                'title' => 'payment_access',
            ],
            [
                'id' => 47,
                'title' => 'report_create',
            ],
            [
                'id' => 48,
                'title' => 'report_edit',
            ],
            [
                'id' => 49,
                'title' => 'report_show',
            ],
            [
                'id' => 50,
                'title' => 'report_delete',
            ],
            [
                'id' => 51,
                'title' => 'report_access',
            ],
            [
                'id' => 52,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
