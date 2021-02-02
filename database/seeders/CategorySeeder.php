<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use Carbon\Carbon;
use App\Models\Category;
use App\Models\Product;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    //  all work
    // DB::table('categories')->insert([
    //     'name' =>'Fruits',
    //     'created_at'=> Carbon::now(),
    //      'updated_at'=> Carbon::now(),
    //      ]);

    // all work
    // $cat = Category::factory()->create([
    //     'name' => 'Herb',
    // ]);

    $cat = Category::factory()
           ->has(Product::factory()->count(6), 'products')
           ->create();


    // $posts = Product::factory()
    //         ->count(3)
    //         ->forCategory([
    //             'name' => 'Fruits',
    //         ])
    //         ->create();


     }

   
}
