<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Twitgreen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/datepicker.css">
		<link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
  
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="navbar nicebar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><div id="logotype"></div></a>
          <div class="nav-collapse collapse inverse">
            <ul class="nav">
              <li><a href="archive-user.php" class="topnav"><img src="img/user.png"> User</a></li>
			  <li><a href="archive-project.php" class="topnav"><img src="img/project.png"> Project</a></li>
              <li><a href="archive-lot.php" class="topnav"><img src="img/alot.png"> Lot</a></li>
            </ul>
			
						<div class="btn-group pull-right inside">
							
							<button class="btn dropdown-toggle user-in" data-toggle="dropdown">
								<img class="top-user-profile" src="upload/relawan.jpg" alt="">
							</button>
							<ul class="dropdown-menu">
								<!-- dropdown menu links -->
								<li><a href="#"><i class="icon-cog"></i> Preferences</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Akunku</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</div>
						
			<div class="input-append">
				<form class="navbar-form pull-right">
              
					<input class="span2" id="appendedDropdownButton" type="text">
						<div class="btn-group">
							<ul class="dropdown-menu">
									<li><a href=""><i class="icon-user"></i> User</a></li>
									<li><a href=""><i class="icon-lightbulb"></i> Project</a></li>
									<li><a href=""><i class="icon-move"></i> Lot</a></li>
								</ul>
								
							<button class="btn dropdown-toggle btn-success" data-toggle="dropdown" tabindex="-1">
								<span class="caret"></span>
								Cari
							</button>
								
						</div>
					</input>
				
				</form>
			</div>
			
						
			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
