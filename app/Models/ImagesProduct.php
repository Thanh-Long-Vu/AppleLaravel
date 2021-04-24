<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    use HasFactory;
    protected $table = 'image_product';
    public function product()
    {
        return $this->belongsTo('App\Models\Product','id_product','product_id');
    }
}
