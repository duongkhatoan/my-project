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
        $product = self::select('id', 'name', 'image', 'sell_price', 'discount_price')
            ->where('id', $productId)
            ->first();

        // Tính toán giá bán (price) dựa trên discount_price và sell_price
        $price = $product->discount_price > 0 ? $product->discount_price : $product->sell_price;
        $product->price = $price;

        return $product;
    }

    // Trong model Product
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'variant_attributes', 'product_id', 'attribute_id')
            ->withPivot('value_id');
    }


    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }
    // public function variantss(): BelongsToMany
    // {
    //     return $this->belongsToMany(VariantAttribute::class, 'product_variants')
    //         ->withPivot('price', 'quantity');
    // }
    public function variantsx()
    {
        return $this->belongsToMany(VariantAttribute::class, 'product_variants')
            ->withPivot('price', 'quantity')
            ->using(ProductVariant::class);
    }
    public function getAttributesWithValues()
    {
        $attributesWithValues = [];

        foreach ($this->attributes as $attribute) {
            $attributeValues = $attribute->values->whereIn('id', $attribute->pivot->attribute_value_id);
            $attributesWithValues[] = [
                'attribute' => $attribute,
                'values' => $attributeValues,
            ];
        }

        return $attributesWithValues;
    }
    public function variantAttributes()
    {
        return $this->hasMany(VariantAttribute::class, 'product_id');
    }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class, 'attribute_value_id');
    }
    public function getAttributeValues()
    {
        $variantAttributes = $this->variantAttributes()
            ->with('attribute', 'attributeValue')
            ->get();

        $productAttributes = [];
        foreach ($variantAttributes as $attribute) {
            $attributeName = $attribute->attribute->name;
            $attributeValue = $attribute->attributeValue->value;

            // Kiểm tra xem giá trị đã tồn tại trong mảng hay chưa
            if (!isset($productAttributes[$attributeName])) {
                $productAttributes[$attributeName] = [
                    'id' => $attribute->attribute->id,
                ];
            }

            if (!in_array($attributeValue, $productAttributes[$attributeName])) {
                $productAttributes[$attributeName]['value'][$attribute->attributeValue->id] = $attributeValue;
            }
        }
        return $productAttributes;
    }
}
