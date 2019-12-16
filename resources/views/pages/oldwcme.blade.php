<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>DTU Times</title>

	{{-- Theme css --}}
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
	 rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/magnific-popup.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/responsive.css') }}" type="text/css" />
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<style>
		::-webkit-scrollbar {
			display: none;
		}

		.modal {
			display: none;
			position: fixed;
			z-index: 200;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.5);
		}

		.modal-content {
			position: sticky;
			background-color: #f4f4f4;
			margin: 7% auto;
			width: 90%;
			box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
			animation-name: modalopen;
			animation-duration: 1s;
		}

		.modal-header h2,
		.modal-footer h3 {
			margin: 0;
		}

		.modal-header {
			background: black;
			padding: 15px;
			color: white;
		}

		.modal-body {
			padding: 10px 20px;
		}

		.modal-footer {
			background: white;
			padding: 10px;
			color: black;
			text-align: center;
		}

		.closeBtn {
			color: #ccc;
			float: right;
			font-size: 30px;
			color: #fff;
		}

		.closeBtn:hover,
		.closeBtn:focus {
			color: red;
			text-decoration: none;
			cursor: pointer;
		}

		@keyframes modalopen {
			from {
				opacity: 0
			}
			to {
				opacity: 1
			}
		}

		@media (min-width: 530px) {
			.resp_width {
				width: 65%;
			}
		}

		@media (min-width: 800px) {
			.modal-content {
				width: 75%;
				height: 85%
			}
			.resp_width {
				width: 65%;
			}
			.modal {
				overflow: hidden;
			}
		}

		@media (min-width: 992px) {
			.modal-content {
				width: 60%;
				height: 85%;
			}
			.resp_width {
				width: 65%;
			}
			.modal {
				overflow: hidden;
			}
		}

		@media (min-width: 1200px) {
			.modal-content {
				width: 50%;
				height: 80%;
			}
			.resp_width {
				width: 65%;
			}
			.modal {
				overflow: hidden;
			}
		}
	</style>
</head>

