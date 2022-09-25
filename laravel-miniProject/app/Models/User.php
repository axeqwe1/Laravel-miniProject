<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //protected $table = "users";
    //protected $fillable = ['user_id', 'user_fname', 'user_lname', 'user_username', 'user_password', 'user_sex',
     //'user_address', 'user_bod', 'user_tel', 'user_email', 'role'];


    //public $timestamps = false;

    //protected $hidden = [
    //    'password',
    //    'remember_token',
   // ];
    //protected $casts = [
   //     'email_verified_at' => 'datetime',
   // ];


    //public function orders()
   // {
   //     return $this->hasMany(orders::class);
   // }
   // public function cart(){
    //    return $this->hasMany(cart::class);
   // }
}
