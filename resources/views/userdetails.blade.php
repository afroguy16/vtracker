<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is a Visitors tracking system built by ccHub">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $visitor->fname}}'s Detail</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="author" href="humans.txt">
</head>
<body>
<section id="admin-detail-page">
    <div class="admin-detail-inner">
        <div class="row">
            <div class="col-sm-2">
                <div class="admin-left userDetail">
                    <h1 class="app-name"><a href="{{url('/')}}" class="">vTracker</a></h1>
                    <div class="admin-pix"><img src="img/admin.jpg" class="img-responsive img-circle" alt="Admin Picture"/></div>
                    <nav class="navbar remove-bottom-margin">
                        <ul class="nav navbar-link navbar-right">
                            <li><a href="/userdetails/{{ $visitor->id }}">User Detail</a></li>
                            <li><a href="/userhistory/{{ $visitor->id }}">User History</a></li>
                            <li><a href="/edituser/{{ $visitor->id }}">Edit User Details</a></li>
                            <li><a href="/deleteuser/{{ $visitor->id }}">Delete Profile</a></li>
                            <li><a href="{{url('/browseusers')}}">Browse Users</a></li>
                        </ul>
                    </nav>
                </div><!-- admin left -->
            </div>

            <div class="col-sm-10">
                <div class="admin-right adminDetail">
                    <nav class="navbar">
                        <div class="container">
                            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{url('about')}}">About</a></li>
                                    <li><a href="{{url('admindetails')}}">Profile</a></li>
                                    <li><a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                                </ul>
                        </div>
                    </nav>

                    <div>
                        <section id="admin-detail">
                            <div class="container">
                                <h1>{{ $visitor->fname}}'s Details</h1>
                                <div class="admin-detail">
                                    <div class="row">
                                        <div class="col-md-8 col-md-push-2">
                                            <div class="admin-detail-left">
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->fname }}</p>
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->lname }}</p>
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->sex }}</p>
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->mobile }}</p>
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->email }}</p>
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->address }}</p>
                                                <p><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; {{ $visitor->jobtitle }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- #admin-detail ---============= -->
                    </div>

                </div> <!-- admin right -->
            </div>
        </div> <!-- row -->
    </div> <!-- admin-index-inner -->

</section>
<footer id="my-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-4" style="text-align: center;">
                <p style="text-align: center;">© 2016 ccHub. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>