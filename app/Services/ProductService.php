<?php

namespace App\Services;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductService{
    
    public function saveProduct(Request $form)
    {
        $product = Product::create([
            'name' => $form->name,
            'slug' => Str::of($form->name)->slug("-"),
            'img_name' => $this->processImgUrl($form, 'products'),
            'description' => $form->description,
            'base_price' => $form->price,
            'brand_id' => $form->brand,
            'category_id' => $form->category
        ]);
        
        return $product;
    }
    
    public function updateProduct(Request $form, Product $product)
    {
        $product->update([
            'name' => $form->name,
            'slug' => Str::of($form->name)->slug("-"),
            'img_name' => $this->processImgUrl($form, 'products'),
            'description' => $form->description,
            'base_price' => $form->price,
            'brand_id' => $form->brand,
            'category_id' => $form->category
        ]);
        
        return $product;
    }
    
    public function processImgUrl(Request $form, $dir = "products")
    {
        if($form->hasFile('img_name')){
            $img_name = time().'_'.Str::of($form->name)->slug('-').".".$form->img_name->extension();
            $form->img_name->move(public_path("images/".$dir),$img_name);
            return $dir."/".$img_name;
        } else {
            return 'no-image-available.jpg';
        }
    }
}