<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $primaryKey = 'id_brand';

    public function category()
    {
        return $this->hasMany('App\Models\Category','brand_id','id_brand');
    }
}
