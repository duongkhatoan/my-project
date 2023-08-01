<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'variant_id',
        'attribute_id',
        'value_id',
        'product_id',
        // Thêm các trường fillable khác tùy theo yêu cầu sản phẩm
    ];

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function value()
    {
        return $this->belongsTo(AttributeValue::class);
    }
    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class, 'value_id');
    }
}
