<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    protected $fillable = ['user_id' , 'cart_p_id' , 'cart_p_qty'];

    public function user_order()
    {
        return $this->belongsTo(user_order::class,'user_id','id');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'cart_p_id','id');
    }
}
