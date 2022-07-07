@extends('layouts.app')

@section('meta-tag')
    <title>Metaway Holdings -The Big Things - Tập đoàn kinh tế số Việt Nam</title>
    <meta name="description" content="Metaway Holdings là tập đoàn kinh tế số hoạt động trên phạm vi toàn cầu, định hướng phát triển các lĩnh vực trụ cột của nền kinh tế, hướng tới xã hội số." />
    <meta name="keywords" content="kinh tế số, kinhteso, kinh tế số việt nam, kinhtesovietnam, metawayholdings" />
@endsection

@section('content')
<div id="homepage">
    <!-- Banner -->
    <section class="banner position-relative">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('img/bg-home-meta.mp4') }}" type="video/mp4">
        </video>
        <div class="container-xxl">
            <h1 class="title text-white">METAWAY HOLDINGS</h1>
            <h2 class="slogan text-white">@lang ('The Big Things')</h2>
            <p class="subTitle mt-3">@lang ('Digital Economy Corporation')</p>
            <a href="{{ route('about') }}" class="btn btn-grey-outline text-uppercase">@lang('read more')</a>
        </div>
    </section>

    <!-- About Us -->
    <section class="bgGrey overviewElement text-center">
        <div class="container-xxl">
            <h2 class="sectionHeading centered text-uppercase">{{ __('about us') }}</h2>
            <p class="pb-5"><strong> Metaway Holdings</strong> @lang ('is a global-scale digital economy corporation with the orientation to develop on the pillar fields of the digital economy society. We create platforms to fulfill multi-value ecosystems: Digital Healthcare, Digital Education, Digital Commerce, Digital Banking, Digital insurance, Digital Real Estate... All based on optimal application of the cutting-edge technologies for better serving the demand on for global connectivity')</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{ asset('img/way1.svg') }}" alt="">
                        <h6 class="title">@lang ('Way')</h6>
                        <p class="text-justify"><strong> Metaway Holdings</strong> @lang ('possesses the secrets of the super-rich class and the formula successfully applied in the top corporations and even start up companies for spectacular business breakthroughs. This will be the firm launching pad to help us conquer all the peaks.')</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{ asset('img/talent1.svg') }}" alt="">
                        <h6 class="title">@lang ('Talent')</h6>
                        <p class="text-justify"><strong> Metaway Holdings</strong> @lang ('brings together gifted people with a noble vision and mission in connecting communities and actualizing all aspirations.')</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{ asset('img/metaverse1.svg') }}" alt="">
                        <h6 class="title">@lang ('Metaverse')</h6>
                        <p class="text-justify">@lang ('Formed in the Metaverse era, we are well aware of the importance of developing infrastructure and solutions to help humankind quickly access and adapt to the movements of the future.')</p>
                    </div>
                </div>
            </div>
            <p class="text-center mt-4">
                <a href="{{ route('about') }}" class="btn btn-grey-outline text-uppercase">@lang ('Read more')</a>
            </p>
        </div>
    </section>

    <!-- Business highlights -->
    <section class="corporation bgWhite">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('CORPORATION HIGHLIGHTS')</h2>
            <p class="text-center">@lang ("The rise of the technology 5.0 revolution has motivated METAWAY Holdings' tycoons and founders to invest and participate in the fields of digital finance, advanced real estate development, and international commodities.") </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="item d-flex flex-column">
                        <div class="imgWrap">
                            <img src="{{ asset('img/bg-brand.jpg') }}" alt="">
                        </div>
                        <h3 class="title mb-3"><a href="#">@lang ('Brand Story')</a></h3>
                        <div class="desc flex-grow-1">@lang ('Born in an era when technology wave 5.0 is exploding globally, Metaway Holdings is the convergence of pioneering leaders with outstanding vision and wisdom, unlimited imagination, a sky of creativity, and sustainable development.')</div>
                        <div class="text-center">
                            <a href="{{ route('about') }}" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item d-flex flex-column">
                        <div class="imgWrap">
                            <img src="{{ asset('img/img-investment.jpg') }}" alt="">
                        </div>
                        <h3 class="title mb-3"><a href="#">@lang ('Investment Sector')</a></h3>
                        <div class="desc flex-grow-1"><strong>Metaway Holdings</strong> @lang ('focuses on investing in leading sectors and industries with high growth potential in the future, which are the pillars of the digital economy including: healthcare, technology, real estate and finance.')</div>
                        <div class="text-center">
                            <a href="{{ route('about') }}" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item d-flex flex-column">
                        <div class="imgWrap">
                            <img src="{{ asset('img/img-ecosystem.jpg') }}" alt="">
                        </div>
                        <h3 class="title mb-3"><a href="#">@lang ('Ecosystem')</a></h3>
                        <div class="desc flex-grow-1"><strong>@lang ('The Metaway Holdings')</strong> @lang ("ecosystem is investing in products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market.")</div>
                        <div class="text-center">
                            <a href="{{ route('about') }}" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our parnters -->
    <section class="bgDark partners">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('OUR PARTNERS')</h2>
            <p class="text-center">@lang ('We prefer to work with companies who have a common vision and can come along with our business ecosystem and corporate culture value system. Our partners come from the multi-diversification of internal and external resources.')</p>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="imgWrap">
                        <a href="http://www.vnpost.vn/" target="_blank">
                            <img src="{{ asset('img/Vietnam Post.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="http://www.vietinbankcapital.vn/vi-vn/" target="blank">
                            <img src="{{ asset('img/Viettin Capital.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="http://www.petroland.com.vn/" target="blank">
                            <img src="{{ asset('img/Petroland.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://www.linkedin.com/company/acentus-capital" target="blank">
                            <img src="{{ asset('img/Acentus Capital.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://vcci.com.vn/" target="blank">
                            <img src="{{ asset('img/VVC.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://vnpt.com.vn/" target="blank">
                            <img src="{{ asset('img/VNPT.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://en.nikkoam.com/" target="blank">
                            <img src="{{ asset('img/Nikko AM.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://corex.vn/" target="blank">
                            <img src="{{ asset('img/corex-logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="http://phiglobal.com/" target="blank">
                            <img src="{{ asset('img/Phi Group.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <!-- <a href="https://pencil.vn/" target="blank">
                            <img src="{{ asset('img/pencil-logo.png') }}" alt="">
                        </a> -->
                        <a href="http://www.petroland.com.vn/" target="blank">
                            <img src="{{ asset('img/Petroland.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- As seen on -->
    <section class="bgGrey asSeenOn">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('AS SEEN ON')</h2>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://ca.finance.yahoo.com/news/phi-group-joins-vietnam-based-143000193.html" target="blank">
                            <img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                            <img src="{{ asset('img/Viettimes.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
                            <img src="{{ asset('img/UNasdaq.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://thesaigontimes.vn/startup-cong-nghe-goi-von-thanh-cong-15-trieu-do-la-sau-1-gio-keu-goi/" target="blank">
                            <img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://www.marketwatch.com/press-release/phi-group-joins-vietnam-based-cmc-holdings-to-develop-digital-economy-ecosystem-with-multiple-platforms-to-serve-global-users-needs-2022-01-25" target="blank">
                            <img src="{{ asset('img/Market-Watch.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
                            <img src="{{ asset('img/Market-Screener.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://www.globenewswire.com/news-release/2022/01/27/2374480/0/en/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-up-developments-aiming-for-US-300-billion-IPO-target-by-2027.html" target="blank">
                            <img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="https://doanhnhansaigon.vn/khoi-nghiep/thu-hut-1-5-trieu-usd-vong-co-founder-chi-sau-mot-gio-keu-goi-1109107.html" target="blank">
                            <img src="{{ asset('img/Doanh-Nhan-Sai-Gon.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgWrap">
                        <a href="https://cafef.vn/mot-startup-phat-trien-nen-kinh-te-so-vua-hut-15-trieu-usd-vong-co-founder-tham-vong-ipo-san-nasdaq-vao-nam-2027-2022011821242" target="blank">
                            <img src="{{ asset('img/Cafe-F.png') }}" alt="">
                        </a>
                    </div>
                    <div class="imgWrap">
                        <a href="#" target="blank">
                            <img src="{{ asset('img/Bloomberg.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
</script>
@endsection
