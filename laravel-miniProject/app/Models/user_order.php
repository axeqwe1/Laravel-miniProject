<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class user_order extends Model
{
    use HasFactory;
    protected $table = "user_orders";
    protected $fillable = ['user_id', 'user_fname', 'user_lname', 'user_username', 'user_password', 'user_sex',
     'user_address', 'user_bod', 'user_tel', 'user_email', 'role'];

        public function cart()
        {
<<<<<<< HEAD
            return $this->hasMany(orders::class);
        }
        public function cart1(){
            return $this->hasMany(cart::class);
=======
            return $this->hasMany(user_order::class);
>>>>>>> 5043a1bb82d7abcf4cebde3561373f701a5f2717
        }
}
