<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer_money extends Model
{
    use HasFactory;
    protected $table = "transfer_money";
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
}
