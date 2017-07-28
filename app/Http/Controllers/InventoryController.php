<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInventoryList()
    {
        $products = Product::all();
        return view('pages.invList',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function editProduct(Request $request, $id)
    {
        $result = Product::where('id', $id)->get();
        return view('pages.edit', compact('result','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productdestroy($id)
    {
        $delete = Product::where('id', $id)->first();

        $delete->flag = 0;
        $delete->save();
        return redirect()->back();
    }
}
