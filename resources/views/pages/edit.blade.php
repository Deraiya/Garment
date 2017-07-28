@extends('layouts.master')
@section('css')
    <script src="{{asset('js/JsBarcode.all.min.js')}}"></script>
@endsection
@section('content')
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="ibox-title" style="border: none">
                <h2>  Add Inventory</h2>
                <hr>
            </div>
            @foreach($result as $d)
            <form action="{{route('updateProduct')}}" method="post">

            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">UID</label>
                    <input type="text" readonly="readonly" id="UID" name="uid" value="{{$d->uid}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <input type="text" id="" name="product_name" value="{{$d->product_name}}" placeholder=" "  autofocus class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Product Company</label>
                    <input type="text" id="" name="product_company" value="{{$d->product_company}}" placeholder="" class="form-control">
                </div>
            </div>


            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Category</label>
                    <input type="text" id="" name="category" value="{{$d->category}}"  class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Quantity</label>
                    <input type="text" id="" name="quantity" value="{{$d->quantity}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">CP</label>
                    <input type="text" id="" name="cp" value="{{$d->cp}}" placeholder="" class="form-control">
                </div>
            </div>

            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">SP</label>
                    <input type="text" id="" name="sp" value="{{$d->sp}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Dealer's Code</label>
                    <input type="text" id="" name="dealer_code" value="{{$d->dealer_code}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Sanskruti's Code</label>
                    <input type="text" id="" name="sanskruti_code" value="{{$d->sanskruti_code}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Distributor</label>
                    <input type="text" id="" name="distributor" value="{{$d->distributor}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Date Of Arrival</label>
                    <div>
                        <input type="text" class="form-control" value="{{ Carbon\Carbon::createFromFormat('Y-m-d',$d->date_arr)->format('d/m/Y')}}" name="date_arr" data-mask="99/99/9999" placeholder="">
                    </div>
                </div>
            </div>

            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Batch #</label>
                    <input type="text" id="" name="batch" value="{{$d->batch}}" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="ibox-content " style="border: none;display: flex;flex-direction: column;justify-content: flex-start ">
                            <div class="m-b-sm pull-left">
                                <img alt="image" class="" id="barcode">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <button type="button" class="btn btn-info m-r-md" >Print</button>
                    <button type="submit" class="btn btn-danger ">Submit</button>
                </div>
            </div>

                {{ csrf_field() }}
            </form>

            @endforeach



        <hr class="hr-line-solid">

        </div>

    </div>
@endsection('content')

@section('js')
            <script>
                function generateBar(value) {
                    JsBarcode('#barcode',value,{
                        width:2,
                        height:40
                    });
                }
                var UID = document.getElementById('UID');
                document.body.onload= generateBar(UID.value);
            </script>
    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
@endsection('js')





