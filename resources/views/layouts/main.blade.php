<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is a Visitors tracking system built by ccHub">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="author" href="humans.txt">
</head>
<body>
    <section id="admin-detail-page">
        <div class="admin-detail-inner">
            <div class="row">
                <div class="col-sm-12">
                    <div class="admin-right">
                        <nav class="navbar">
                            <div class="container">
                            @if(Auth::user())
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
                            @else
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{url('about')}}">About</a></li>
                                </ul>
                            @endif

                                
                            </div>
                        </nav>
                        <section>
                        @yield("content")
                        <section>

                    </div> <!-- admin right -->
                </div>
            <div class="clearfix"></div>
            </div> <!-- row -->
    </div> <!-- admin-index-inner -->

    </section>
    <div class="clearfix"></div>

    <footer id="my-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-4" style="text-align: center;">
                    <p style="text-align: center;">&copy; 2016 ccHub. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>