<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPrice extends Model
{
    use HasFactory;
    protected $table = 'history_price';
    protected $primaryKey = 'id_history_price';
    // protected $fillable = ['transaction_id','token'];
     
}
