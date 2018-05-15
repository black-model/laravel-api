<?php

namespace App\Model;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function product($value='')
    {
        return $this->belongsTo('App\Model\Product' , 'product_id');
        
    }
}
