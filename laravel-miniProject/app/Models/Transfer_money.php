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
         /**
         * Get the user associated with the Transfer_money
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function orderOne()
        {
            return $this->hasOne(orders::class, 'transfer_id', 'id');
        }

        public static function boot(){
            parent::boot();

            static::creating(function($model){
                // orders::orderBy('con_order_id','desc')->first()->con_order_id + 1;
                // $model->con_order_id = orders::where('con_order_id',$model->con_order_id)->max('con_order_id') + 1;
                $model->con_order_id = $model->max('con_order_id') + 1;
                $model->id = $model->max('id') + 1;
                // $get = $model->con_order_id = orders::where('con_order_id',$model->con_order_id)->max('con_order_id') + 1;

<<<<<<< HEAD
                DB::transaction(function () {
                    $id= orders::next();
                    $tfID = Transfer_money::max('id');
                    $newModel = orders::create(['id' => $id,'user_id' => Auth::user()->id,'transfer_id' => $tfID]);
                    // DB::update('update orders set con_order_id = ?', [$newModel]);
            });
            // DB::insert('insert into orders (id,con_order_id,user_id) values (?,?,?)', [1,Auth::user()->id,$get]);
            });
        }

        public static function next(){
            return static::max('id') + 1;
        }
=======
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
>>>>>>> 9c8c61fe58a5b0d452b6dc900731eda215870a4b
    }
