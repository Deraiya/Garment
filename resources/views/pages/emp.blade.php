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
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Total Sales</th>
                                            <th>Details</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="">
                                            <td>2</td>
                                            <td>Ashoksingh</td>
                                            <td>Rajpurohit</td>
                                            <td>20</td>
                                            <td>
                                            <a href="{{url('/emp/details')}}">
                                                <button type="button" class="btn btn-primary btn-xs">
                                                    Details
                                                </button>
                                            </a>

                                            </td>
                                            <td><button type="button" class="btn btn-danger btn-xs">Delete</button></td>

                                        </tr>


                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Total Sales</th>
                                            <th>Details</th>
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





