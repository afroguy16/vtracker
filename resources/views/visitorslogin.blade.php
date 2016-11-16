@extends('layouts.main')

@section("title")

Log in Visitor

@stop


@section('content')

<section id="add-admin">
    <div class="container">
        <h1>Log in Visitor</h1>
        <div class="add-admin">
            <div class="row">
                <div class="col-sm-8 col-sm-push-2">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger" style="list-style-type: none">{{$error}}</li>
                        @endforeach
                    </ul>
                        <form role="form" class="add-admin-form" method="POST" action="{{ url('/visitlogin') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="visitor_id" value="{{ $visitor->id }}">
                            <div class="add-admin-inner">
                                <div class="input-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="fname" type="text" class="form-control" name="fname" value="{{ $visitor->fname }}" disabled>
                                </div>
                                <div class="input-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="lname" type="text" class="form-control" name="lname" value="{{ $visitor->lname }}" disabled>
                                </div>

                                <div class="input-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="sex" type="text" class="form-control" name="sex" value="{{ $visitor->sex }}" disabled>
                                </div>

                                <div class="input-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="address" type="text" class="form-control" name="address" value="{{ $visitor->address }}" disabled>
                                </div>

                                <div class="input-group{{ $errors->has('whom_to_see') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="whom_to_see" type="text" class="form-control" name="whom_to_see" value="{{ old('to_see') }}" placeholder="Whom to See..." required autofocus>

                                    @if ($errors->has('whom_to_see'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('whom_to_see') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group{{ $errors->has('purpose_of_visit') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <input id="purpose_visit" type="text" class="form-control" name="purpose_of_visit" value="{{ old('purpose_of_visit') }}" placeholder="Purpose of Visit..." required>

                                    @if ($errors->has('purpose_of_visit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('purpose_of_visit') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            <div class="my-submit">
                                <div class="center-block">
                                    <input type="submit" class="btn-link" value="Log in"/>
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