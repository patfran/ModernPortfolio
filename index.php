<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Patrick Francisco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Patrick Francisco</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CORE BOOTSTRAP CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
		<?php $page = 'index';?>
		
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	
		
        <!-- CONTAINER -->
		<div class="container">
		
			<!-- SIDEBAR, put here instead of php for the fadein effect onload -->
			<nav class="navbar mynav navbar-fixed-top myfadein">
				<div class="container">

					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><h4>Patrick Francisco</h4></a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbarcollapse-1">
							<span class="fa fa-bars fa-2x" aria-hidden="true"></span> <!-- fa fa-bars   fa-2x -->
						</button>
					</div>

					<div class="navbar-collapse collapse navbar-right" id="mynavbarcollapse-1">
						<ul class="nav navbar-nav">
							<li class=" <?php echo ($page == "works" ? "active" : "")?> "><a href="works.php"><h4>Works</h4></a></li>
							<li class=" <?php echo ($page == "about" ? "active" : "")?> "><a href="about.php"><h4>About</h4></a></li>
							<li class=" <?php echo ($page == "contact" ? "active" : "")?> "><a href="contact.php"><h4>Contact</h4></a></li>
						</ul>
					</div>

				</div>
			</nav>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-xs-18 col-sm-8 col-sm-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->

					</div><!-- /end of .content -->
				</div><!-- /end of .content-wrap -->
			</div><!-- /end of .row -->
		</div><!-- /end of .container -->	

	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
    </body>
</html>
