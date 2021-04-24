<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id_user');
    }
    function product_type()
    {
        return $this->belongsTo('App\Models\ProductType','product_type_id','id_product_type');
    }
}
