<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable = [
        'id','product_name','product_company','category','quantity','cp','sp','dealer_code','sanskruti_code','distributor','date_arr','barcode','batch','flag',
    ];
}
