<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function getSales(){
        $employees = Employee::all();
        return view('pages.sales',compact('employees'));
    }
}
