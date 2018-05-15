<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function reviews($value='')
    {
        return $this->hasMany( 'App\Model\Review' );
    }
}
