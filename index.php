<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Multi Login Test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css">
    <style>
        body {
            padding-top: 73px;
        }
        .social-button {
            text-align: center;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin-bottom: 3px;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Backendtime Social Login</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Sign In <i class="fa fa-sign-in"></i></a>
                    </li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container">
	    <div class="row">
	        <div class="col-md-9 col-md-offset-1">
	            <ul>
	                <li>
	                    <a href="/facebook" class="btn btn-block btn-lg btn-social btn-facebook social-button">
	                        <span class="fa fa-facebook"></span> login with Facebook
	                    </a>
	                </li>
	                <li>
	                    <a href="/google" class="btn btn-block btn-lg btn-social btn-google social-button">
	                        <span class="fa fa-google"></span> login with Google
	                    </a>
	                </li>
	                <li>
	                    <a href="/twitter" class="btn btn-block btn-lg btn-social btn-twitter social-button">
	                        <span class="fa fa-twitter"></span> login with Twitter
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>