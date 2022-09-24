<?php

namespace App\Models;

use App\Http\Controllers\OrdersController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orders extends Model
{
    use HasFactory;
    protected $fillable = ['id','con_order_id','buter_fname','buyer_lname','buyer_address','buyer_tel','buyer_email','con_status','transfer_id','order_date'];
    protected $table = 'orders';


    public function orders(){
        return $this->belongsTo(order::class);
    }
    public function transfer_money(){
        return $this->belongsTo(orders::class,'transfer_id','id');
    }
    public function user(){
        return $this->belongsToMany(orders::class,'user_id','id');
    }
}
