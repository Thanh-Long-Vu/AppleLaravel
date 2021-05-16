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

    /**
     * scopeActive
     *
     * @param $query
     * @param string $scope
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query, $scope = 'where')
    {
        return $query->$scope('active', 1);
    }

    public function imageProduct()
    {
        return $this->hasMany('App\Models\ImagesProduct','product_id','id_product');
    }
    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType','product_type_id','id_product_type');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id_category ');
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
