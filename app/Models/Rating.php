<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Config\Traits\Scopes\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory,
    Filterable;
    protected $table = 'ratings';
    protected $primaryKey = 'id_rating';
    function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id_user');
    }
    function product_type()
    {
        return $this->belongsTo('App\Models\ProductType','product_type_id','id_product_type');
    }
}
