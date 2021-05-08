<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'title',
    ];
    public function productype()
    {
        return $this->hasMany('App\Models\ProductType','category_id','id_category');
    }
}
