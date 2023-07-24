<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use Sluggable;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'sku',
        'slug',
        'description',
        'excerpt',
        'discount_price',
        'sell_price',
        'image',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->sku = 'product_' . Str::random(8);
        });
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // public function registerMediaConversions(Media $media = null): void
    // {
    //     $this->addMediaConversion('thumb')
    //         ->width(200)
    //         ->height(200);
    // }

    public static function getBasicInfo($productId)
    {
        // Lấy thông tin cơ bản của sản phẩm theo id
        $product = self::select('id','name', 'image', 'sell_price', 'discount_price')
            ->where('id', $productId)
            ->first();

        // Tính toán giá bán (price) dựa trên discount_price và sell_price
        $price = $product->discount_price > 0 ? $product->discount_price : $product->sell_price;
        $product->price = $price;

        return $product;
    }
}
