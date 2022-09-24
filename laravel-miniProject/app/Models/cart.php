<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    protected $fillable = ['user_id' , 'cart_p_id' , 'cart_p_qty'];

    public function cart()
    {
        return $this->belongsTo(cart::class,'user_id','id');
    }

    public function cart2()
    {
        return $this->belongsTo(cart::class, 'cart_p_id','id');
    }
}
