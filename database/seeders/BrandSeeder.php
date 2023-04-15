<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['brand' => 'Samsung'],
            ['brand' => 'Huawei'],
            ['brand' => 'Sony'],
            ['brand' => 'Philips'],
            ['brand' => 'Tefal'],
            ['brand' => 'Hisense'],
            ['brand' => 'Braun Buffel'],
            ['brand' => 'Guy Laroche'],
            ['brand' => 'Thule'],
            ['brand' => 'Polo Hill'],
            ['brand' => 'SomeByMi'],
            ['brand' => 'Gardnier'],
            ['brand' => 'Olay'],
            ['brand' => 'Voir'],
            ['brand' => 'Big Bad Wolf'],
            ['brand' => 'MPH Bookstore'],
            ['brand' => 'BanDai'],
        ];
        foreach ($brands as $brand) {
            Brand::create([
                'brand' => $brand['brand'],
                'slug' => Str::of($brand['brand'])->slug('-')
            ]);
        }
    }
}
