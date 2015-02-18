<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Patrick Francisco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Patrick Francisco - Portfolio</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CORE BOOTSTRAP CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/style.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
		
		<!-- 
		Definitely not focused on optimization at the moment. 
		Becoming comfortable with HTML, CSS, and etc. is my first and foremost objective.
		-->
		
    </head>
    <body data-spy="scrollspy" data-target="#side-nav">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <!-- CONTAINER -->
		<div class="container">	
			<div class="row">
			
				<!-- SIDEBAR -->
				<?php include("../nav_pages.php");?>
				<!-- /END SIDEBAR -->

				<!-- CONTENT -->
				<div id="content-wrap" class="col-md-8">
					<div class="content">
					
					
					
					
						<h1>Truck Composition (6.2014)</h1>
						
						<p>
						My friend loves his truck. With the help of some friends, we spent a few hours composing his truck. This included positioning the truck (and its tires!) on a rocky hill, and positioning the external camera flash around the truck for each photo.
						</p>
						
						<p>
						Afterwards, I took the best photo set and layered them on top of one another, erasing some portions of each layer to ensure that only the lit parts were shown. Below are the final result, and the photo set that I've used to create it.
						</p>
						
						<p>
						Shot with a Canon T2i and a Yongnuo Flash YN-460ii. Edited using Adobe Photoshop.
						</p>
						
						<div id="truck-pics">
							<img src="img/truck/final.jpg"/>
							<br>
							<p> The final composition. </p>
							<hr>
							<br>
							<br>
							<img src="img/truck/1.jpg"/>
							<img src="img/truck/2.jpg"/>
							<img src="img/truck/3.jpg"/>
							<img src="img/truck/4.jpg"/>
							<img src="img/truck/5.jpg"/>
							<img src="img/truck/6.jpg"/>
							<img src="img/truck/7.jpg"/>
						</div>
						
						
						
					</div>
					<hr>
					<address>
						<h6>
							<small> <a href="mailto:ppf3@njit.edu"><span class="glyphicon glyphicon-envelope"></span>	Patrick Francisco 2015 </a></small>
						</h6>
					</address>
				</div>
				<!-- /END CONTENT -->

			</div>
		</div> 
		<!-- /END CONTAINER -->
	
		<!-- added the following two line for bootstrap -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
		<!-- tracks active scroll thing -->
		<script>
			$('body').scrollspy({
				target: '#side-nav'
			})
		</script>
		
		<!-- scrolling animation -->
		<script>
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
					|| location.hostname == this.hostname) {

					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					   if (target.length) {
						 $('html,body').animate({
							 scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		</script>
		
		<!-- Google Analytic stuff -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59716201-1', 'auto');
		  ga('send', 'pageview');

		</script>

    </body>
</html>
