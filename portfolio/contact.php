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
				<div id="content-wrap" class="col-md-8 col-md-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->
	
						<!--===== CONTACT =====-->
						<section id="contact">
							<h1> CONTACT </h1>
							<a href="https://www.linkedin.com/in/patfran" target="_blank">LINKEDIN <span class="fa fa-external-link"></span></a>
							<a href="https://github.com/ppf3" target="_blank">GITHUB <span class="fa fa-external-link"></span></a>
							<a href="mailto:ppf3@njit.edu">EMAIL <span class="fa fa-paper-plane-o"></span></a>
						</section>
						
						<hr>
						<?php include("php/footer.php");?>
						
					</div><!-- /content -->
				</div>
				<!-- /content-wrap -->
			</div>
		</div> 
		<!-- /END CONTAINER -->
		
		<?php include("php/bottom_scripts.php");?>
	
    </body>
</html>
