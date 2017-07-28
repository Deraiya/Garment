@extends('layouts.app')

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div style="display: flex;justify-content: center;align-content: center;flex-direction: row;align-items: baseline">

                <h1 class="logo-name" style="color: white">SANSKRUTI</h1>

                <h2 style="color: white">&nbsp;<b>Garments</b></h2>

            </div>
            <h3 style="color: white">Welcome </h3>
            <p style="color: white">Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post"     action="{{ route('login') }}">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>


            </form>
            <p style="color: white" class="m-t">
                <small>Crafted at</small>
                <a href="http://deraiya.com"><b style="color: white"><h3>Déraiya Systems</h3></b></a>

            </p>
        </div>
    </div>

@endsection
