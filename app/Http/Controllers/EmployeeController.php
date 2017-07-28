<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;
use App\Employee;

class EmployeeController extends Controller
{
    public function getEmployee(){
        return view('pages.emp');
    }
    public function postEmployee(Request $request)
    {
     dd($request);
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

        $dob = Carbon::createFromFormat('d/m/Y', $request['date_arr'])->format('Y-m-d');
        $employees = new Employee([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'phone_no' => $request->input('phone_no'),
            'dob' => $dob,
            'discription' => $request->input('discription'),
        ]);
        $employees->save();
        return redirect()->back();
    }
    public function getEmployeeDetails(){
        return view('pages.empDetails');
    }
}
