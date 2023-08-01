<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price',
        'quantity',
        // Thêm các trường fillable khác tùy theo yêu cầu sản phẩm
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'variant_attributes', 'variant_id', 'attribute_id')
            ->withPivot('value_id');
    }

    public function values()
    {
        return $this->belongsToMany(AttributeValue::class, 'variant_attributes', 'variant_id', 'value_id')
            ->withPivot('attribute_id');
    }
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'variant_attributes', 'variant_id', 'value_id')
            ->withPivot('attribute_id');
    }
}
