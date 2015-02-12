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
							<h1> 
								<strong>Hi!</strong>
							</h1>
						</div>
						<!-- the meat of the content goes here -->
						
						<section id="zero">
						<div id="home-carousel" class="carousel slide" data-ride="carousel">
						
							<!-- the little indicators-->
							<ol id="carousel-buttons" class="carousel-indicators">
								<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#home-carousel" data-slide-to="1"></li>
								<li data-target="#home-carousel" data-slide-to="2"></li>
							</ol>
							
							<!-- slide wrapper-->
							
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<a href="projects/contestflyer.html">
											<img src="img/home-contestflyer.jpg" alt="Xbox Music Flyer"></img>
											<div class="carousel-caption">
												<h3><small>Project</small> Xbox Music Flyer</h3>
											</div>
										</a>
									</div>
									
									<div class="item">
										<a href="projects/contestvideo.html">
											<img src="img/home-contestvideo.jpg" alt="Windows Phone Video"></img>
											<div class="carousel-caption">
												<h3><small>Project</small> Windows Phone Video</h3>
											</div>
										</a>
									</div>
									
									<div class="item">
										<a href="projects/schoolflyer.html">
											<img src="img/home-schoolflyer.jpg" alt="Campus Event Flyer"></img>
											<div class="carousel-caption">
												<h3><small>Project</small> Campus Event Poster</h3>
											</div>
										</a>
									</div>								
								</div>
						
							<!-- controls -->
							<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							</a>
							<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							</a>
						</div>
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
									<p>School Event Flyer (2014)</p> 
								</div>
							</div>
							
							
						</section>
						
						<section id="two">
							TWO
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
