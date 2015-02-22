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
	<div  id="smoothmain" class="m-scene">
	
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
	
						
							
						<!--===== CONTACT =====-->
						<div class="scene_element scene_element--fadein">
						<section id="about">
							<h1> ABOUT </h1>
							<p>
							My name is Patrick Francisco, and I love to create digital things! I graduated from New Jersey Institute of Technology in December 2014 with a degree in Information Technology. Adobe Photoshop and Adobe Premiere are my primary tools of the trade, but I am always expanding my toolbox. I am currently teaching myself about virtual reality development, and I look forward to becoming more involved in the VR industry! 
							</p>
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
