<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return  [
            'name' => $this->name ,
            'description' => $this->detail, 
            'tag-price' => $this->price,
            'stock' => $this->stock  == 0 ?  'out of stock' : $this->stock ,
            'discount' => $this->discount  ,
            'sale-price' =>  round( $this->price * ( 1 - $this->discount / 100) , 2),
            'rating' => $this->reviews->count() > 0 ?  round($this->reviews->sum('star')  / $this->reviews->count(), 2) : ''  ,
            'href' => [
                'reviews' => route('reviews.index' , $this->id)
            ],
        ];

    }
}