<body class="stretched">
	<!-- Document Wrapper
    ============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- modal -->

		<div id="simpleModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="closeBtn" style="margin-top:-15px;">&times;</span>
					<h1 style="text-align:center; color:#EEE; font-variant:small-caps; margin:0;">Sign up to keep in touch</h1>
				</div>
				<div class="modal-body">

					<div class="widget subscribe-widget clearfix resp_width" style="margin:15px auto 30px auto;">
						<h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
						<div class="widget-subscribe-form-result" style="margin-top:-10px;"></div>
						<form id="widget-subscribe-form" action="{{ route('subscribers.join') }}" role="form" method="post" class="nobottommargin">
							<div class="input-group divcenter" style="">
								@csrf
								<span class="input-group-addon"><i class="icon-email2"></i></span>
								<input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
								<span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer" style="margin:0 20px 20px 20px;">
					<h4 style="margin:0;">More ways to stay connected: </h4>
					<br><br>
					<div class="row clear-bottommargin">
						<div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
							<div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
								<div class="fbox-icon">
									<a href="mailto:dtutimes@dtu.ac.in"><i class="icon-email2"></i></a>
								</div>
								<h3>Email Us <br><span class="subtitle">dtutimes@dtu.ac.in</span></h3>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
							<div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
								<div class="fbox-icon">
									<a href="https://www.facebook.com/dtutimes"><i class="icon-facebook2"></i></a>
								</div>
								<h3>Follow us on Facebook<span class="subtitle">21K Likes</span></h3>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
							<div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
								<div class="fbox-icon">
									<a href="http://www.instagram.com/dtu_times"><i class="icon-instagram2"></i></a>
								</div>
								<h3>Follow us on Instagram<span class="subtitle">3.3K Followers</span></h3>
							</div>
						</div>

					</div>
					<!-- Contact Info End -->
				</div>

			</div>
		</div>
		<!-- modal end -->

		<!-- Header
        ============================================= -->
		<header id="header" class="transparent-header dark full-header sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
                    ============================================= -->
					<div id="logo">
						<a href="{{ route('welcome') }}" class="standard-logo" data-dark-logo="img/logo-dark.png"><img src="img/dtulog.png" ></a>

					</div>
					<!-- #logo end -->

					<!-- Primary Navigation
                    ============================================= -->
					<nav id="primary-menu">

						<ul>
							<li>
								<a href="{{ route('welcome') }}">
									<div>Home</div>
								</a>
							</li>

							<li class="mega-menu">
								<a href="{{ route('about') }}">
									<div>About Us</div>
								</a>
							</li>

							<li class="mega-menu">
								<a href="{{ route('editions') }}">
									<div>Editions</div>
								</a>
							</li>
							<li>
								<a href="{{ route('blog.index') }}">
									<div>Blog</div>
								</a>
							</li>

							<li>
								<a href="{{ route('gallery.index') }}">
									<div>Gallery</div>
								</a>
							</li>

							<li>
								<a href="{{ route('societies.index') }}">
									<div>Societies</div>
								</a>
							</li>

							<li>
								<a href="{{ route('team') }}">
									<div>Team</div>
								</a>
							</li>
							<li>
								<a href="{{ route('contact') }}">
									<div>Contact Us</div>
								</a>
							</li>

                        <ul>
                            <li><a href="{{ route('welcome') }}"><div>Home</div></a>
                            </li>

                            <li class="mega-menu"><a href="{{ route('about') }}"><div>About Us</div></a>
                            </li>

                            <li class="mega-menu"><a href="{{ route('editions') }}"><div>Editions</div></a>
                            </li>
                                                        <li><a href="{{ route('blog.index') }}"><div>Blog</div></a>
                            </li>

                            <li><a href="{{ route('gallery.index') }}"><div>Gallery</div></a>
							</li>

							<li><a href="{{ route('societies.index') }}"><div>Societies</div></a>
							</li>

                            <li><a href="{{ route('team') }}"><div>Team</div></a>
                            </li>
                             <li><a href="{{ route('contact') }}"><div>Contact Us</div></a>
                            </li>


					</nav>
					<!-- #primary-menu end -->


				</div>

			</div>

		</header>
		<!-- #header end -->

		<section id="slider" class="force-full-screen full-screen">

			<div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">

				<div class="container clearfix">
					<div class="slider-caption slider-caption-center">
						<h2 data-animate="fadeInUp">DTU Times</h2>
						<p data-animate="fadeInUp" data-delay="200">The Official University Newsletter of DTU</p>
						<a data-animate="fadeInUp" data-delay="400" href="{{ route('editions') }}" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin"
						 style="margin-top: 30px;">check out our latest edition</a>


					</div>
				</div>
				<div class="video-wrap">
					<video controls poster="img/back.jpg" preload="auto" loop autoplay muted>
						<source src="img/videos/mobile2opt.mp4" type="video/mp4" media="all and (min-width: 480px)">

						</video>
					<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
				</div>

			</div>

		</section>
		<div class="line notopmargin"></div>

		<h3 class="center"><span>Latest</span> Editions</h3>

		<div class="container">
			<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-loop="true" data-nav="true"
			 data-pagi="true" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3" data-items-lg="4">
			 	<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/47.png" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 47</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

			 	<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/46.png" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 46</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

			 	<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/45.png" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 45</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/44.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 44</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/43.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 43</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/42.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 42</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>
				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/41.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 41</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">

					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/40.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 40</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>


				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/37.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 37</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/36.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 36</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/35.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 35</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>


		<br>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<!-- Posts
								============================================= -->
				<div id="posts" class="post-grid grid-container post-masonry post-masonry-full grid-3 clearfix">

					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/10years.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/10years.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/dtu-times-celebrating-10-years-944">Dtu Times - Celebrating 10 Years</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> January 21, 2019</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times thanks its readers for their unabating support, as it completes 10 years as the official newsletter of Delhi Technological University.
							</p>
							<a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/dtu-times-celebrating-10-years-944"class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/cleanenergy.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/cleanenergy.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/clean-energy-research-center-to-be-set-up-at-dtu-550">Clean Energy Research Center To Be Set Up At DTU</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> February 8, 2019</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>Clean Energy Research Centre at Delhi Technological University, under the mentorship of DCE alumnus Prof. Dharendra Yogi Goswami, will be set in partnership with government
							</p>
							<a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/clean-energy-research-center-to-be-set-up-at-dtu-550"class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/anulather.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/anulather.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/interview-prof-anu-singh-lather-pro-vc-part-i-east-campus-751">INTERVIEW | Prof. Anu Singh Lather, Pro VC | Part I, East Campus</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> February 7, 2019</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Prof. Anu Singh Lather, Pro Vice Chancellor, DTU on the process and experience of setting up the USME, at DTU East Campus.
							</p>
							<a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/interview-prof-anu-singh-lather-pro-vc-part-i-east-campus-751"class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/avijitdutt.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/avijitdutt.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/interview-avijit-dutt-417">INTERVIEW | AVIJIT DUTT</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> January, 2019</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed filmmaker, actor, theatre director and communications consultant Avijit Dutt, who was at Yuvaan Literature and Film Festival for a panel discussion.
							</p>
							<a target="_blank" rel="noopener noreferrer" href="http://www.dtutimes.dtu.ac.in/blog/interview-avijit-dutt-417"class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/y6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y6.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y5.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y7.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y8.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y9.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y10.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y11.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y11.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y12.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y14.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y14.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y15.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y15.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y16.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y16.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y17.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y17.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y18.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y18.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Yuvaan 2019</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>January, 2019</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p>The third edition of Yuvaan, the film and literature festival of Delhi Technological Univesity, was held during the month of January, 2019.  This festival saw a massive footfall of attendees as film lovers and literature fans came together from all around the city. Over the span of three days, many eminent personalities graced the event, with interactive sessions, as the attendees busied themselves, praticipating in various events during the fest.
							</p>

						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/es6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/es6.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/es1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/es1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/es2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/es2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/es3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/es3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/es4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/es4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/es5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/es5.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">E-Summit 2019</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>February, 2019</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> Entrepreneurship Cell DTU hosted its flagship event, E-Summit 2019, from 31st January to 2nd February 2019.The event was a colloquy of sharp young minds, bleeding edge professionals and trend-setting companies
							</p>

						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/am4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/am4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/am1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/am1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/am2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/am2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/am3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/am3.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Home coming Meet 2019</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>February 8, 2019</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The alumni of the Class of 1959 and 1969 visited the Campus of DTU (formerly known as DCE) and were felicitated. Hon'ble Vice Chancellor Prof. Yogesh Singh and Deputy Chief Minister Sri Manish Sisodia as well as dignitaries from the administration and Alumni Association were present.
							</p>

						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/tf1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/tf1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/tf2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/tf2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/tf3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/tf3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/tf4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/tf4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/tf5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/tf5.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Invictus 2019</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>February, 2019</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p>Invictus, Delhi Technological Unversity is the Annual Tech-Fest of the University. It was held during the month of February. All the Tech Societies and Teams of DTU host this fest which is a home to a plethora of competitions and exhibitions which see over 15k participants from all over the country.
							</p>

						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/mun1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/mun1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/mun2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/mun2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/mun3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/mun3.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Deltech MUN 2019</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>January, 2019</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The DelTech MUN and Debating Society organised DelTech Model United Nations on 19-20 January 2019. The Chief Guest was Mr.Sanam Sutirath Wazir, a human rights activist.
							</p>

						</div>
					</div>

					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/kuchyadein.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/kuchyadein.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/16/कुछ-यादें-ऐसी-भी/#more-7643">कुछ यादें ऐसी भी!</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> August 16, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>कॉलेज में कदम रखते शिवेंद्र की विडम्बना का वर्णन करते, लोकेश नारायण शंकर, द्वितीय वर्ष, आई टी.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/16/कुछ-यादें-ऐसी-भी/#more-7643"class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/talesoflost.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/talesoflost.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/15/tale-of-the-lost/#more-7714">Tale of the Lost</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> September 15, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p> A tale of two best friends from Anushka Sharma, 2nd Year, MAM who had to part ways as a result of an impasse.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/15/tale-of-the-lost/#more-7714"class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="/img/portfolio/amanthakur.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/amanthakur.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/10/02/interview-aman-thakur-gyankunj/">Interview | Aman Thakur, Gyankunj</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>October 2, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Aman Thakur, an alumnus of DTU and the founder of the NGO Gyankunj.<br>
