@section("title")
Admin Log in
@endsection


@extends('layouts.main')

@if(session()->has('message'))
    <div id="login-alert" class="alert alert-danger col-sm-12">
        {{session('message')[0]}}
    </div>
@endif

@section('content')
<section id="add-admin">
    <div class="container">
        <h1>Admin Login Page</h1>
        <div class="add-admin">
            <div class="row">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">

                </div>

                <div class="col-sm-4 col-sm-push-4">
                        <form role="form" id="loginform" class="add-admin-form" method="POST" action="{{ url('/login') }}">
                        {{csrf_field()}}
                            <div class="add-admin-inner">
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email..." value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Enter your password...">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <span class="clearfix"></span>

                                <div class="my-submit">
                                    <div class="center-block">
                                        <input type="submit" id="login_btn" class="btn-link" value="Log in" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div>
                            <p style="text-align: center;"><a href="{{ url('/password/reset') }}">Forgot Your Password?</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #add admin ---============= -->
@endsection