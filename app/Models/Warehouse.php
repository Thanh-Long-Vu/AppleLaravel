<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = 'warehouse';

    public function product()
    {
        return $this->belongsTo('App\Models\Product','warehouse_id','id_warehouse');
    }
}
