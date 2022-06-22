<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable  = ['id_order', 'id_product','qty'];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
