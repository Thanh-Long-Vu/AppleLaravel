<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'warehouse';
    protected $primaryKey = 'id_warehouse';

    public function product()
    {
        return $this->belongsTo('App\Models\Product','warehouse_id','id_warehouse');
    }
}
