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
						<h4 class="subTitle">Digital Economy Corporation</h4>
						<a href="#" class="more">@lang('read more')</a>
					</div>
					<img src="{{ asset('img/banner-homepage.jpg') }}" alt="" class="w-100">
				</div>
				<div class="carousel-item">
					<div class="carouselContent">
						<h1 class="title">Metaway Holdings<br><span class="fw-light">The Big Things</span></h1>
						<h4 class="subTitle">Digital Economy Corporation</h4>
						<a href="#" class="more">@lang('read more')</a>
					</div>
					<img src="{{ asset('img/banner-homepage-1.jpg') }}" alt="" class="w-100">
				</div>
			</div>
		</div>
	</section>

	<!-- About Us -->
	<section class="bgWhite">
		<div class="container-lg">
			<h2 class="sectionHeading centered text-uppercase">{{ __('about us') }}</h2>
			<div class="row">
				<div class="col-md-6">
					<p><img src="{{ asset('img/img-1.jpg') }}" alt=""></p>
				</div>
				<div class="col-md-6">
					<p>@lang ('Metaway Holdings is a global-scale digital economy corporation with the orientation to develop on the pillar fields of the digital economy society. We create platforms to fulfill multi-value ecosystems: Digital Healthcare, Digital Education, Digital Commerce, Digital Banking, Digital insurance, Digital Real Estate... All based on optimal application of the cutting-edge technologies for better serving the demand  on for global connectivity')</p>
					<p><h6>@lang ('Way')</h6>@lang ('Metaway Holdings possesses the secrets of the super-rich class and the formula successfully applied  in the top corporations and even start up companies for spectacular business breakthroughs. This will be the firm launching pad to help us conquer all the peaks.') </p>
					<p><h6>@lang ('Talent')</h6>@lang ('Metaway Holdings brings together gifted people with a noble vision and mission in connecting communities and actualizing all aspirations.')</p>
					<p><h6>@lang ('Metaverse')</h6>@lang ('Formed in the Metaverse era, we are well aware of the importance of developing infrastructure and solutions to help humankind quickly access and adapt to the movements of the future.')</p>
					<p class="text-center"><a href="{{ route('about') }}" class="btn btnWhite text-uppercase">@lang ('Read more')</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Business highlights -->
	<section class="newsHighlights bgGrey bgArrow">
		<div class="container-lg">
			<h2 class="sectionHeading centered">BUSINESS HIGHLIGHTS</h2>
			<p class="text-center">The rise of the technology 4.0 revolution has motivated METAWAY Holdings' tycoons and founders to invest and participate in the fields of digital finance, advanced real estate development, and international commodities. </p>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/img-2.jpg') }}"></a>
						<div class="card-body d-flex flex-column">
							<h5 class="card-title titleUnderline"><a href="#">@lang ('Brand Story')</a></h5>
							<p class="card-text flex-grow-1">@lang ('Born in an era when  technology wave 5.0 is exploding globally, Metaway Holdings is the convergence of pioneering leaders with outstanding vision and wisdom, unlimited imagination, a sky of creativity, and sustainable development.')</p>
							<div class="text-center"><a href="{{ route('about') }}" class="btn btnWhite">@lang ('READ MORE')</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/img-3.jpg') }}"></a>
						<div class="card-body d-flex flex-column">
							<h5 class="card-title titleUnderline"><a href="#">@lang ('Business Sector')</a></h5>
							<p class="card-text flex-grow-1">@lang ('Metaway Holdings concentrates  its business operations on the leading sectors with potential future development, which will be the pillars of the digital economy, such as Healthcare, Technology, Real Estate, and Finance.')</p>
							<div class="text-center"><a href="{{ route('about') }}" class="btn btnWhite">@lang ('READ MORE')</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/img-2.jpg') }}"></a>
						<div class="card-body d-flex flex-column">
							<h5 class="card-title titleUnderline"><a href="#">@lang ('Ecosystem')</a></h5>
							<p class="card-text flex-grow-1">@lang ("The Metaway Holdings ecosystem expands to focus on products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market. We address existing markets and industries' issues with the latest smart, transparent technology solutions.")</p>
							<div class="text-center"><a href="{{ route('about') }}" class="btn btnWhite">@lang ('READ MORE')</a></div>
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
							<a href="http://phiglobal.com/" target="blank">
								<img src="{{ asset('img/Phi Group.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://vnpt.com.vn/" target="blank">
								<img src="{{ asset('img/VNPT.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.linkedin.com/company/acentus-capital" target="blank">
								<img src="{{ asset('img/Acentus Capital.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="http://www.petroland.com.vn/" target="blank">
								<img src="{{ asset('img/Petroland.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://en.nikkoam.com/" target="blank">
								<img src="{{ asset('img/Nikko AM.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://vcci.com.vn/" target="blank">
								<img src="{{ asset('img/VCCI.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="http://www.vietinbankcapital.vn/vi-vn/" target="blank">
								<img src="{{ asset('img/Viettin Capital.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.cts.vn/" target="blank">
								<img src="{{ asset('img/Viettin Securities.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="http://www.vnpost.vn/" target="blank">
								<img src="{{ asset('img/Vietnam Post.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://vnpt.com.vn/" target="blank">
								<img src="{{ asset('img/VNPT.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#" target="blank">
								<img src="{{ asset('img/VVC.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="http://www.petroland.com.vn/" target="blank">
								<img src="{{ asset('img/Petroland.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://en.nikkoam.com/" target="blank">
								<img src="{{ asset('img/Nikko AM.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://vcci.com.vn/" target="blank">
								<img src="{{ asset('img/VCCI.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="http://www.vietinbankcapital.vn/vi-vn/" target="blank">
								<img src="{{ asset('img/Viettin Capital.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.cts.vn/" target="blank">
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
							<a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
								<img src="{{ asset('img/UNasdaq.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#" target="blank">
								<img src="{{ asset('img/Bloomberg.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.marketwatch.com/press-release/phi-group-joins-vietnam-based-cmc-holdings-to-develop-digital-economy-ecosystem-with-multiple-platforms-to-serve-global-users-needs-2022-01-25" target="blank">
								<img src="{{ asset('img/Market-Watch.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
								<img src="{{ asset('img/Market-Screener.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://www.globenewswire.com/news-release/2022/01/27/2374480/0/en/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-up-developments-aiming-for-US-300-billion-IPO-target-by-2027.html" target="blank">
								<img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://ca.finance.yahoo.com/news/phi-group-joins-vietnam-based-143000193.html" target="blank">
								<img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
								<img src="{{ asset('img/Viettimes.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://reatimes.vn/cmc-holdings-thu-hut-15-trieu-usd-vong-co-founder-20201224000009645.html" target="blank">
								<img src="{{ asset('img/BDS-Vietnam.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://doanhnhansaigon.vn/khoi-nghiep/thu-hut-1-5-trieu-usd-vong-co-founder-chi-sau-mot-gio-keu-goi-1109107.html " target="blank">
								<img src="{{ asset('img/Doanh-nhan-sai-gon.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://cafef.vn/mot-startup-phat-trien-nen-kinh-te-so-vua-hut-15-trieu-usd-vong-co-founder-tham-vong-ipo-san-nasdaq-vao-nam-2027-2022011821242" target="blank">
								<img src="{{ asset('img/Cafe-F.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://thesaigontimes.vn/startup-cong-nghe-goi-von-thanh-cong-15-trieu-do-la-sau-1-gio-keu-goi/" target="blank">
								<img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.marketwatch.com/press-release/phi-group-joins-vietnam-based-cmc-holdings-to-develop-digital-economy-ecosystem-with-multiple-platforms-to-serve-global-users-needs-2022-01-25">
								<img src="{{ asset('img/Market-Watch.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row g-0">
						<div class="col-6">
							<a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
								<img src="{{ asset('img/UNasdaq.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="#" target="blank">
								<img src="{{ asset('img/Bloomberg.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
								<img src="{{ asset('img/Market-Screener.png') }}" alt="">
							</a>
						</div>
						<div class="col-6">
							<a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
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
