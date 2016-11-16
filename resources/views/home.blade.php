@extends('layouts.main')

@section("title")

Enter User Credentials

@stop


@section('content')

@if(session()->has('message'))
    <div id="login-alert" class="alert alert-danger col-sm-12">
        {{session('message')[0]}}
    </div>
@endif

<section id="add-admin">
    <div class="container">
        <h1>Welcome Page</h1>
        <div class="add-admin">
            <div class="row">
                <div class="col-sm-6 col-sm-push-3">
                        <form role="form" class="add-admin-form" method="POST" action="{{url('/searchvisitor')}}">
                        {{ csrf_field() }}
                            <div class="add-admin-inner">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-email" type="text" class="form-control" name="username" value="" placeholder="Email or Phone Number...">
                                </div>
                                <div class="my-submit">
                                    <div class="center-block">
                                        <input type="submit" class="btn-link" />
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- #add admin ---============= -->
@endsection