“Our belief is that a liberation of weaker sections of our community can tangibly spread change in the long run.”<br>
– Gyankunj Team</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/10/02/interview-aman-thakur-gyankunj/"class="more-link">Read More</a>
						</div>
					</div>
				</div><!-- #posts end -->
			</div>
			<br>
			<br>
		</section>
		<!-- #content end -->

		@include('inc.footer')
	</div>
	<!-- #wrapper end -->

	<!-- Go To Top
    ============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	{{-- Theme Scripts --}}
	<!-- External JavaScripts
    ============================================ -->
	<!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/main/jquery.js"></script>
	<script type="text/javascript" src="js/main/plugins.js"></script>

	<!-- Footer Scripts
    ============================================= -->
	<script type="text/javascript" src="js/main/functions.js"></script>




@if(!isset($_COOKIE['DTUnewsletter'])):
	<script>
		$(document).ready(function(){
					setTimeout(function(){
						PopUp();
					},5000); // 5000 to load it after 5 seconds from page load
			});

			// Get modal element
			var modal = document.getElementById('simpleModal');
			// Get close button
			var closeBtn = document.getElementsByClassName('closeBtn')[0];

			// Listen for close click
			closeBtn.addEventListener('click', closeModal);
			// Listen for outside click
			window.addEventListener('click', outsideClick);

			// Function to open modal
			function PopUp(){
			modal.style.display = 'block';
			}

			// Function to close modal
			function closeModal(){
				<?php
					setcookie("DTUnewsletter","guest@app.com",time()+(30 * 60));
				?>
			modal.style.display = 'none';
			}

			// Function to close modal if outside click
			function outsideClick(e){
			if(e.target == modal){
				modal.style.display = 'none';
			}
			}
	</script>
@endif

	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

	<script>
		AOS.init();

	var mainVideo = $('#the-video');


if ($(window).width() < 1200 && medQualVersion) {
  mainVideo.append("<source type='video/mp4' src='img/videos/explore.mp4" + medQualVersionSrc + "' />");
} else {
  mainVideo.append("<source type='video/mp4' src='img/videos/explore.mp4" + highQualVersionSrc + "' />");
}
mainVideo.append("<source type='video/webm' src='img/videos/explore.mp4" + webMSrc + "' />");

// Wait until sources are appended to call MediaElements.js
mainVideo.mediaelementplayer();
	</script>
</body>

</html>
