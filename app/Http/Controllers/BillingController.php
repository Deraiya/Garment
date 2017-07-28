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
        $productArray[0]= $product->product_name;
        $productArray[1]= $product->category;
        $productArray[2]= $product->sp;
        return $productArray;
    }
}
