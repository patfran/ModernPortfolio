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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	
		
        <!-- CONTAINER -->
		<div class="container">
		
			<!-- SIDEBAR, 4 columns wide -->
			<?php include("php/nav_index.php");?>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-sm-8 col-sm-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->

						<!--===== ABOUT =====-->
						<section id="about">
							
							<h1 class="text-center">About</h1>
							
							<img src="thumbnails/me.jpg" alt="A photo of me" class="center-block"/>
							<br/>
							
							<p>
							Hi! My name is Patrick Francisco, and I'm a digital artist living in the Greater New York City area. I graduated from New Jersey Institute of Technology in December 2014 with a degree in Information Technology. Adobe Photoshop and Adobe Premiere have been my main tools of the trade since high school, but I am always looking for new and cool digital outlets to express my creativity. As a matter of fact, I taught myself HTML and CSS over the past few months to develop this portfolio! Right now, I am currently learning more about virtual reality development using Unity3D and the Oculus Rift DK2, and my ultimate goal is to get hired within the VR industry to foster my design skills.
							</p>
							
							<a href="contact.php">Contact me!</a>
							
						</section>
			
						<hr>
						<?php include("php/footer.php");?>

					</div><!-- /end of .content -->
				</div><!-- /end of .content-wrap -->
			</div><!-- /end of .row -->
		</div><!-- /end of .container -->	

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		
    </body>
</html>
