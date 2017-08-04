<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function getDashboard(){
       $garmentCount = count(Product::all());
       //dd(Carbon::today()->toDateTimeString());
       $todaySales = $this->calculateSales(Carbon::today()->toDateString());
       return view('pages.dashboard',compact('garmentCount','todaySales'));
   }
   function calculateSales($date)
   {
       $totalprice =0;
       $bills = Bill::where('billdate',$date)->get();
       foreach ($bills as $bill)
       {
            $totalprice += $bill->totalprice;
       }
       return $totalprice;
   }
}
