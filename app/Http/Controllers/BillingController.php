<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Employee;
use App\Product;
use App\SoldProducts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function getBilling(){
        $employee = Employee::all();
        return view('pages.billing',compact('employee'));
    }

    public function findProduct(Request $request,$id){
        $product = Product::where('uid',$id)->first();
        $productArray[0]= $product->uid;
        $productArray[1]= $product->product_name;
        $productArray[2]= $product->category;
        $productArray[3]= $product->sp;
        return $productArray;
    }

    public function generateBill(Request $request)
    {
        $product_ids = str_replace("\r\n"," ",$request['product_ids']);
        $tempArray = explode(" ", $product_ids);
        $productArray =[];
        array_pop($tempArray);
        $i=0;
        $bill_no = count(Bill::all())+1;

        foreach ($tempArray as $product)
        {
            $productArray[$i++] = Product::where('uid',$product)->first();
        }
        $totalprice = $this->insert($request,$productArray,$bill_no);

        return view('pages.print',compact('productArray','bill_no','totalprice'));
    }
    function insert($request,$products,$bill_no)
    {
        $totalprofit =0;
        $totalprice = 0;
        foreach ($products as $product){
            $sold = new SoldProducts();
            $sold->invoice = $bill_no;
            $sold->product_name = $product->product_name;
            $sold->sprice = $product->sp;
            $sold->profit = $product->sp - $product->cp;
            $totalprofit = $totalprofit + $sold->profit;
            $totalprice = $totalprice + $product->sp;
            $sold->save();
        }
        $bill = new Bill();
        $bill->invoice = $bill_no;
        $bill->employee_name = $request['employee_name'];
        $bill->customer_name = $request['customer_name'];
        $bill->address = $request['address'];
        $bill->profit = $totalprofit;
        $bill->totalprice = $totalprice;
        $bill->billdate = Carbon::today()->toDateString();
        $bill->save();
        return $totalprice;


    }
}
