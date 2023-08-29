<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'description',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function buildCategoryTree($parentId = null, $prefix = '')
    {
        $categories = Category::where('parent_id', $parentId)->get();
        $categoryTree = [];

        foreach ($categories as $category) {
            $label = $prefix . $category->name;
            $categoryTree[] = ['id' => $category->id, 'label' => $label];
            $categoryTree = array_merge($categoryTree, $this->buildCategoryTree($category->id, $prefix . '-'));
        }

        return $categoryTree;
    }
    public function getTreeCate($parentId = null)
    {
        $categoryTree = [];

        $categories = Category::where('parent_id', $parentId)->get();

        foreach ($categories as $category) {
            $category->children = $this->getTreeCate($category->id);
            $categoryTree[] = $category;
        }

        return $categoryTree;
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
