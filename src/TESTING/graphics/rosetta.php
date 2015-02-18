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
					
					
					
					
						<h1>Rosetta Image Scale (10.2014)</h1>
						
						<p>
						The European Space Agency's (ESA) Rosetta took a photo of Comet 67P about 9.8 km away in October 2014. However, it's difficult to put the image into perspective without a frame of reference that we can understand. So, using Google Maps and a scale of where 1 pixel = 98 cm, I put together a variety of appropriately scaled images to help us. More information about the photo can be found on the ESA's blog <a href="http://blogs.esa.int/rosetta/2014/10/20/cometwatch-18-october/">here</a>.
						</p>
						
						<p>
						I used the following references:
						<ul>
						<li>Lower Manhattan </li>
						<li>One World Trade Center </li>
						<li>Eiffel Tower</li>
						<li>A full neighborhood block</li>
						<li>A high school</li>
						<li>A football and baseball field</li>
						<li>A full-sized airplane </li>
						</ul>
						</p>
						
						<p>
						Edited using Adobe Photoshop.
						</p>
						
						<div id="truck-pics">
							<img src="http://i.imgur.com/t407kb2.png"/>
							
							<hr>
							<br>
							<br>
							<p>Bonus image of another scaled Rosetta image taken in January 2015. Used Google Maps and a scale of 1 pixel = 15 cm. I used the Statue of Liberty and a full-sized airplane. More information about this photo can be found <a href="http://www.esa.int/spaceinimages/Images/2015/01/Comet_from_8_km">here</a>.
							<img src="http://i.imgur.com/4UwMdub.jpg"/>
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
