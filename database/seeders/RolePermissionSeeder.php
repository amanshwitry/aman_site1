<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

use App\Models\User;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;



class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // aman

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions products 
        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'delete products']);
        Permission::create(['name' => 'update products']);
        Permission::create(['name' => 'show products']);
        Permission::create(['name' => 'edit catelog']);
        Permission::create(['name' => 'delete catelog']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'manger']);
        $role1->givePermissionTo('update products');
        $role1->givePermissionTo('delete products');
        $role1->givePermissionTo('update products');
        $role1->givePermissionTo('show products');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit catelog');
        $role2->givePermissionTo('delete catelog');

        $role2 = Role::create(['name' => 'customer']);
        $role2->givePermissionTo('show products');
       // $role2->givePermissionTo('unpublish products');

       

        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo customer 
        $user = \App\Models\User::factory()->create([
            'name' => 'test1',
            'email' => 'test1@hotmail.com',
        ]);
        $user->assignRole($role1);


        $customer = Customer::factory()
                     ->for(User::factory()->state([
                'name' => 'test1',
            ]))
            ->create();

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@hotmail.com',
        // ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@hotmail.com',
        ]);
        $user->assignRole($role3);


        // aman
    }
}
