@extends('layouts.sidenav')

@section("title")

Edit {{ Auth::user()->fname }} Profile Detail

@stop


@section('content')

<section id="add-admin">
                        <div class="container">
                            <h1>Edit User Detail</h1>
                            <div class="add-admin">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-push-2">
                                            <form role="form" class="add-admin-form">
                                                <div class="add-admin-inner">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->fname }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->lname }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->sex }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->mobile }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->email }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->address }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->jobtitle }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Auth::user()->company }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <select id="login-username" type="text" class="form-control" name="username">
                                                            <option value="">Select Role &#8595;</option>
                                                            <option value="">Super Admin</option>
                                                            <option value="">Admin</option>
                                                            <option value="">User</option>
                                                        </select>
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