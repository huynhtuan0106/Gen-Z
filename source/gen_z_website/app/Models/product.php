<?php

namespace App\Models;

//use Illuminate\Databases\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public function product_category()
    {
        return $this->belongsTo(product_category::class, 'category_id');
    }
}
