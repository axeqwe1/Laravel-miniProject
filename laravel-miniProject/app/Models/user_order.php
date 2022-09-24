<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_order extends Model
{
    use HasFactory;
    protected $table = "user_orders";
    protected $fillable = ['user_id', 'user_fname', 'user_lname', 'user_username', 'user_password', 'user_sex',
     'user_address', 'user_bod', 'user_tel', 'user_email', 'role'];

        public function cart()
        {
            return $this->hasMany(user_order::class);
        }

}
