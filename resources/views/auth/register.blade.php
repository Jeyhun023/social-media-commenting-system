<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Log in" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Register</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="/frontend/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/frontend/css/style.css" />
		<link rel="stylesheet" href="/frontend/css/ionicons.min.css" />
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="/frontend/images/fav.png"/>
	</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header-inverse">
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

        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Now friends are near to you !!!</h1>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Register</h3>
                </br>
                  <!--Register Form-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="name" class="sr-only">Name and surname</label>
                        <input id="name" class="form-control input-group-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text" placeholder="Your name and surname"/>
                        
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-xs-12">
                          <label for="email" class="sr-only">Email</label>
                          <input id="email" class="form-control input-group-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="text" placeholder="Your mail"/>
                          
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" placeholder="Your password"/>
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Repeat password</label>
                        <input id="password-confirm" type="password" class="form-control input-group-lg" name="password_confirmation" required autocomplete="new-password"  placeholder="Repeat password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    </div>
                    <p><a href="/login">Do you have an account?</a></p>
                    <button class="btn btn-primary" type="submit">Register</button>
                  </form><!--Register Now Form Ends-->
                </div><!--Registration Form Contents Ends-->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="/frontend/js/jquery-3.1.1.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/jquery.appear.min.js"></script>
		<script src="/frontend/js/jquery.incremental-counter.js"></script>
    <script src="/frontend/js/script.js"></script>
    
	</body>
</html>
