<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Config\Traits\Scopes\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse extends Model
{
    use HasFactory,
        Filterable,
        SoftDeletes;

    protected $table = 'warehouse';
    protected $primaryKey = 'id_warehouse';
    protected $fillable = ['name', 'quantity', 'imei', 'color', 'memory', 'price', 'warranty', 'active', 'created_at', 'updated_at', 'deleted_at', 'quantity_sell'];


    public function product()
    {
        return $this->hasOne('App\Models\Product', 'warehouse_id', 'id_warehouse');
    }
}
