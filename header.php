<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @package Beratungsnavi
 * @version 1.0
 */

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title>Webshop</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>







	
<body>
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<div class="container">
<nav class="navbar navbar-default">
 <div id="nav-top-1">
	 <div class ="row">
	 <div class ="col-md-3">
            <a class="nav-top-a-logo" href="index.htm"><img src="<?php bloginfo('template_url');?>/img/LogoFertig2.jpg " height="60" width="240">
			
				</div>
            </a>
	 <div class ="col-md-9">
		 <div class="container-fluid">
            <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
    	    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">All</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Example 1</a></li>
                      <li><a href="#its_equal">Example 2</a></li>
                      <li><a href="#greather_than">Example 3</a></li>
                      <li><a href="#less_than">Example 4</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">All</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
	</div>
		 </div>
		 </div>
	</div>
	 </div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".js-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Webshop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse js-navbar-collapse">
      <ul class="nav navbar-nav">
       <li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Men Collection</li>                            
                           
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Features</li>
							<br>
							<li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
							<li><a href="#">Four Columns Grid</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Fonts</li>
							<br>
                            <li><a href="#">Glyphicon</a></li>
							<li><a href="#">Google Fonts</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Plus</li>
							<br>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Much more</li>
							<br>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
        <li><a href="#"><i class="fa fa-phone"></i> Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-anchor"></i> Support <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-envelope"></i> Email</a></li>
            <li><a href="#"><i class="fa fa-comments"></i> Chat</a></li>
            <li><a href="#"><i class="fa fa-phone"></i> Phone Support</a></li>
            <li class="divider"></li>
            <li class="active"><a href="#"><i class="fa fa-credit-card"></i> Make a Payment</a></li>
          </ul>
        </li>
        <li>
            <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>    
        </li>
        <li><a href="#"><i class="fa fa-twitter color-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook color-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin color-linkedin"></i></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> <b class="color-blue">Login</b> <span class="caret"></span></a>
          <ul class="dropdown-menu login-panel">
            <li>
                <div class="dropdown-header">
                    <span class="login-header color-blue">Sign In</span>
                    <span class="forgot-password color-blue"><a href="">Forgot password?</a></span>
                </div>
                <div class="clearfix"></div>
                <div style="padding: 8px;">
                    <form id="loginform" class="form-horizontal" role="form"  autocomplete="off">
                        <div style="margin-bottom: 10px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                            <!-- USERNAME OR EMAIL ADDRESS -->
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')" required>                                        
                        </div>
                        <div style="margin-bottom: 10px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                            <!--  PASSWORD  -->
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" pattern=".{5,}" title="Minmimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="center-text">
                            <label><input id="login-remember" type="checkbox" name="remember" value="1"> Remember me</label>
                        </div>
                        <div class="center-text">
                            <span class="error-message color-red"><i class="glyphicon glyphicon-warning-sign"></i> Username & password don't match!</span>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls center-text">
                              <a id="btn-login" href="#" class="btn btn-block btn-success">Login</a>
                              <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                            </div>
                        </div>  
                    </form>
                </div>                
            </li>
            <!--<li class="divider"></li>-->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 <!-- /.container-fluid -->
</nav>
</div>
<script>
	$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
	</script>
	
	<p>header</p>
	
	