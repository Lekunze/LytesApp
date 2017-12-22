<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'PRODUCTS';
    protected $fillable = ['business_id','product_name','product_price','product_category','product_shelf',
        'product_slug','product_image_1','product_image_2','product_image_3'];
}
