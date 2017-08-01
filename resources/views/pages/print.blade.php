<!DOCTYPE html>
<html>

<head>
    @include('includes.css')
</head>

<body class="white-bg">
<div class="wrapper wrapper-content p-xl">
    <div class="ibox-content no-borders">
        <div class="row">
            <div class="container col-lg-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                <div style="align-items: center"><h3><u>CASH MEMO</u></h3></div>
                <div style="align-items: center">
                    <h3>|| Shree Ganeshay Namah ||</h3>
                </div>
                <div>
                    <h1><b>Sanskruti</b></h1>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="container col-lg-4 col-lg-offset-4">
                <div class="pull-left">
                    <h4>Bill Number:</h4><span><h3><b>{{$bill_no}}</b></h3></span>
                </div>

                <div class="pull-right">
                    <h4>Date:</h4><span><h3><b>{{\Carbon\Carbon::today()->format('d/m/Y')}}</b></h3></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container col-lg-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                <div style="align-items: center">
                    <h3>
                        <b>FAMILY SHOPPY & MATCHING CENTER</b>
                    </h3>
                </div>

                <div style="align-items: center">
                    <h3>
                        6,7/37,Satyam Shivam Shopping Center, Nallasopara (W).
                    </h3>
                </div>
                <div style="align-items: center"><h4>Friday Close | Fixed Rate</h4></div>



            </div>
        </div>
        <div class="table-responsive m-t col-lg-4 col-lg-offset-4">
            <table class="table invoice-table">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>RATE</th>

                </tr>
                </thead>
                <tbody>
                @foreach($productArray as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->sp}}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- /table-responsive -->
        <div class="col-lg-4 col-lg-offset-4 ">
            <div class="pull-right">
                <strong>Total :</strong><span>&nbsp;&#8377;{{$totalprice}}</span>
            </div>
        </div>
        <br>
        <div class=" m-t col-lg-6 col-lg-offset-3" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <div style="align-items: center"><h5>No Guarantee for Silk Saree Colour, Cloth Sleepage & Other Goods </h5></div>
            <div style="align-items: center"><h5>once sold will not be taken back.</h5></div>
            <div style="align-items: center"><h5>Exchange only within 7 days | Changing Time:12:00 to 4:00</h5></div>
            <div style="align-items: center"><h5><b>ALL CARD ACCEPTED</b></h5></div>
            <div style="align-items: center"><h5><b>Ph : 241514</b></h5></div>

        </div>
    </div>

</div>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>

<script type="text/javascript">
    window.print();

</script>

</body>

</html>
