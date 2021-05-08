<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'product_types';
    protected $primaryKey = 'id_product_type';
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'warranty',
        'active',
        'category_id',
    ];

    protected $casts = [
        'data' => 'array'
    ];

    function product()
    {
        return $this->hasMany('App\Models\Product','product_type_id','id_product_type');
    }
    function rating()
    {
        return $this->hasMany('App\Models\Rating','id_product_type','product_type_id');
    }
    function blog()
    {
        return $this->hasMany('App\Model\Blog','id_product_type','product_type_id');
    }
    function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id_category');
    }
}
