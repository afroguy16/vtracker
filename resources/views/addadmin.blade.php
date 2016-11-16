@extends('layouts.sidenav')

@section("title")

Add User

@stop


@section('content')

<section id="add-admin">
	<div class="container">
	    <h1>Add User</h1>
	    <div class="add-admin">
	        <div class="row">
	            <div class="col-sm-8 col-sm-push-2">
	                    <form role="form" class="add-admin-form" method="POST" action="{{ url('/register') }}">
	                        <div class="add-admin-inner">
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

	                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="Enter First Name" required autofocus>

	                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <input id="login-username" type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="Enter Last Name">

	                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <input id="login-username" type="text" class="form-control" name="sex" value="{{ old('sex') }}" placeholder="Sex">

	                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <input id="login-username" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile Number">

	                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <input id="login-username" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">

	                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <input id="login-username" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address">

	                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <input id="login-username" type="text" class="form-control" name="jobtitle" value="{{ old('jobtitle') }}" placeholder="Job Title">

	                                 @if ($errors->has('jobtitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
                                	@endif
	                            </div>
	                            <div class="input-group">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                <select id="login-username" type="text" class="form-control" name="role">
	                                    <option value="">Select Role &#8595;</option>
	                                    <option value="">Super Admin</option>
	                                    <option value="">Admin</option>
	                                    <option value="">User</option>
	                                </select>

	                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                	@endif
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

@stop