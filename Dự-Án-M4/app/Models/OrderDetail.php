<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table ='order_detail';
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    function orders(){
        return $this->belongsTo(Order::class);
    }
}
