<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'img_name',
        'description',
        'base_price',
        'brand_id',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
