<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Config\Traits\Scopes\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CancelTransaction extends Model
{
    const UPDATED_AT = null;
    protected $table = 'cancel_transaction';
    protected $fillable = ['transaction_id','token'];
}