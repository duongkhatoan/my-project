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
        'brand_id',
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
        $disabledAttributeValues = []; // Mảng chứa value_id của các thuộc tính cần disable

        // Tạo mảng lưu thông tin các biến thể của các thuộc tính
        $attributeVariants = [];

        foreach ($variantAttributes as $attribute) {
            $attributeName = $attribute->attribute->name;
            $attributeValue = $attribute->attributeValue->value;
            $attributeValueId = $attribute->attributeValue->id;

            // Kiểm tra xem giá trị đã tồn tại trong mảng hay chưa
            if (!isset($productAttributes[$attributeName])) {
                $productAttributes[$attributeName] = [
                    'attribute_id' => $attribute->attribute->id,
                    'values' => [], // Tạo mảng để lưu giá trị thuộc tính
                ];
            }

            // Thêm giá trị vào mảng values của thuộc tính
            $productAttributes[$attributeName]['values'][$attributeValueId] = $attributeValue;

            // Kiểm tra nếu quantity = 0 thì thêm value_id vào mảng disabledAttributeValues
            if ($attribute->variant->quantity === 0) {
                $disabledAttributeValues[] = $attributeValueId;
            }

            // Lưu thông tin biến thể thuộc tính
            if (!isset($attributeVariants[$attributeValueId])) {
                $attributeVariants[$attributeValueId] = [
                    'quantity' => $attribute->variant->quantity,
                ];
            } else {
                // Kiểm tra nếu đã có biến thể có cùng value_id thì kiểm tra và cập nhật quantity
                if ($attributeVariants[$attributeValueId]['quantity'] !== $attribute->variant->quantity) {
                    $attributeVariants[$attributeValueId]['quantity'] = null;
                }
            }
        }

        // Kiểm tra và lọc các value_id cần disable dựa trên thông tin biến thể thuộc tính
        $disabledAttributeValues = array_filter($disabledAttributeValues, function ($valueId) use ($attributeVariants) {
            return $attributeVariants[$valueId]['quantity'] === 0;
        });

        return [
            'productAttributes' => $productAttributes,
            'disabledAttributeValues' => $disabledAttributeValues,
        ];
    }
    public function getActualPriceAttribute()
    {
        // Kiểm tra nếu có giá giảm giá thì trả về giá giảm giá, ngược lại trả về giá bán
        return $this->discount_price ? $this->discount_price : $this->sell_price;
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function getPriceRangeAttribute()
    {
        $minPrice = $this->variants->min('price');
        $maxPrice = $this->variants->max('price');

        return $minPrice . '-' . $maxPrice;
    }
    public function brand()
    {
        return $this->belongsToMany(Brand::class);
    }
}
