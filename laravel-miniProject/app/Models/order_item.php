<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class order_item extends Model
{
    use HasFactory;
    protected $table = "order_item";
    protected $fillable = ['order_id','order_p_id','order_p_qty','oder_p_total_price','user_id'];
    public function order_item()
    {
        return $this->hasMany(order_item::class,'order_id','con_order_id');
    }
    public function order_item2()
    {
        return $this->hasMany(order_item::class,'order_p_id','id');
    }
}

