<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $table = 'product_category';

    public function sanpham(){
        return $this->hasMany('App\Models\product','category_id', 'id');
    }
}
