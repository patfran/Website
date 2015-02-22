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
		<link href="css/keyframes.css">
		<link href="css/pageTransitions.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>
    <body>
	<div id="smoothmain" class="m-scene">
	
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
        <!-- CONTAINER -->
		<div class="container">
			<!-- SIDEBAR, 4 columns wide -->
			<?php include("php/nav_index.php");?>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-md-8 col-md-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->
						
						
						
						<!--===== WORKS =====-->
						<div class="scene_element scene_element--fadein">
						<section id="works">
							<h1> WORKS </h1>	
							
							<div class="workbar""> <!-- 2.2015 -->
								<a href="games/escape.php">
								<img src="thumbnails/escape-750.jpg"/>
								<h4 class="workbar-caption">Escape - 2.2015</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 12.2014 -->
								<a href="graphics/dating.php">
								<img src="thumbnails/datingapp-750.jpg"/>
								<h4 class="workbar-caption">Dating App UX - 12.2014</h4>  
								</a>
							</div>
							
							<div class="workbar"> <!-- 10.2014 -->
								<a href="graphics/rosetta.php">
								<img src="thumbnails/rosetta-750.jpg"/>
								<h4 class="workbar-caption">Rosetta Image Scale - 10.2014</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 6.2014 -->
								<a href="photos/truck.php">
								<img src="thumbnails/truck-750.jpg"/>
								<h4 class="workbar-caption">Truck Composition - 6.2014</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 4.2014 -->
								<a href="graphics/drawing.php">
								<img src="thumbnails/bluegirl-750.jpg"/>
								<h4 class="workbar-caption">Digital Drawing - 4.2014</h4> 
								</a>
							</div>
	
							<div class="workbar"> <!-- 3.2014 -->
								<a href="graphics/xboxflyer.php">
								<img src="thumbnails/xboxmusic-750.jpg"/>
								<h4 class="workbar-caption"><span class="fa fa-trophy"></span> Xbox Music Promo - 3.2014</h4> 
								</a>
							</div>	
							
							<div class="workbar"> <!-- 8.2013 -->
								<a href="videos/spongebob.php">
								<img src="thumbnails/spongebob-750.jpg"/>
								<h4 class="workbar-caption">Spongebob Sings Katy Perry's Roar - 8.2013</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 3.2013 -->
								<a href="videos/phonepromo.php">
								<img src="thumbnails/windowsphone-750.jpg"/>
								<h4 class="workbar-caption"><span class="fa fa-trophy"></span> Windows Phone Promo - 3.2013</h4> 
								</a>
							</div>	
							
							<div class="workbar"> <!-- 7.2012 -->
								<a href="videos/1fort.php">
								<img src="thumbnails/1fort-750.jpg"/>
								<h4 class="workbar-caption">1fort - 7.2012</h4> 
								</a>
							</div>	
							
						</section>					
						</div>
						
						
						<hr>
						<?php include("php/footer.php");?>
						
						
						
					</div><!-- /content -->
				</div>
				<!-- /content-wrap -->
			</div>
		</div> 
		<!-- /END CONTAINER -->
		
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.smoothState.js"></script>
	<script src="js/mySmoothTransition.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	
    </body>
</html>
