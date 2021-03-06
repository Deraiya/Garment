@extends('layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h1>Transaction History</h1>

            </div>
            <div class="ibox-content">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                        <tr>
                            <th>Invoice #</th>
                            <th>Product Names</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Employee</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<count($historylist);$i++)
                            <tr class="">
                            <td>{{$historylist[$i]->invoice}}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal{{$i}}">
                                    View
                                </button>
                                <div class="modal inmodal fade" id="myModal{{$i}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title pull-left">Garment List</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="table-responsive m-t">
                                                        <table class="table invoice-table">
                                                            <thead>
                                                            <tr>
                                                                <th>Item Name</th>
                                                                <th>Price</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($productlist[$i] as $product)
                                                            <tr>
                                                                <td>{{$product->product_name}}</td>
                                                                <td>{{$product->sprice}}</td>
                                                            </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div><!-- /table-responsive -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{count($productlist[$i])}}</td>
                            <td>{{$historylist[$i]->totalprice}}</td>
                            <td>{{$historylist[$i]->employee_name}}</td>

                        </tr>
                        @endfor
                        <tfoot>
                        <tr>
                            <th>Invoice #</th>
                            <th>Product Names</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Employee</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection('content')


