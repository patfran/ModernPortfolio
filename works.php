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
		
		<?php $page = 'works';?>
    </head>
    <body>
	<div class="indexhtml">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	
		
        <!-- CONTAINER -->
		<div class="container">
		
			<!-- SIDEBAR, 4 columns wide -->
			<?php include("php/nav_index.php");?>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-xs-18 col-sm-8 col-sm-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->
						
						<!--===== WORKS =====-->
						<section id="works" class="myfadeinquick">

							<h1>Works</h1>
							
							<div class="workbar"> <!-- 3.2013 -->
								<a href="works/phonepromo.php">
								<img src="thumbnails/480/phone-480.jpg" alt="Windows Phone" class="center-block img-responsive"/>
								<h4 class="workbar-caption"></span> Windows Phone Promo</h4> 
								</a>
							</div>
							
							 <!--
							<div class="workbar"> 8.2013 
								<a href="works/spongebob.php">
								<img src="thumbnails/480/spongebob-480.jpg" alt="Spongebob" class="center-block img-responsive"/>
								<h4 class="workbar-caption">Spongebob Sings "Roar"</h4> 
								</a>
							</div>
							 -->
							
							<div class="workbar"> <!-- 3.2014 -->
								<a href="works/xboxflyer.php">
								<img src="thumbnails/480/xboxflyer-480.jpg" alt="Xbox Music" class="center-block img-responsive"/>
								<h4 class="workbar-caption"></span> Xbox Music Promo</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 2.2015 -->
								<a href="works/escape.php">
								<img src="thumbnails/480/escape-480.jpg" alt="Escape VR" class="center-block img-responsive"/>
								<h4 class="workbar-caption">Escape (Oculus Rift VR)</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 12.2014 -->
								<a href="works/dating.php">
								<img src="thumbnails/480/dating-480.jpg" alt="Dating App" class="center-block img-responsive"/>
								<h4 class="workbar-caption">Dating App UX Report</h4>  
								</a>
							</div>
							
							<div class="workbar"> <!-- 4.2014 -->
								<a href="works/drawing.php">
								<img src="thumbnails/480/girl-480.jpg" alt="Girl in Blue" class="center-block img-responsive"/>
								<h4 class="workbar-caption">Girl in Blue</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 6.2014 -->
								<a href="works/truck.php">
								<img src="thumbnails/480/truck-480.jpg" alt="Truck Comp" class="center-block img-responsive"/>
								<h4 class="workbar-caption">Truck Photo Composition</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 7.2012 -->
								<a href="works/1fort.php">
								<img src="thumbnails/480/1fort-480.jpg" alt="1fort" class="center-block img-responsive"/>
								<h4 class="workbar-caption">1fort (Source Filmmaker)</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 10.2014 -->
								<a href="works/rosetta.php">
								<img src="thumbnails/480/rosetta-480.jpg" alt="Rosetta Scale" class="center-block img-responsive"/>
								<h4 class="workbar-caption">Rosetta Image Scale</h4> 
								</a>
							</div>
							
							
						
						</section>
						
						<hr>
						<?php include("php/footer.php");?>

					</div><!-- /end of .content -->
				</div><!-- /end of .content-wrap -->
			</div><!-- /end of .row -->
		
		</div><!-- /end of .container -->	

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</div>
    </body>
</html>