@extends('layouts.master')

@section('content')



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
                                                        <a href="{{route('EmployeeDetails')}}">
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





