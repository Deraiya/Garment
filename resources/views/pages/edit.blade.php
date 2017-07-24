@extends('layouts.master')

@section('content')
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="ibox-title" style="border: none">
                <h2>  Add Inventory</h2>
                <hr>
            </div>



            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">UID</label>
                    <input type="text" disabled id="" name="" value=" 036000291452" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <input type="text" id="" name="" value="" placeholder=" "  autofocus class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Product Company</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>


            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Category</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Quantity</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">CP</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>

            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">SP</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Dealer's Code</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="price">Sanskruti's Code</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Distributor</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Date Of Arrival</label>
                    <div>
                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Distributor</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="control-label" for="quantity">Batch #</label>
                    <input type="text" id="" name="" value="" placeholder="" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="ibox-content " style="border: none;display: flex;flex-direction: column;justify-content: flex-start ">
                            <div class="m-b-sm pull-left">
                                <img alt="image" class="" src="img/barcode.png">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <button type="button" class="btn btn-info m-r-md" >Print</button>
                    <button type="button" class="btn btn-danger ">Submit</button>
                </div>
            </div>




        </div>
        <hr class="hr-line-solid">



    </div>
@endsection('content')

@section('js')
    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
@endsection('js')





