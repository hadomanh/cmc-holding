<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>CMC HOLDING</title>
	<meta id="PagKeywords" name="keywords" content="CMC CHAIN" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="CMC CHAIN"/>
	<meta property="og:description" content="CMC CHAIN"/>	
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content="CMC CHAIN" />

	<!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>

	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

	<body>

		<!-- Header -->
		<header>
			<div class="top">CMC Holdings Roadmap 2022-2027 IPO $300 billion</div>
			<nav class="navbar navbar-expand-md bg-light">
				<a class="navbar-brand d-md-none d-block" href="{{ route('home') }}">
					<img src="{{ asset('img/logo-mobile.png') }}" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars" aria-hidden="true"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-between align-items-end" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('about') }}">About us</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Investor
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Internal Report</a></li>
								<li><a class="dropdown-item" href="#">Annual Finance Report</a></li>
								<li><a class="dropdown-item" href="#">Sec Filing</a></li>
							</ul>
						</li>
					</ul>
					<a class="navbar-brand d-none d-md-block" href="{{ route('home') }}">
						<img src="{{ asset('img/logo.png') }}" alt="">
					</a>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Media
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Investor News</a></li>
								<li><a class="dropdown-item" href="#">News</a></li>
								<li><a class="dropdown-item" href="#">Press Release</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Language</a>
						</li>                                
					</ul>
				</div>
			</nav>
		</header>

		@yield('content')

		<!-- Footer -->
		<footer class="pb-0 bgWhite">
			<div class="container-lg">
				<div class="row">
					<div class="col-xl-auto col-12">
						<img src="{{ asset('img/logo.png') }}" class="footerLogo">
					</div>
					<div class="col-xl col-12">
						<h6 class="title text-red"><span>Home Page</span></h6>
						<div class="row menuFooter">
							<div class="col-md-3">
								<ul>
									<li class="parent">
										<span>About us</span>
										<ul class="list-unstyled">
											<li><a href="#">Overview</a></li>
											<li><a href="#">Our Mission</a></li>
											<li><a href="#">Our Vision</a></li>
											<li><a href="#">Our Core Values</a></li>
											<li><a href="#">Business Category</a></li>
											<li><a href="#">Our Ecosystem</a></li>
											<li><a href="#">Our Members</a></li>
											<li><a href="#">Our Executive Team</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li class="parent">
										<span>Investor</span>
										<ul class="list-unstyled">
											<li><a href="https://hyperaschain.com/" target="_blank">Internal Report</a></li>
											<li><a href="https://www.pindias.com/" target="_blank">Annual Finance Report</a></li>
											<li><a href="https://divega.com/" target="_blank">Sec Filing</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li class="parent">
										<span>Media</span>
										<ul class="list-unstyled">
											<li><a href="javascript:void(0)">Investment News</a></li>
											<li><a href="javascript:void(0)">News</a></li>
											<li><a href="javascript:void(0)">Press Release</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Language</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="companyInfo">
					<h6 class="title"><span>CMC Holdings</span></h6>
					<div class="row">
						<div class="col">
							<ul class="list-unstyled">
								<li>
									<img src="{{ asset('img/icon-location.png') }}" class="icon">
									<div><strong>1:</strong> 30 N Gould St Ste R Sheridan, Wyoming 82801, USA</div>
									<div><strong>2:</strong> 2323 Main Street Irvine, CA 92614, U.S.A.</div>
									<div><strong>3:</strong> CX01 lot, Van Khe urban area, La Khe Ward, Ha Dong District, Hanoi, Vietnam</div>
								</li>
								<li>
									<img src="{{ asset('img/icon-mail.png') }}" class="icon">
									<div>:  info@cmcholdings.com | info@cmcholdings.vn</div>
								</li>
								<li>
									<img src="{{ asset('img/icon-global.png') }}" class="icon">
									<div>:  www.cmcholdings.com | www.cmcholdings.vn</div>
								</li>
							</ul>
						</div>
						<div class="col-md-auto">
							<div class="row social">								
								<div class="col-auto"><a target="_blank" href="https://www.facebook.com/Metaway-Holdings-109209504990418" class="item"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></div>
								<div class="col-auto"><a target="_blank" href="https://www.youtube.com/channel/UCpIg6-XEcZnofCZD5z8OLVw" class="item"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>
								<div class="col-auto"><a target="_blank" href="https://linkedin.com/company/metawayglobal" class="item"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
								<div class="col-auto"><a target="_blank" href="https://twitter.com/metawayglobal" class="item"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright text-center">
				<div class="container-lg">
					<div>CMC Holdings.com is a proud part of CMC Holdings Inc., a leading business  services company.</div>
					<div>CMC Holdings.com is a Registered Trademark. © 2022 – 2027  All Rights Reserved</div>
				</div>
			</div>
		</footer>
		
		<!-- Js File -->
		<script type="text/javascript" src=" {{ asset('js/jquery-3.6.0.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script type="text/javascript" src=" {{ asset('js/owl.carousel.min.js') }}"></script>
		<script>
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				dots: false,
				autoplay: true,
				autoplaySpeed: 1000,
				navSpeed: 1000,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:2
					}
				}
			})
		</script>

		@stack('script')
	</body>
</html>
