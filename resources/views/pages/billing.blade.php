@extends('layouts.master')

@section('css')
    <link href="{{asset('css/plugins/steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">

@endsection('css')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Billing Section</h5>
                </div>
                <div class="ibox-content">

                    <form id="form" action="{{route('generatebill')}}" method="post" class="wizard-big" >
                        {{csrf_field()}}
                        <h1>Customer Details</h1>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <script>
                                            $('.chosen-select').chosen({width: "100%"});
                                        </script>

                                        <label>Employee Name *</label>
                                        <div>
                                            <select data-placeholder="Employee" name="employee_id" class="chosen-select"  tabindex="2">
                                                <option value="">Select</option>
                                                @foreach($employee as $emp)
                                                <option value={{$emp->id}}>{{$emp->first_name}}</option>
                                                    @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">

                                        <label>Customer Name *</label>
                                        <input id="userName" name="customer_name" type="text" class="form-control ">
                                        <hr>
                                        <label>Phone Number *</label>
                                        <input id="userName" name="phone_no" type="text" class="form-control ">
                                        <hr>
                                        <label>Address *</label>
                                        <input id="userName" name="customer_address" type="text" class="form-control ">
                                        <hr>
                                        <label>Birthday *</label>
                                        <input type="text" name="dob" class="form-control" data-mask="99/99/9999" placeholder="">

                                    </div>

                                </div>
                                <div class="col-lg-">
                                    <div class="text-center">
                                        <div style="margin-top: 20px">
                                            <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <h1>Scan</h1>
                        <fieldset>
                            <h2>Scan The Barcode's</h2>
                            <div class="row">
                                <div class="col-lg-8">
                                    <p>
                                        <button type="button" class="btn btn-primary" id="btnAdd" >Add Product</button>
                                    </p>
                                    <div class="container">
                                        <div class="form-group">
                                            <div class="m-t-sm" id="TextBoxContainer">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 0; overflow: hidden">
                                        <input id="bar" type="text" style="opacity: 0;filter: alpha(opacity=0);">

                                    </div>

                                    <div class="col-lg-8 m-r-none" >
                                        <div class="pull-left ">
                                            <h1 class="pull-left">
                                                Total
                                            </h1><br>
                                            <h1 class="pull-left"  style="font-weight: 600;font-size: 50px"><b>&#8377;<span id="totalprice">0</span></b></h1>
                                        </div>
                                        <input type="hidden" name="product_ids" value=0 id="product_ids">
                                        <input type="hidden" name="totalprice" id="totalpricefield" value="0">

                                    </div>
                                </div>

                            </div>
                            <script>
                                var inp = document.getElementById('barcodescan');
                                $(document).on('load',$('#bar').focus());
                                $(document).on('click',function (e) {
                                    $('#bar').focus();
                                });
                                $(function () {
                                    
                                    $(document).on("keydown", function (e) {
                                        if (e.keyCode == 9) {
                                                e.preventDefault();
                                            var x = $('#bar').val();
                                            $.ajax({
                                                url: 'id=' + x,
                                                success: function (result) {
                                                    var div = $("<div />");
                                                    div.html(GetDynamicTextBox(result));
                                                    $("#TextBoxContainer").append(div);
                                                    calculateTotal();
                                                }
                                            });

                                            $('#bar').val('');
                                        }

                                    });
                                });
                                 function calculateTotal() {
                                     var values = 0;
                                     $("input[name=price]").each(function () {
                                         values +=parseInt($(this).val());
                                     });
                                    $('#totalprice').text(values);
                                 }
                            </script>
                        </fieldset>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection('content')


@section('js')

    <!-- Steps -->
    <script src="{{asset('js/plugins/steps/jquery.steps.min.js')}}"></script>
    <!-- Jquery Validate -->
    <script src="{{asset('js/plugins/validate/jquery.validate.min.js')}}"></script>

    <!-- Chosen -->
    <script src="{{asset('js/plugins/chosen/chosen.jquery.js')}}"></script>

    <!-- Input Mask-->
    <script src="{{asset('js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>


    <script>

        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);
                    prepareForm();
                    // Submit form input
                    form.submit();
                }
            }).validate({
                errorPlacement: function (error, element)
                {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
        });
    </script>

    <script type="text/javascript">
        function  prepareForm() {
            var values = "";
            $("input[name=product_ids]").each(function () {
                values += $(this).val() + "\n";
            });
            $("#product_ids").val(values);
            $("#totalpricefield").val($('#totalprice').text());
        }

        var inp = document.getElementById('barcodescan');
        $(document).on('load',$('#barcodescan').focus());
        $(document).on('click',function (e) {
            $('#barcodescan').focus();
        });
        $(function () {
            $("#btnAdd").on("click", function () {
                var div = $("<div />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer").append(div);
                $('.chosen-select').chosen({width: "50%"});
                $('.text-primary').focus();
            });
            $("#btnGet").bind("click", function () {
                var values = "";
                $("input[name=product_ids]").each(function () {
                    values += $(this).val() + "\n";
                });
                alert(values);
                $("#product_ids").val(values);
                $("#totalpricefield").val($('#totalprice').text());
            });
            $("body").on("click", ".remove", function () {
                $(this).closest("div").remove();
                calculateTotal();
            });
        });
        /**
         * @return {string}
         */
        function GetDynamicTextBox(value) {
            return '    <label>UID:&nbsp;</label><input name="product_ids" type="text" class="inline" readonly="readonly" value='+value[0]+'> &nbsp;&nbsp;'+
                    ' <label>Name:&nbsp;</label><input type="text" readonly="readonly" class="inline" value='+value[1]+'> &nbsp;&nbsp;'+
                    ' <label>Category:&nbsp;</label><input type="text" readonly="readonly" class="inline" value='+value[2]+'> &nbsp;&nbsp;'+
                    ' <label>Price:&nbsp;</label><input type="text" name="price" readonly="readonly" class="inline" value='+value[3]+'> &nbsp;&nbsp;'+
                    '<button type="button" class="btn btn-danger btn-xs inline remove">Remove</button>'+
                    '<hr class="hr-line-dashed">'
        }
    </script>


@endsection('js')