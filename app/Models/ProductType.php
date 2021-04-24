<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    function product()
    {
        return $this->hasMany('App\Models\Product','id_product_type','product_type_id');
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
        return $this->belongsTo('App\Models\Category','id_category','category_id');
    }
}
