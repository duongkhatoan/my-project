<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPostCategory extends Model
{
    use HasFactory;
    protected $table = 'post_post_category';

    protected $fillable = [
        'post_id',
        'post_category_id',
    ];
}
