<?php

namespace App\Http\Controllers;

use App\Bill;
use App\SoldProducts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;
use App\Employee;

class EmployeeController extends Controller
{
    public function getEmployee(){
        $emps = Employee::all();
        return view('pages.emp',compact('emps'));
    }
    public function  editEmployee(Request $request, $id){
        $emp = Employee::where('id', $id)->get();
        return view('pages.editEmployee', compact('emp'));
    }

    public function updateEmployee(Request $request,$id){
        $dob = Carbon::createFromFormat('d/m/Y', $request['dob'])->format('Y-m-d');
        Employee::where('id', $id)
            ->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'phone_no' => $request->input('phone_no'),
            'dob' => $dob,
            'discription' => $request->input('discription'),
        ]);
        $bills = Bill::where('employee_id',$id)->get();
        foreach ($bills as $bill)
        {
            $bill->employee_name = $request['first_name'];
            $bill->save();
        }
        return redirect()->route('Employee');
    }
    public function postEmployee(Request $request)
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

        $dob = Carbon::createFromFormat('d/m/Y', $request['dob'])->format('Y-m-d');
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
    public function getEmployeeDetails(Request $request,$id){
        $products = SoldProducts::where('employee_id',$id)->get();
        //dd($products);
        return view('pages.empDetails',compact('products'));
    }
}
