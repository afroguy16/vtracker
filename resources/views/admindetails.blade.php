@section("title")
{{ auth()->user()->fname }} Details
@endsection


@extends('layouts.sidenav')

@section("content")

<section id="admin-detail">
                        <div class="container">
                            <h1>{{ auth()->user()->fname }} Details</h1>
                            <div class="admin-detail">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <div class="admin-detail-left">
                                            <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ auth()->user()->fname }}</p>
                                            <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ auth()->user()->sex }}</p>
                                            <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ auth()->user()->mobile }}</p>
                                            <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ auth()->user()->email }}</p>
                                            <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ auth()->user()->address }}</p>
                                            <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ auth()->user()->jobtitle }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- #admin-detail ---============= -->

                    <section id="admin-detail">
                        <div class="container">
                            <h1>Admin Status</h1>
                            <div class="admin-detail">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <div class="admin-detail-left">
                                            <p><span class="">Role:</span> {{ auth()->user()->role }}</p>
                                            <p><span class="">Date Joined:</span> {{ auth()->user()->created_at }}</p>
                                            <p><span class="">Total Login Duration:</span> 2 hrs 23 minutes 50 seconds</p>
                                            <p><span class="">Total Logged in Users:</span> 250</p>
                                            <p><span class="">Duration of Logged in Users:</span> 4 hrs 35 minutes 8 seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- #admin-detail ---============= -->

@endsection