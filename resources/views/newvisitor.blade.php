@extends('layouts.main')

@section("title")

Add a New Visitor

@stop


@section('content')

<section id="add-admin">
    <div class="container">
        <h1>New Visitor</h1>
        <div class="add-admin">
            <div class="row">
                <div class="col-sm-8 col-sm-push-2">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger" style="list-style-type: none">{{$error}}</li>
                        @endforeach
                    </ul>
                        <form role="form" class="add-admin-form" method="POST" action="{{ url('/addvisitor') }}">
                        {{ csrf_field() }}
                            <div class="add-admin-inner">
                                <div class="input-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="Enter First Name..." required autofocus>

                                    @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="Enter Last Name..." required autofocus>

                                    @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="sex" type="text" class="form-control" name="sex" value="{{ old('sex') }}" placeholder="Enter Sex..." required>

                                    @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email Address..." required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="mobile" type="tel" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Enter Mobile Number..." required>

                                    @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Location..." required>

                                    @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('jobtitle') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="jobtitle" type="text" class="form-control" name="jobtitle" value="{{ old('jobtitle') }}" placeholder="Enter Job Title..." required>

                                    @if ($errors->has('jobtitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
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