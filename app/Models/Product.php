<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    public function imageProduct()
    {
        return $this->hasMany('App\Models\ImagesProduct','product_id','id_product');
    }
    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType','id_product_type','product_type_id');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Orders','product_id','id_product');
    }
    public function warehouse()
    {
        return $this->hasOne('App\Models\Warehouse','warehouse_id','id_warehouse');
    }
}
