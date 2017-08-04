@extends('layouts.master')

@section('content')
    <div class="col-lg-12" >
        <div class="ibox float-e-margins" >
            <div class="ibox-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="m-b-md">
                                <h2><b></b> Details</h2>

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
                                            <th>CP</th>
                                            <th>SP</th>
                                            <th>Date Of Sale</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                        <tr class="">
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->product_name}}</td>
                                            <td>QWE</td>
                                            <td>Men</td>
                                            <td>{{$product->sprice - $product->profit}}</td>
                                            <td>{{$product->sprice}}</td>
                                            <td>{{$product->dos}}</td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Prod Name</th>
                                            <th>Prod Company</th>
                                            <th>Categories</th>
                                            <th>CP</th>
                                            <th>SP</th>
                                            <th>Date Of Arrival</th>

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

@section('js')
    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
@endsection('js')





