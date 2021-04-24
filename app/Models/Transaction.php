<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    public function order()
    {
        return $this->hasMany('App\Models\Order','id_order','order_id');
    }
    function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id_user');
    }
    function payment_method()
    {
        return $this->belongsTo('App\Models\PaymentMethod','payment_method_id','id_payment_method');
    }
}
