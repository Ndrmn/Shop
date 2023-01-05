<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'brand',
        'model',
        'description',
        'price',
        'is_active',
        'category_id',
        'type_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }
}
