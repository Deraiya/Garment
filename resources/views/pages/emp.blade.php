@extends('layouts.master')

@section('content')
    <div class="ibox-content m-b-sm border-bottom">

        <div class="ibox-title" style="border: none">
            <h2>  Add Employees</h2>
            <hr>
        </div>


        <form action="{{route('postEmployee')}}" method="post">
            {{csrf_field()}}
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="product_name">First Name</label>
                    <input type="text" id="" name="first_name" value="" placeholder=" "  autofocus class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Last Name</label>
                    <input type="text" id="" name="last_name" value="" placeholder="" class="form-control">
                </div>
            </div>


            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Address</label>
                    <input type="text" id="" name="address" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Phone No</label>
                    <input type="text" id="" name="phone_no" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Date Of Birth</label>
                    <div>
                        <input type="text" class="form-control" name="dob" value="" data-mask="99/99/9999" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Discription</label>
                    <input type="text" id="" name="discription" value="" placeholder="" class="form-control">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">

                    <button type="submit" class="btn btn-danger ">Submit</button>
                </div>
            </div>

        </form>


        <hr class="hr-line-solid">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins" >
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="m-b-md">
                                        <h2>Added Inventory List</h2>

                                    </div>
                                    <div class="ibox-content">

                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Address</th>
                                                    <th>Phone No</th>
                                                    <th>Date Of Birth</th>
                                                    <th>Discription</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($emps as $emp)
                                                <tr class="">
                                                    <td>{{$emp->first_name}}</td>
                                                    <td>{{$emp->last_name}}</td>
                                                    <td>{{$emp->address}}</td>
                                                    <td>{{$emp->phone_no}}</td>
                                                    <td>{{$emp->dob}}</td>
                                                    <td>{{$emp->discription}}</td>
                                                    <td>
                                                        <a href="{{url("edit/employee/$emp->id")}}">
                                                            <button type="button" class="btn btn-primary btn-xs">
                                                                Edit
                                                            </button>
                                                    </td>
                                                    <td><button type="button" class="btn btn-danger btn-xs">Delete</button></td>

                                                </tr>
                                                    @endforeach

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Address</th>
                                                    <th>Phone No</th>
                                                    <th>Date Of Birth</th>
                                                    <th>Discription</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection('content')

    @section('js')
        <!-- Input Mask-->
            <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
@endsection('js')





