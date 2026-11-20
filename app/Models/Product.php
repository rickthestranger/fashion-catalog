<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'size',
        'image_path',
        'is_featured',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFormattedPriceAttribute()
    {
        return 'R$ ' . number_format($this->price, 2, ',', '.');
    }
    public function getImageUrlAttribute()
    {
        if (!$this->image_path) {
            return null;
        }

        if (str_starts_with($this->image_path, 'products/')) {
            return \Illuminate\Support\Facades\Storage::disk('public')->url($this->image_path);
        }

        return asset(ltrim($this->image_path, '/'));
    }
}
