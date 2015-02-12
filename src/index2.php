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
		<link rel="stylesheet" href="css/style2.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>
    <body data-spy="scrollspy" data-target="#side-nav">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <!-- CONTAINER -->
		<div class="container">	
			<div class="row">
			
				<!-- SIDEBAR -->
					<?php include("index2_nav.php");?>
				<!-- /END SIDEBAR -->

				<!-- CONTENT -->
				<div id="content-wrap" class="col-md-8">
					<div class="content">
					
					
						<div class="page-header">
							
						</div>
						<!-- the meat of the content goes here -->
						
						<section id="zero">
							<h1> 
								<strong>Hi.</strong>
							</h1>
							
						</section>
						
						
						
						<section id="one">
							<div class="img-bar">
								<img src="img/home-contestflyer.jpg"/>
								<div class="img-bar-caption">
									<p>Xbox Music Flyer (2014)</p> 
								</div>
							</div>	
							
							<div class="img-bar">
								<img src="img/home-schoolflyer.jpg"/>
								<div class="img-bar-caption">
									<p>Campus Event Flyer (2014)</p> 
								</div>
							</div>
							
							<div class="img-bar">
								<img src="http://i.imgur.com/t407kb2.png"/>
								<div class="img-bar-caption">
									<p>Rosetta Image Scale (2014)</p> 
									<!-- October 2014 -->
								</div>
							</div>
							
							<div class="img-bar">
								<img src="http://i.imgur.com/4UwMdub.jpg"/>
								<div class="img-bar-caption">
									<p>Rosetta Image Scale 2 (2014)</p> 
									<!-- Jan 2015 -->
								</div>
							</div>
							
							
						</section>
						
						<section id="two">
							<!-- SPONGEBOB video August 2013 -->
						</section>					
							
						<section id="three">
							THREE
						</section>
							
						<section id="four">
							FOUR
						</section>	
						
						
						

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
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
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

    </body>
</html>
