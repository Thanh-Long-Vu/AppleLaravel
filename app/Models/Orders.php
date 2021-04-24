<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'order';
    public function product()
    {
        return $this->belongsTo('App\Models\Product','id_product','product_id');
    }
    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction','id_transaction','transaction_id');
    }
}
