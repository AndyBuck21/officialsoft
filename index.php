<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>OfficialSoft</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/loogo.jpg">
	</head>
	
	<body>
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>E-mail</strong>:&nbsp; <a href="#">info@officialsoft.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-twitter" href="https://www.twitter.com/officialsoft_/"><i class="fa fa-twitter"></i></a>
								<a class="h-linkedin" href="https://www.instagram.com/officialsoft_/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#latestalbum">Latest Album</a></li>
								<li><a href="#featuredalbum">Featured Album</a></li>
								<li><a href="#singles">Singles &amp; Extended Plays</a></li>
								<li><a href="#tickets">Tickets/Tours</a></li>
								<li><a href="#events">Events</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/c2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Musician/Band</h2>
									<!-- paragraph -->
									<h1 class="animated fadeInRightBig">SOFT</h1>
									<!-- button -->
									<a href="https://fanlink.to/somersaultbysoft" class="animated fadeIn btn btn-theme">Explore Here</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/c1.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen To The Sound...</h2>
									<a href="https://fanlink.to/somersaultbysoft" class="animated fadeIn btn btn-theme">Listen/Download Now</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>

			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Latest Single </h2>
						<hr>
						<!-- paragraph -->
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="img/album/2.jpeg" alt="" />
									<!-- disk image -->
									<img class="img-responsive disk" src="img/album/disk.png" alt="" />
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>SOMER SAULT</h4>
									<!-- composed by -->
									<h5>By SOFT</h5>
									<!-- paragraph -->
									<!-- button -->
									<a href="https://fanlink.to/somersaultbysoft" class="btn btn-lg btn-theme"><i class="fa fa-play"></i>&nbsp; Play Now</a>
									<div class="sm-right">
									<br>
							<!-- social link -->
							
						
						</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>SOMER SAULT </h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: &nbsp;|&nbsp; <strong>Artist</strong>: SOFT</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="https://fanlink.to/somersaultbysoft"><i class="fa fa-play"></i></a>
												<a href="https://fanlink.to/somersaultbysoft"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>

																					
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ hero end -->
			
			
			
			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3></h3>
						<!-- paragraph -->
						<p></p>
						<!-- link -->
						<a class="promo-link" href="#"><i class="fa fa-play-circle"></i></a>
					</div>
				</div>
			</div>
			<!--/ promo end -->
			
			<!-- featured abbum -->
			<div class="featured pad" id="featuredalbum">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Featured Album</h2>
					</div>
					<!-- featured album elements -->
					<div class="featured-element">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/8.jpg" alt="" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/8.jpg" alt="" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/8.jpg" alt="" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/8.jpg" alt="" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/8.jpg" alt="" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/8.jpg" alt="" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4></h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- features end -->
			
			<!-- call to action -->
			<div class="cta parallax-one pad">
				<div class="container">
					<!-- cta element -->
					<div class="cta-element ">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<!-- heading -->
								<h3></h3>
								<!-- paragraph -->
								<p></p>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="cta-btn text-center">
									<!-- purchase now button -->
									<a href="#" class="btn btn-default btn-lg">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ cta end -->
			
			
			
			<div class="portfolio pad" id="portfolio">
				<div>
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Portfolio</h2>
					</div>
				</div>
				<!-- portfolio -->
				<div class="portfolio-content" id="portfolioOwl">
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
				
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<!-- icon -->
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/9.jpg" alt="">
						<!-- transparent background -->
						
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							
							<a href="#"><i class="fa fa-share"></i></a>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="#" class="btn btn-lg btn-theme">View more</a>
				</div>
				<!-- portfolio end -->
			</div>
			<!-- work with us end -->
			
			<!-- events -->
			<div class="events parallax-three pad" id="events">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<!-- heading -->
						<h2>Coming Events</h2>
					</div>
					<!-- events element -->
					<div class="events-element">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											24 <span class="emonth">Jan</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">06:30 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New York</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/1.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3></h3>
										<!-- horizontal line --><hr />
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											31 <span class="emonth">Jan</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">09:45 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> NewYork</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/2.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3></h3>
										<!-- horizontal line --><hr />
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											14 <span class="emonth">Feb</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">10:30 am</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> South Afric</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/3.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											31 <span class="emonth">Mar</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">10:00 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> London</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/4.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
							
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- events end -->
			
			
			
			<!-- meet -->
			<div class="meet parallax-four pad" id="meet">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<h2>Upcoming Meets</h2>
					</div>
					<!-- meet location image -->
					<div class="meet-map">
						<img class="img-responsive img-map" src="img/flat/map.png" alt="" />
						<!-- map marker for India  -->
						<a href="#" class="map-marker india " data-toggle="tooltip" data-placement="top" title="India"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for United States  -->
						<a href="#" class="map-marker usa " data-toggle="tooltip" data-placement="top" title="United States"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for South Africa  -->
						<a href="#" class="map-marker sa " data-toggle="tooltip" data-placement="top" title="South Africa"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for Russia  -->
						<a href="#" class="map-marker russia " data-toggle="tooltip" data-placement="top" title="Russia"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for Brazil  -->
						<a href="#" class="map-marker brazil " data-toggle="tooltip" data-placement="top" title="Brazil"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
					</div>
				</div>
			</div>
			<!-- meet end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-linkedin" href="https://www.instagram.com/officialsoft_/"><i class="fa fa-instagram"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; copyright <?php echo date('Y'); ?> All rights are reserved.</p>
				</div>
			</footer>
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>