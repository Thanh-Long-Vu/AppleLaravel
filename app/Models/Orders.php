<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id','id_product');
    }
    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction','transaction_id','id_transaction');
    }
}
