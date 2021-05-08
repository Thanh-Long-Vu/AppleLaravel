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
    protected $primaryKey = 'id_product';

    public function imageProduct()
    {
        return $this->hasMany('App\Models\ImagesProduct','product_id','id_product');
    }
    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType','product_type_id','id_product_type');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Orders','product_id','id_product');
    }
    public function warehouse()
    {
        return $this->hasOne('App\Models\Warehouse','id_warehouse','warehouse_id');
    }
}
