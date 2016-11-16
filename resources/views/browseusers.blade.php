@extends('layouts.sidenav')

@section("title")

Browse Users

@stop


@section('content')

<section id="add-admin">
    <div class="container">
        <h1>Browse Users</h1>
        
        <div class="row">
        @foreach($users as $user)
            <div class="col-sm-4 browse-users">
                <a href="/userdetails/{{ $user->id }}"><h3>{{ $user->fname }} {{ $user->lname }}</h3></a>
                <p>{{ $user->jobtitle }}</p>
            </div>
        @endforeach
            <!-- <div class="col-sm-4">
                Test
            </div>
            <div class="col-sm-4">
                Test
            </div>
            <div class="col-sm-4">
                Test
            </div> -->
        </div>
    </div>
</section><!-- #add admin ---============= -->

@endsection