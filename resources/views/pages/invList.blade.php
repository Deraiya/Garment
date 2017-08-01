@extends('layouts.master')

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="m-b-md">
                                <h2>Added Inventory List</h2>

                            </div>
                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{$product->uid}}</td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->product_company}}</td>
                                                <td>{{$product->category}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->cp}}</td>
                                                <td>{{$product->sp}}</td>
                                                <td>{{$product->dealer_code}}</td>
                                                <td>{{$product->sanskruti_code}}</td>
                                                <td>{{$product->distributor}}</td>
                                                <td>{{$product->date_arr}}</td>
                                                <td>{{$product->batch}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs">Print</button>
                                                </td>
                                                <td>
                                                    <a href="{{url("edit/$product->uid")}}">
                                                        <button type="button" class="btn btn-primary btn-xs">
                                                            Edit
                                                        </button>
                                                    </a>

                                                </td>
                                                <td><a href="{{url("delete/product/$product->uid") }}">
                                                        <button type="button" class="btn btn-danger btn-xs">Delete
                                                        </button>
                                                    </a></td>
                                            </tr>

                                        @endforeach
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