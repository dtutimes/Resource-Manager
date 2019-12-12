@extends('layouts.main')
@section('title')
<title>Editions | DTU Times</title>
@endsection
@section('links')
<link rel="stylesheet" href="css/main/writer.css" type="text/css" />
<link rel="stylesheet" href="css/main/et-line.css" type="text/css" />

<!-- Writer Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/main/colors.css" type="text/css" />
	<link rel="stylesheet" href="css/main/css/fonts.css" type="text/css" />
	<!-- / -->
@endsection
@section('content')
<!-- Slider
		============================================= -->
		<section id="slider" class="clearfix" style="background:#1E232A; height: 800px;">
			<div class="move-bg" style="background: url('img/back.jpg') center center no-repeat; background-size: cover;"></div>


				<div class="vertical-middle ignore-header" style="z-index: 3;">
				<div class="container dark clearfix">
					<div class="row clearfix">
						<div class="col-md-6 col-md-offset-1 col-sm-8" data-lightbox="gallery">
							<a href="img/46.png" data-lightbox="gallery-item" class="slider-book-img" data-animate="fadeInUp"><img src="img/46.png" alt=""></a>
							<a href="img/45.png" data-lightbox="gallery-item" class="slider-book-img" data-animate="fadeInUp"><img src="img/45.png" alt=""></a>
							<div class="emphasis-title bottommargin-sm">
								<h1 class="400" data-animate="fadeInUp" data-delay="600">Read the Latest Print Editions by<br><span><em>DTU Times</em></span>.</h1>
							</div>
							<a data-animate="fadeIn" href="https://drive.google.com/drive/folders/1fSuXKN7DKOAQqSAuWFN7rd3JGl2_h4W2?usp=sharing" style="transition-duration: 5s" class="button button-large button-border button-white button-light button-rounded capitalize notopmargin"><span>Download</span></a><br class="hidden-lg hidden-md">

						</div>
					</div>
				</div>
			</div>









			<!-- Slider Video Overlay -->
			<div class="video-wrap" style="z-index: 2; height: 800px; position: absolute; left: 0; bottom: 0;">
				<div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,0) 21%, rgba(30,35,42,0) 66%, rgba(30,35,42,1) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
				</div>
			</div>
		</section>


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding" style="background-color: #1E232A;">

				<!-- Latest All Books
				============================================= -->
				<div class="section nopadding nomargin" style="background: url('img/edition_back.jpg') center center no-repeat; background-size: cover;">

					<div class="container clearfix">


						<div class="clear topmargin-sm bottommargin-lg"></div>

						<div class="row clearfix">
							<div class="col-md-6">
								<div class="heading-block dark tleft nobottomborder">
									<h3 class="nott t400 ls0" style="font-size: 36px;"><span>Latest Editions</span></h3>
								</div>

							</div>
						</div>

						<div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-masonry clearfix">
							<div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/46" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/46.png" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 46</a></h2>
											<small class="book-category"><a href="edition46.pdf">Feb'19-Apr'19</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/45" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/45.png" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 45</a></h2>
											<small class="book-category"><a href="edition45.pdf">Nov'18-Feb'19</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>

						    <div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/44" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/44.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 44</a></h2>
											<small class="book-category"><a href="edition41.pdf">Aug'18-Oct'18</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>

                            <div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/43" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/43.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 43</a></h2>
											<small class="book-category"><a href="edition40.pdf">May'18-July'18</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>


							<div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/42" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/42.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 42</a></h2>
											<small class="book-category"><a href="edition39.pdf">Feb'18-April'18</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/41" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/41.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a href="#">Edition 41</a></h2>
																						<small class="book-category"><a href="edition39.pdf">Nov'17-Jan'18</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>



							<div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/40" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/40.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a href="#">Edition 40</a></h2>
																						<small class="book-category"><a href="edition40.pdf">Aug’17-Oct’17</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="portfolio-item">
								<div class="book-wrap">
									<div class="book-card">
										<a href="editions/39" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/39.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a href="#">Edition 39</a></h2>
																						<small class="book-category"><a href="edition39.pdf">May‘17-Jul‘17</a></small>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
							</div>




						</div>

							<div class="line "></div>


									<h3 class="center"><span>Archive</span></h3>



				    <div class="container">
					<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-loop="false" data-nav="true" data-pagi="true" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3" data-items-lg="4">



												                    <div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/38" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/38.jpeg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 38</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>
						                    <div class="oc-item" >


						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/37" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/37.jpeg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 37</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>



						<div class="oc-item" >




					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/36" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/36.jpeg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 36</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>

						</div>



                    <div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/35" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/35.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 35</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>


						<div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/34" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/34.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 34</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div><div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/33" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/33.jpeg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 33</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>
						<div class="oc-item" >

					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/32" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/32.jpeg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 32</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
						</div>


                    <div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/31" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/31.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 31</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>


                   <div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/30" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/30.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 30</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>


                   <div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/29" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/29.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 29</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>


                   <div class="oc-item" >
						<a href="editions.html">
					<div class="entry clearfix">
						<div class="book-wrap">
									<div class="book-card">
										<a href="editions/28" class="item-quick-view book-image" data-lightbox="ajax"><img src="img/editions/28.jpg" alt="Book Image"></a>
										<div class="book-detail">
											<h2 class="book-title"><a>Edition 28</a></h2>
											<div class="button button-white button-light capitalize button-circle"><i class="icon-line-zoom-in"></i><span>view the edtion</span></div>
										</div>
									</div>
								</div>
					</div>
                            </a>
						</div>

                    </div>
        </div>
    			</div>

<br>
					<div class="video-wrap" style=" height: auto; position: absolute; left: 0; bottom: 0; z-index:1;">
						<div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,1) 21%,, rgba(30,35,42,0) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
						</div>
					</div>

                </div>

			</div>

		</section><!-- #content end -->

@endsection
@section('scripts')
<script type="text/javascript">




		jQuery(document).ready( function(){

			if( !jQuery('body').hasClass('device-touch') ) {

				var lFollowX = 0,
					lFollowY = 0,
					x = 0,
					y = 0,
					friction = 1 / 30;

				function moveBackground() {
					x += (lFollowX - x) * friction;
					y += (lFollowY - y) * friction;

					translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

					jQuery('.move-bg').css({
						'-webit-transform': translate,
						'-moz-transform': translate,
						'transform': translate
					});

					window.requestAnimationFrame(moveBackground);
				}

				jQuery(window).on('mousemove click', function(e) {

					var lMouseX = Math.max(-100, Math.min(100, jQuery(window).width() / 2 - e.clientX));
					var lMouseY = Math.max(-100, Math.min(100, jQuery(window).height() / 2 - e.clientY));
					lFollowX = (10 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
					lFollowY = (10 * lMouseY) / 100;

				});

				moveBackground();

				jQuery(".book-wrap").hover3d({
					selector: ".book-card",
					shine: false,
				});

			}

		});

	</script>
@endsection
