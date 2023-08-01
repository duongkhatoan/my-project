<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function attribute_values()
    {
        return $this->hasMany(AttributeValue::class);
    }
    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class, 'product_attribute_id');
    }
    public function values()
    {
        return $this->hasMany(AttributeValue::class, 'attribute_id');
    }

}
