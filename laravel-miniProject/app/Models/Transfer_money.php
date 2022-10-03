<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;
class Transfer_money extends Model
{
    use HasFactory;
    protected $table = "transfer_moneys";
    protected $fillable = ['con_order_id','transfer_datetime'
    ,'transfer_money','transfer_evidence','transfer_staus'];

    /**
     * Get the user that owns the Transfer_money
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orders()
    {
        return $this->belongsTo(orders::class, 'con_order_id', 'con_order_id');
    }

    /**
     * Get the user that owns the Transfer_money
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orders1()
    {
        return $this->belongsTo(orders::class);
    }

    public static function boot(){
        parent::boot();

        self::creating(function($model){
            // orders::orderBy('con_order_id','desc')->first()->con_order_id + 1;
            // $model->con_order_id = orders::where('con_order_id',$model->con_order_id)->max('con_order_id') + 1;
            $model->con_order_id = $model->max('con_order_id') + 1;
            $model->id = $model->max('id') + 1;
            // $get = $model->con_order_id = orders::where('con_order_id',$model->con_order_id)->max('con_order_id') + 1;

            DB::transaction(function () {
                $id = orders::next();
                $test = Transfer_money::all();
                foreach($test as $item){
                    $getId = $item->id;
                }
                $newModel = orders::create(['id' => $id,'user_id' => Auth::user()->id,'transfer_id'=>$getId]);
                // DB::update('update orders set con_order_id = ?', [$newModel]);
        });
        });
    }

    public static function next(){
        return static::max('id') + 1;
    }
}
