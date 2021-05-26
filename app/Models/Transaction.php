<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Config\Traits\Scopes\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory,
    Filterable;
    // SoftDeletes;
    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
    public function order()
    {
        return $this->hasMany('App\Models\Order','order_id','id_order');
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
