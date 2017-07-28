<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function getBilling(){
        return view('pages.billing');
    }

    public function findProduct(Request $request,$id){
        $product = Product::where('uid',$id)->first();
        return $product->product_name;
    }
}
