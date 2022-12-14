<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'product_id',
        'product_name',
        'product_detail',
        'product_price',
        'product_qty',
        'product_pic',
        'product_note',
        'category_id'

    ];
    /**
     * Get all of the category for the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

    public function order_item(){
        return $this->hasMany(order_item::class);
    }

    public function cart(){
        return $this->hasMany(cart::class);
    }
}
