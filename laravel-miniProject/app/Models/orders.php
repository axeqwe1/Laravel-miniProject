<?php

namespace App\Models;

use App\Http\Controllers\OrdersController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Transfer_money;
class orders extends Model
{
    use HasFactory;
    protected $fillable = ['id','con_order_id','buyer_fname','buyer_lname','buyer_address','buyer_tel','buyer_email','total_price','shipping_cost','con_status','transfer_id','order_date','user_id'];
    protected $table = 'orders';

    public function order_item(){
        return $this->hasMany(order_item::class);
    }
    public function transfer_money(){
        return $this->belongsTo(Transfer_money::class,'transfer_id','id');
    }
    public function transfer_money_id(){
        return $this->belongTo(Transfer_money::class);
    }
    public function user(){
        return $this->belongsTo(user_order::class,'user_id','id');
    }
    public static function boot(){
        parent::boot();

        self::creating(function($model){
            // orders::orderBy('con_order_id','desc')->first()->con_order_id + 1;
            // $model->con_order_id = orders::where('con_order_id',$model->con_order_id)->max('con_order_id') + 1;
            $model->con_order_id = $model->max('con_order_id') + 1;
            $model->id = $model->max('id') + 1;
            // $getId = $model->transfer_id;
            // if(isset($getId)){
            //     $model->transfer_id = Transfer_money::max('id');
            // }else{
            //     DB::transaction(function () {
            //         $id = orders::next();
            //         DB::update('update orders set transfer_id = ?',[$id]);
            //     });
            // }

        });
    }
    public static function next(){
        return static::max('con_order_id') + 1;
    }

}
