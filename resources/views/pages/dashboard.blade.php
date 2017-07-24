@extends('layouts.master')

@section('content')
    <div class="col-lg-12" style="display: flex;justify-content: center;align-items: center;height: 80vh;flex-direction: row">
        <div class="col-lg-4 " >
            <div class="widget red-bg p-lg text-center">

                <div class="m-b-md">
                    <i class="fa fa-line-chart fa-4x"></i>
                    <h1 class="m-xs">3000</h1>
                    <h3 class="font-bold no-margins">
                        Today's Sale
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="widget yellow-bg p-lg text-center">
                <div class="m-b-md">
                    <i class="fa fa-database fa-4x"></i>
                    <h1 class="m-xs">7</h1>
                    <h3 class="font-bold no-margins">
                        Total Garment
                    </h3>
                    <small></small>
                </div>
            </div>
        </div>
    </div>

@endsection('content')