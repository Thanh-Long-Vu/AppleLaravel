<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
   protected $fillable = [
       'name',
       'email',
       'password',
       'role_id',
       'avatar',
       'total_pay',
   ];
//
//    /**
//     * The attributes that should be hidden for arrays.
//     *
//     * @var array
//     */
   protected $hidden = [
       'password',
       'remember_token',
   ];

//    /**
//     * The attributes that should be cast to native types.
//     *
//     * @var array
//     */
   protected $casts = [
       'email_verified_at' => 'datetime',
   ];
   protected $primaryKey = 'id_user';
    protected $table = 'users';
    public function rating()
    {
        return $this->hasMany('App\Models\Rating','id_rating','rating_id');
    }
    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction','id_transaction','transaction_id');
    }
    public function role()
    {
        return $this->belongsTo('App\Models\Role','role_id','id_role');
    }
}
