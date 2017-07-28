<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;

class ProductEntryController extends Controller
{
    public function getProductEntry(){
        $UID = rand(100,999).time();
        return view('pages.entry',compact('UID'));
    }

    public function postProductEntry(Request $request)
    {
       /* $this->validate($request, [
            'product_name' => 'required|max:120',
            'product_company' => 'required|max:120',
            'category' => 'required',
            'quantity' => 'required|numeric',
            'cp' => 'required|numeric',
            'sp' => 'required|numeric',
            'dealer_code' =>'required',
            'sanskruti_code' => 'required',
            'distributor' => 'required',
            'batch' => 'required',
        ]);*/

        $date_arr = Carbon::createFromFormat('d/m/Y', $request['date_arr'])->format('Y-m-d');
        $products = new Product([
            'id' => $request->input('uid'),
            'product_name' => $request->input('product_name'),
            'product_company' => $request->input('product_company'),
            'category' => $request->input('category'),
            'quantity' => $request->input('quantity'),
            'cp' => $request->input('cp'),
            'sp' => $request->input('sp'),
            'dealer_code' => $request->input('dealer_code'),
            'sanskruti_code' => $request->input('sanskruti_code'),
            'distributor' => $request->input('distributor'),
            'date_arr' => $date_arr,
            'batch' => $request->input('batch'),
        ]);
        $products->save();
        return redirect()->back();
    }

    public function updateproduct(Request $request)
    {
        $date_arr = Carbon::createFromFormat('d/m/Y', $request['date_arr'])->format('Y-m-d');
        Product::where('id', $request->input('uid'))
            ->update([

                'product_name' => $request->input('product_name'),
                'product_company' => $request->input('product_company'),
                'category' => $request->input('category'),
                'quantity' => $request->input('quantity'),
                'cp' => $request->input('cp'),
                'sp' => $request->input('sp'),
                'dealer_code' => $request->input('dealer_code'),
                'sanskruti_code' => $request->input('sanskruti_code'),
                'distributor' => $request->input('distributor'),
                'date_arr' => $date_arr,
                'batch' => $request->input('batch'),
            ]);


        return redirect()->route('Inventory');

    }


}
