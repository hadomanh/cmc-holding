@extends('layouts.app')

@section('content')
<div id="homepage">
	<!-- Banner -->
	<section class="banner p-0">
		<div id="carouselBanner" class="carousel slide pt-0" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="carouselContent">
						<h1 class="title">Metaway Holdings<br><span class="fw-light">The Big Things</span></h1>
						<h4 class="subTitle">Cross-border multi-industry economic corporation</h4>
						<a href="#" class="more">read more</a>
					</div>
					<img src="{{ asset('img/banner-homepage.jpg') }}" alt="" class="w-100">
				</div>
				<div class="carousel-item">
					<div class="carouselContent">
						<h1 class="title">Metaway Holdings<br><span class="fw-light">The Big Things</span></h1>
						<h4 class="subTitle">Cross-border multi-industry economic corporation</h4>
						<a href="#" class="more">read more</a>
					</div>
					<img src="{{ asset('img/banner-homepage-1.jpg') }}" alt="" class="w-100">
				</div>
			</div>
		</div>
	</section>

	<!-- About Us -->
	<section class="bgWhite">
		<div class="container-lg">
			<h2 class="sectionHeading centered text-uppercase">about us</h2>
			<div class="row">
				<div class="col-md-6">
					<p><img src="{{ asset('img/img-1.jpg') }}" alt=""></p>
				</div>
				<div class="col-md-6">
					<p>In the future, with a wealth of knowledge and practical experience and a team of experts with specialized expertise, we will also develop consulting services in the fields of technology, finance, and management. </p>
					<p>CONNECTION: We leverage the power of connectivity and endeavor to create new forms of connectivity in the categories of the pillar economy especially the digital economy to collaborate with the people and society without borders. </p>
					<p>METAVERSE: CMC Holdings was founded at a time when digital transformation is inevitable, and many emerging technologies, such as Blockchain, NFT, Cryptocurrency, Digital Banking, and especially Metaverse are on the rise.</p>
					<p>COMMUNITY: CMC Holdings was built by a community of people with great aspirations and missions with the desire to create great values for many communities around the globe.</p>
					<p class="text-center"><a href="{{ route('about') }}" class="btn btnWhite text-uppercase">Read more</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Business highlights -->
	<section class="newsHighlights bgGrey bgArrow">
		<div class="container-lg">
			<h2 class="sectionHeading centered">BUSINESS HIGHLIGHTS</h2>
			<p class="text-center">The rise of the technology 4.0 revolution has motivated CMC Holdings' tycoons and founders to invest and participate in the fields of digital finance, advanced real estate development, and international commodities. </p>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/img-2.jpg') }}"></a>
						<div class="card-body d-flex flex-column">
							<h5 class="card-title titleUnderline"><a href="#">Brand Story</a></h5>
							<p class="card-text flex-grow-1">Build its business foundation to contribute to the pillar industries of Vietnam and the world based on the development of the technology revolution and the unifying of intelligence including human intelligence, artificial intelligence, and business intelligence.</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/img-3.jpg') }}"></a>
						<div class="card-body d-flex flex-column">
							<h5 class="card-title titleUnderline"><a href="#">Business Category</a></h5>
							<p class="card-text flex-grow-1">The business of CMC Holdings focuses on leading and high-class industries including specialized healthcare, super-luxury real estate, technology-related categories, especially financial technology, and blockchain-driven.</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/img-2.jpg') }}"></a>
						<div class="card-body d-flex flex-column">
							<h5 class="card-title titleUnderline"><a href="#">Ecosystem</a></h5>
							<p class="card-text flex-grow-1">The CMC Holdings ecosystem is fast-growing, focuses on the research and development of products and services that address the following special needs: large volume, global scale, repetitive requirements, ever-widening demands, the longing to enhance the quality of life.</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our parnters -->
	<section class="bgDark partners text-white">
		<div class="container-lg">
			<h2 class="sectionHeading centered">OUR PARTNERS</h2>
			<p class="text-center">We prefer to work with companies who have a common vision and can come along with our business ecosystem and corporate culture value system. Our partners come from the multi-diversification of internal and external resources.</p>
			<div class="owl-carousel">
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Phi Group.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/VNPT.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Acentus Capital.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Petroland.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Nikko AM.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/VCCI.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Viettin Capital.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Viettin Securities.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Vietnam Post.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/VNPT.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/VVC.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Petroland.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Nikko AM.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/VCCI.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Viettin Capital.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Viettin Securities.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- As seen on -->
	<section class="bgGrey partners">
		<div class="container-lg">
			<h2 class="sectionHeading centered">AS SEEN ON</h2>
			<div class="owl-carousel">
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder">
								<img src="{{ asset('img/UNasdaq.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Bloomberg.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Market-Watch.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/">
								<img src="{{ asset('img/Market-Screener.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://ca.finance.yahoo.com/news/phi-group-joins-vietnam-based-143000193.html">
								<img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Viettimes.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/BDS-Vietnam.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Doanh-nhan-sai-gon.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Cafe-F.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Market-Watch.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder">
								<img src="{{ asset('img/UNasdaq.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Bloomberg.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/">
								<img src="{{ asset('img/Market-Screener.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<img src="{{ asset('img/Viettimes.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection