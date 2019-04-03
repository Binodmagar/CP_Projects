<!DOCTYPE html>
<html>
<head>
	<title>dw assignment</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<script>
		function showcontent(el){
			var restorepage=document.body.innerHTML;
			var Showcontent=document.getElementByID('el').innerHTML;
			document.body.innerHTML=Showcontent;
			window.show();
			document.body.innerHTML=restorepage;
		}
	</script>

</head>
<body>
	<!-- header -->
	<?php
	include('includes/header.php')
	?>

	<section>
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/slider.jpg" alt="slider" width="1400" height="550">
		      <div class="carousel-caption">
		      	<h1>Lulwoth Cove Drama Club</h1>
		      	<button type="button" class="btn btn-outline-primary" btn-lg>View Gallery</button>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="images/slider1.jpg" alt="slider1" width="1400" height="550">
		      	<div class="carousel-caption">
			      	<h1>Lulwoth Cove Drama Club</h1>
			      	<button type="button" class="btn btn-outline-primary" btn-lg>View Gallery</button>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="images/slider2.jpg" alt="slider2" width="1400" height="550">
		      	<div class="carousel-caption">
			      	<h1>Lulwoth Cove Drama Club</h1>
			      	<button type="button" class="btn btn-outline-primary" btn-lg>View Gallery</button>
		        </div>
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</section>
		<br>

<!-- About Us -->
		<section id="aboutus">
			<div class="container">
				<div class="row padding">
					<div class="col-lg-6">
						<h2>About us</h2>
						<p>Founded in 2013, in New York City, Drama Club is an organization that provides theatre programming to incarcerated and court-involved young people.</p><p>We are a drama club, bringing our classes into juvenile detention centers, jails and community centers throughout the city. It started as a rehearsal process of a play at Crossroads Juvenile Center, which was presented as a staged reading for staff, fellow residents and family members. The success of this project blossomed into a consistent year-round program.</p>
						
						<a href="aboutus.php" class="btn btn-success">Learn More</a>
					</div>
					<div class="col-lg-6 image">
						<img src="images/drama_child.jpg" alt="Children Drama" class="img-fluid">
					</div>
				</div>
				
			</div>
		</section>


		<!-- Our Classes -->
		<section id="classes">
			<div class="heading">
				<h1 class="display-4">Our Classes</h1>
			</div>
			<div class="container">
				<div class="row padding">
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top"src="images/classes_acting.jpg">
							<div class="card-body">
								<h4 class="card-title">Acting</h4>
								<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades. Students are cast into parts appropriate for their age and skill level.</p>
								<a href="ourclasses.php" class="btn btn-outline-success" onclick="showcontent('ourclasses-acting')">ReadMore</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="images/classes_sing.jpg">
							<div class="card-body">
								<h4 class="card-title">Singing</h4>
								<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades. Students are cast into parts appropriate for their age and skill level.</p>
								<a href="ourclasses.php" class="btn btn-outline-success" onclick="showcontent('ourclasses-singing')">ReadMore</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="images/classes_dance.jpg">
							<div class="card-body">
								<h4 class="card-title">Dance</h4>
								<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades. Students are cast into parts appropriate for their age and skill level.</p>
								<a href="ourclasses.php" class="btn btn-outline-success" onclick="showcontent('ourclasses-dance')">ReadMore</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- testimonials -->
		<section id="testimonial">
			<div class="container con-testimonial">
				<h2>Testimonials</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>   
					<!-- Wrapper for carousel items -->
					<div class="carousel-inner">		
						<div class="item carousel-item active">
							<div class="img-box testimonialimages"><img src="images/testimonial_Robert_Downey.jpg" alt="testimonials_image"></div>
							<p class="text-testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
							<p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">LC Drama Club.</a></p>
							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
						<div class="item carousel-item">
							<div class="img-box testimonialimages"><img src="images/testimonial_Kristen_Stewart.jpg" alt="testimonials_image"></div>
							<p class="text-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							<p class="overview"><b>Kristen Stewart</b>Media Analyst at <a href="#">LC Drama Club.</a></p>
							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
						<div class="item carousel-item">
							<div class="img-box testimonialimages"><img src="images/testimonial_Vin_Diesel.jpeg" alt="testimonials_image"></div>
							<p class="text-testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
							<p class="overview"><b>Vin Diesel</b>Web Developer at <a href="#">LC Drama Club.</a></p>
							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
								</ul>
							</div>
						</div>		
					</div>
					<!-- Carousel controls -->
					<!--<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>-->
				</div>
				</div>
		</section>

		<!-- Our Events and latest post -->
		<section id="event">
			<div class="heading">
				<h1 class="display-4">Events & Post</h1>
			</div>
			<div class="container">
				<div class="row ">
					<div class="col-md-6">
						<div class="row section-heading">
							<div class="col-md-12">
								<h3>Latest Post</h3>
							</div>							
						</div>
						<div class="row">
							<div class="col-sm-12 latestpost">
								<div class="row">
									<div class="col-sm-5">
										<img class="card-img-top" src="images/latestpost_dance.jpg">
									</div>
									<div class="col-sm-7">
										<h4 class="card-title">Variety show</h4>
										<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades.</p>
							 		    <a href="#" class="btn btn-outline-success">ReadMore</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 latestpost">
								<div class="row">
									<div class="col-sm-5">
										<img class="card-img-top" src="images/latestpost_drama.jpg">
									</div>
									<div class="col-sm-7">
										<h4 class="card-title">Christmas Plays</h4>
										<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades.</p>
							 		    <a href="#" class="btn btn-outline-success">ReadMore</a>
									</div>
								</div>
							</div>
						</div>				
					</div>

					<div class="col-md-6">
						<div class="section-heading">
							<h3>Up Comming Event</h3>
						</div>
						<div class="col-md-12 comming">
							<div class="row">
								<div class="col-sm-4 imageheight">
									<img class="card-img-top" src="images/commingevent_fallplay.jpg">
								</div>
								<div class="col-sm-8">						
									<h4 class="card-title">The Fall Play</h4>
									<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades.</p>
						 		    <a href="#" class="btn btn-outline-success">ReadMore</a>		
								</div>
							</div>
						</div>
						<div class="col-md-12 comming">
							<div class="row">
								<div class="col-sm-4 imageheight">
									<img class="card-img-top" src="images/commingevent_springmusic.jpg">
								</div>
								<div class="col-sm-8">						
									<h4 class="card-title">Spring Musical</h4>
									<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades.</p>
									<a href="#" class="btn btn-outline-success">ReadMore</a>	
								</div>
							</div>
						</div>
						<div class="col-md-12 comming">
							<div class="row">
								<div class="col-sm-4 imageheight">
									<img class="card-img-top" src="images/commingevent_theater.jpg">
								</div>
								<div class="col-sm-8">						
									<h4 class="card-title">Illinois Theatre Festival</h4>
									<p class="card-text">The Drama Club productions consist of students from 1st through 7th grades.</p>
									<a href="#" class="btn btn-outline-success">ReadMore</a>		
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">				
			</div>
		</section>

        <!-- Our Videos -->
		<section id="videos">
			<div class="heading">
				<h1 class="display-4">Our Videos</h1>
			</div>
			<div class="container">
				<div class="row padding">
					<div class="col-md-4">
						<div class="card">
							<div class="video embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/aGZ_dmEd44k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="card-body">
								<h4 class="card-title">Dance</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="video embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/W4IswwVCP_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="card-body">
								<h4 class="card-title">Singing</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="video embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/auucugFX07U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="card-body">
								<h4 class="card-title">Acting</h4>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>

		<!-- Footer -->
        <?php 
        include('includes/footer.php');
        ?>
  <!-- Footer -->
<!-- Footer -->
<!-- Footer -->     
		<!-- Footer -->
		<!--
		<footer>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4">
						<h5>LCD Club</h5>
						<hr class="Light">
						<p>555-555-555</p>
						<p>LCDclub@gamil.com</p>
						<p>100 Street Name</p>
						<p>City, State, 00000</p>
					</div>
					<div class="col-md-4">
						<hr class="light">
						<h5>Our Hours</h5>
						<hr class="light">
						<p>Monday: 9am - 5pm</p>
						<p>Saturday: 10am - 4pm</p>
						<p>Sunday: Closed</p>
					</div>
					<div class="col-md-4">
						<hr class="light">
						<h5>Connect</h5>
						<hr class="light">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google"></a>
						<a href="#" class="fa fa-youtube"></a>
						<a href="#" class="fa fa-instagram"></a>
						<a href="#" class="fa fa-skype"></a>
					</div>
					<div class="col-12">
						<hr class="light">
						<h5>Copyright &copy; 2018 Lulworth Cove Drama Club<br>Developed By Binod Rana</h5>
					</div>
				</div>
			</div>
		</footer>-->



<!-- javascript -->
    <?php
    include("includes/javascript.php");
    ?>
</body>
</html>

<!--			<div class="col-md-12">
				<div class="row logo">
					<div class="col-md-4 logo_left">
						<img src="images/drama.png" alt="Los Angeles" width="1400" height="550">
					      	<h4>Lulwoth Cove Drama Club</h4>
					</div>
					<div class="col-md-8 logo_right">
						<div class="d-flex flex-row-reverse">
							 <form class="form-inline ">
						      <input class="form-control mr-sm-2" type="search" placeholder="Type here to search....." aria-label="Search">
						      <button class="btn btn-outline-success" type="submit" >Search</button>
						    </form>
						    <button  type="button" class="btn btn-outline-primary login"><a href="#" class="login">Login</a></button>
						    <button type="button" class="btn btn-outline-primary SignUp"><a href="#" class="signup">Sign Up</a></button>
						</div>
					</div>
				</div>
			</div>