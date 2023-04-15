<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => "Samsung Galaxy S23 Ultra 5G (S918) 12GB + 256GB/ 12GB + 512GB",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("Samsung Galaxy S23 Ultra 5G (S918) 12GB + 256GB/ 12GB + 512GB")->slug("-"),
                "brand_id" => 1,
                "category_id" => 2,
                "base_price" => 5699.00,
            ],
            [
                "name" => "Samsung Galaxy Tab S7 FE WiFi (T733) With S Pen (Black/ Pink/ Silver) - 6GB RAM - 128GBGB ROM - 12.4 inch - Android Tablet",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("Samsung Galaxy Tab S7 FE WiFi (T733) With S Pen (Black/ Pink/ Silver) - 6GB RAM - 128GBGB ROM - 12.4 inch - Android Tablet")->slug("-"),
                "brand_id" => 1,
                "category_id" => 2,
                "base_price" => 1999.00,
            ],
            [
                "name" => "Thule Accent Laptop Backpack 20L - Black",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("Thule Accent Laptop Backpack 20L - Black")->slug("-"),
                "brand_id" => 9,
                "category_id" => 9,
                "base_price" => 459.00,
            ],
            [
                "name" => "VOIR Signature Soft Chevron Flap Sling Bag VN201589-C032103",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("VOIR Signature Soft Chevron Flap Sling Bag VN201589-C032103")->slug("-"),
                "brand_id" => 14,
                "category_id" => 8,
                "base_price" => 62.00,
            ],
            [
                "name" => "Samsung 65 lnch LED (UA65AU7000) 4K UHD Smart TV with Crystal Processor UA65AU7000KXXM",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("Samsung 65 lnch LED (UA65AU7000) 4K UHD Smart TV with Crystal Processor UA65AU7000KXXM")->slug("-"),
                "brand_id" => 1,
                "category_id" => 12,
                "base_price" => 2874.40,
            ],
            [
                "name" => "Secrets of Divine Love: A Spiritual Journey into the Heart of Islam:Author:A HELWA:ISBN:9781734231205",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("Secrets of Divine Love: A Spiritual Journey into the Heart of Islam:Author:A HELWA:ISBN:9781734231205")->slug("-"),
                "brand_id" => 16,
                "category_id" => 10,
                "base_price" => 46.90,
            ],
            [
                "name" => "The Queen of Nothing (THE WICKED KING SERIES) : 9781471407598 : By Black, Holly",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("The Queen of Nothing (THE WICKED KING SERIES) : 9781471407598 : By Black, Holly")->slug("-"),
                "brand_id" => 16,
                "category_id" => 10,
                "base_price" => 46.90,
            ],
            [
                "name" => "(BBW) 3D Pop Scenes: Little Red Riding Hood (ISBN: 9781838520151)",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("(BBW) 3D Pop Scenes: Little Red Riding Hood (ISBN: 9781838520151)")->slug("-"),
                "brand_id" => 15,
                "category_id" => 10,
                "base_price" => 18.90,
            ],
            [
                "name" => "(BBW) Botanical Art (ISBN: 9788854413177)",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("(BBW) Botanical Art (ISBN: 9788854413177)")->slug("-"),
                "brand_id" => 15,
                "category_id" => 10,
                "base_price" => 54.50,
            ],
            [
                "name" => "GARNIER Bright Complete Booster Serum with Vitamin C – Fades Dark Spots (All Skin Types) 30ml",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("GARNIER Bright Complete Booster Serum with Vitamin C – Fades Dark Spots (All Skin Types) 30ml")->slug("-"),
                "brand_id" => 12,
                "category_id" => 4,
                "base_price" => 65.66,
            ],
            [
                "name" => "GARNIER Micellar Water Pink Facial Cleanser and Makeup Remover - For Sensitive Skin 400ml",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("GARNIER Micellar Water Pink Facial Cleanser and Makeup Remover - For Sensitive Skin 400ml")->slug("-"),
                "brand_id" => 12,
                "category_id" => 4,
                "base_price" => 47.18,
            ],
            [
                "name" => "[SOME BY MI] AHA-BHA-PHA 30 Days Miracle Toner 150ml/100ml/30ml",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("[SOME BY MI] AHA-BHA-PHA 30 Days Miracle Toner 150ml/100ml/30ml")->slug("-"),
                "brand_id" => 11,
                "category_id" => 4,
                "base_price" => 19.18,
            ],
            [
                "name" => "[SOME BY MI] 30 Days Miracle Acne Clear Foam 100ml [Oily Skin Facial cleanser, AHA, BHA, PHA Cleansing foam]",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id bibendum velit. Proin in porttitor nunc, et placerat enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt dui ut dolor iaculis tincidunt a id nisl. Donec quis ornare ligula. Etiam at egestas mauris. Donec molestie efficitur erat at scelerisque. Nulla posuere nisl ut porttitor aliquam. Sed hendrerit nec odio sit amet placerat. Quisque efficitur eget ante at dictum. Quisque faucibus velit id auctor euismod. Nulla facilisi. Donec sodales laoreet ante et aliquam. Vestibulum vel efficitur lorem. Vivamus tempor quam ut est aliquet, eu iaculis sapien pellentesque. Nunc pharetra, quam ac laoreet blandit, dui mauris tincidunt tellus, vitae mattis nulla eros vitae ipsum.",
                "slug" => Str::of("[SOME BY MI] 30 Days Miracle Acne Clear Foam 100ml [Oily Skin Facial cleanser, AHA, BHA, PHA Cleansing foam]")->slug("-"),
                "brand_id" => 11,
                "category_id" => 4,
                "base_price" => 46.05,
            ],
        ];
        
        foreach($products as $product){
            Product::create($product);
        }
        //
    }
}
