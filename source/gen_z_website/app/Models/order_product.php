<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    protected $table = 'order_product';

    public function chitiet(){
        return $this->hasMany('App\Models\order_detail','order_id', 'id');
    }
    
    
}
