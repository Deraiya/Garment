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
                                    <h2>Edit Empoyee</h2>

                                </div>
                                <div class="ibox-content">

                                    @foreach($emp as $e)
                                        <form action="{{route('updateEmployee',$e->id)}}" method="post">
                                            {{csrf_field()}}
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="product_name">First Name</label>
                                                    <input type="text" id="" name="first_name" value="{{$e->first_name}}" placeholder=" "  autofocus class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="price">Last Name</label>
                                                    <input type="text" id="" name="last_name" value="{{$e->last_name}}" placeholder="" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="quantity">Address</label>
                                                    <input type="text" id="" name="address" value="{{$e->address}}" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="quantity">Phone No</label>
                                                    <input type="text" id="" name="phone_no" value="{{$e->phone_no}}" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="quantity">Date Of Birth</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="dob" value="{{ Carbon\Carbon::createFromFormat('Y-m-d',$e->dob)->format('d/m/Y')}}" data-mask="99/99/9999" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="quantity">Discription</label>
                                                    <input type="text" id="" name="discription" value="{{$e->discription}}" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">

                                                    <button type="submit" class="btn btn-danger ">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                </div>
                                @endforeach


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





