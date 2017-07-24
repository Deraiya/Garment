@extends('layouts.master')

@section('content')

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
                                            <th>Prod Name</th>
                                            <th>Prod Company</th>
                                            <th>Categories</th>
                                            <th>Quantity</th>
                                            <th>CP</th>
                                            <th>SP</th>
                                            <th>Dealer's Code</th>
                                            <th>Sankruti Code</th>
                                            <th>Date Of Arrival</th>
                                            <th>Distributor</th>
                                            <th>Batch #</th>
                                            <th>Print</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="">
                                            <td>2</td>
                                            <td>ABC</td>
                                            <td>QWE</td>
                                            <td>Men</td>
                                            <td>6</td>
                                            <td>1000</td>
                                            <td>1300</td>
                                            <td>T2Q</td>
                                            <td>AEW</td>
                                            <td>10/11/17</td>
                                            <td>Shivam</td>
                                            <td>17946</td>
                                            <td><button type="button" class="btn btn-info btn-xs">Print</button></td>
                                            <td>
                                                <a href="{{url('/edit')}}">
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        Edit
                                                    </button>
                                                </a>

                                            </td>
                                            <td><button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                                        </tr>


                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Prod Name</th>
                                            <th>Prod Company</th>
                                            <th>Categories</th>
                                            <th>Quantity</th>
                                            <th>CP</th>
                                            <th>SP</th>
                                            <th>Dealer's Code</th>
                                            <th>Sankruti Code</th>
                                            <th>Date Of Arrival</th>
                                            <th>Distributor</th>
                                            <th>Batch #</th>
                                            <th>Print</th>
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
@endsection('content')