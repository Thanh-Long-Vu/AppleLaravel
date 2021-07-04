<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Config\Traits\Scopes\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory,
    Filterable;
    protected $table = 'contact';
    protected $primaryKey = 'id_contact';
    protected $fillable = [
        'name',
        'title',
        'name',
        'comment',
        'active',
    ];
}
