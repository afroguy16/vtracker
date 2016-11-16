@section("title")
{{ auth()->user()->fname }} History
@endsection


@extends('layouts.sidenav')

@section("content")

<section id="add-admin">
    <div class="container">
        <h1>{{ auth()->user()->fname }} History</h1>
        <div class="add-admin admin-history-upper">
            <div class="row">
                <div class="col-sm-7">
                    <div class="admin-history-topleft">
                        <p><span class="my-bold">Duration Online:</span> 2hrs 33mins 26secs</p>
                        <p><span class="my-bold">Numbers of Users Logged in:</span> {{ count($admin) }}</p>
                        <p><span class="my-bold">Total Duration of Visitors</span> 52hrs 43mins 18secs</p>
                        <button class="btn btn-primary pull-right mw"/><a href="#">Sessions</a></button>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="admin-history-topright">
                    <form action="adminhistory" method="POST">
                    {{ csrf_field() }}
                        <input type="date" name="date">
                        <input type="submit" value="Select">
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #add admin ---============= -->

<section id="add-admin">
    <div class="container">
        <!--<h1>Admin History</h1>-->
        <div class="add-admin">
            <div class="table-responsive">
                <table class="table table-striped" style="border-spacing: 4px;">
                    <thead style="background: #dc241c; color: #fff;">
                    <tr>
                        <th>Visitor</th>
                        <th>Log in</th>
                        <th>Log out</th>
                        <th>Duration online</th>
                        <th>Whom to See</th>
                        <th>Purpose of Visit</th>

                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($history as $his)
                            <tr>
                                <td>{{ $his->visitors_id }}</td> 
                                <td>{{ $his->time_in }}</td> 
                                <td>{{ $his->time_out }}</td> 
                                <td>{{ $his->time_out - $his->time_in }}</td> 
                                <td>{{ $his->whom_to_see }}</td> 
                                <td>{{ $his->purpose_of_visit}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pag pull-right">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li style="color: #fff" class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- #add admin ---============= -->


@endsection