<?php

namespace App\Http\Controllers;

use App\Bill;
use App\SoldProducts;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function getHistory(){
        $historylist = Bill::all();
        $productlist = [];
        $i=0;
        foreach ($historylist as $history)
        {
            $productlist[$i++] = SoldProducts::where('invoice',$history->invoice)->get();
        }
        return view('pages.history',compact('historylist','productlist'));
    }

}
