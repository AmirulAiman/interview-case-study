<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category' => 'Shoes'],
            ['category' => 'Mobile & Accessories'],
            ['category' => 'Watches'],
            ['category' => 'Health & Beauty'],
            ['category' => 'Baby & Toys'],
            ['category' => 'Groceries'],
            ['category' => 'Automotive'],
            ['category' => 'Women\'s Bag'],
            ['category' => 'Men\'s Bags & Wallets'],
            ['category' => 'Games, Books & Hobbies'],
            ['category' => 'Clothes'],
            ['category' => 'Home Appliances'],
            ['category' => 'Computer & Accessories'],
            ['category' => 'Others'],
        ];
        
        foreach($categories as $category){
            Category::create([
                'category' => $category['category'],
                'slug' => Str::of($category['category'])->slug('-')
            ]);
        }
    }
}
