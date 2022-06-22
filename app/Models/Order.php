<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'order_date'];

    public function person(){
        return $this->belongsTo(Person::class);
    }
    public function ordersproduct(){
        return $this->hasMany(OrderProduct::class);
    }
}
