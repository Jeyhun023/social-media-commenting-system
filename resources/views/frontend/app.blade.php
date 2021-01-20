<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="You can post, comment and chat with your friends in this website" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | United Skills</title>
        @yield('css')
    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="/frontend/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/frontend/css/style.css" />
    <link rel="stylesheet" href="/frontend/css/ionicons.min.css" />
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" />
    <link href="/frontend/css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="/frontend/images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/frontend/images/logo.png" alt="logo" /></a>
          </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right main-menu">
                        @if(Auth::check())
                            <li class="dropdown">
                              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Log out
                              </a> 
                            </li>
									        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										        @csrf
									        </form>
                        @else
                          <li class="dropdown"><a href="/login">Login</a></li>
                          <li class="dropdown"><a href="/register">Register</a></li>
                        @endif
                      </ul>
                    </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    @yield('content')

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="/"><img src="/frontend/images/logo-black.png" alt="" class="footer-logo" /></a>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>Friend Finder © 2016. All rights reserved</p>
      </div>
		</footer>
    
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="/frontend/js/jquery-3.1.1.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/jquery.sticky-kit.min.js"></script>
    <script src="/frontend/js/jquery.scrollbar.min.js"></script>
    <script src="/frontend/js/script.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    @yield('js')
  </body>
</html>
