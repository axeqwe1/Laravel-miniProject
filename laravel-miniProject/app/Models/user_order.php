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
    'user_address', 'user_bod', 'user_tel', 'user_email', 'role','create_at','update_at'];

    public $timestamps = false;
        // public function orders()
        // {
        //     return $this->hasMany(orders::class);
        // }
        // public function cart(){
        //     return $this->hasMany(cart::class);
        // }

        public function orders()
        {
            return $this->hasMany(orders::class);
        }
        public function cart(){
            return $this->hasMany(cart::class);
        }
}
