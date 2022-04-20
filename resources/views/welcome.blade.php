@extends('layouts.app')

@section('content')
    <div id="homepage">
        <!-- Banner -->
        <section class="banner p-0">
            <div id="carouselBanner" class="carousel slide pt-0" data-bs-ride="carousel">
                <video autoplay muted loop id="myVideo">
                    <source src="{{ asset('img/banner-home.mp4') }}" type="video/mp4">
                </video>
                    <div class="content">
                        <div class="carouselContent">
                            <h1 class="title">Metaway Holdings<br><span class="fw-light">The Big Things</span></h1>
                            <h6 class="subTitle">Digital Economy Corporation</h6>
                            <a href="#" class="more">@lang('read more') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg></a>
                    </div> 
                         <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
                </div>
            </div>
        </section>

        <!-- About Us -->
        <section class="bgWhite banner-home">
            <div class="container-lg">
                <h2 class="sectionHeading centered text-uppercase p-3">{{ __('about us') }}</h2>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center pb-5">@lang ('<strong> Metaway Holdings</strong> is a global-scale digital economy corporation with the orientation to develop on the pillar fields of the digital economy society. We create platforms to fulfill multi-value ecosystems: Digital Healthcare, Digital Education, Digital Commerce, Digital Banking, Digital insurance, Digital Real Estate... All based on optimal application of the cutting-edge technologies for better serving the demand  on for global connectivity')</p>
                        <div class="row about-home">
                            <div class="col-md-4 about-home1"><p><img class="img-bgWhite" src="{{ asset('img/success-key-1.png') }}" alt=""><h6 class="title-bgWhite">@lang ('Way')</h6>@lang ('<strong> Metaway Holdings</strong> possesses the secrets of the super-rich class and the formula successfully applied  in the top corporations and even start up companies for spectacular business breakthroughs. This will be the firm launching pad to help us conquer all the peaks.') </p></div>
                            <div class="col-md-4 about-home2"><p><img class="img-bgWhite" src="{{ asset('img/brain-1.png') }}" alt=""><h6 class="title-bgWhite">@lang ('Talent')</h6>@lang ('<strong> Metaway Holdings</strong> brings together gifted people with a noble vision and mission in connecting communities and actualizing all aspirations.')</p></div>
                            <div class="col-md-4 about-home3"><p><img class="img-bgWhite" src="{{ asset('img/Meta-icon-1.png') }}" alt=""><h6 class="title-bgWhite">@lang ('Metaverse')</h6>@lang ('Formed in the Metaverse era, we are well aware of the importance of developing infrastructure and solutions to help humankind quickly access and adapt to the movements of the future.')</p></div>
                        </div>
                    </div>
                    <p class="text-center"><a href="{{ route('about') }}" class="btn btnWhite text-uppercase">@lang ('Read more') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg></a></p>
                </div>
            </div>
        </section>

        <!-- Business highlights -->
        <section class="newsHighlights bgGrey bgArrow">
            <div class="container-lg">
                <h2 class="sectionHeading centered p-3">CORPORATION HIGHLIGHTS</h2>
                <p class="text-center p-3">The rise of the technology 5.0 revolution has motivated METAWAY Holdings' tycoons and founders to invest and participate in the fields of digital finance, advanced real estate development, and international commodities. </p>
                <div class="row pt-4">
                    <div class="col-md-4">
                        <div class="card container1">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/Corporation-1.png') }}"></a>
                            <div class="card-body d-flex flex-column content">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Brand Story')</a></h5>
                                <p class="card-text flex-grow-1">@lang ('Born in an era when technology wave 5.0 is exploding globally,  Metaway Holdings is the convergence of pioneering leaders with outstanding vision and wisdom, unlimited imagination, a sky of creativity, and sustainable development.')</p>
                                <div class="text-center"><a href="{{ route('about') }}" class="btn btnArrow">@lang ('READ MORE')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right mt-2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card container1">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/Corporation-2.png') }}"></a>
                            <div class="card-body d-flex flex-column content">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Investment Sector')</a></h5>
                                <p class="card-text flex-grow-1">@lang ('<strong>Metaway Holdings</strong> focuses on investing in leading sectors and industries with high growth potential in the future, which are the pillars of the digital economy including: healthcare, technology, real estate and finance.')</p>
                                <div class="text-center"><a href="{{ route('about') }}" class="btn btnArrow">@lang ('READ MORE')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right mt-2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card container1">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/Corporation-3.png') }}"></a>
                            <div class="card-body d-flex flex-column content">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Ecosystem')</a></h5>
                                <p class="card-text flex-grow-1">@lang ("<strong>The Metaway Holdings</strong> ecosystem is investing in products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market.")</p>
                                <div class="text-center"><a href="{{ route('about') }}" class="btn btnArrow">@lang ('READ MORE')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right mt-2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our parnters -->
        <section class="bgDark partners">
            <div class="container-lg">
                <h2 class="sectionHeading centered">OUR PARTNERS</h2>
                <p class="text-center p-3">We prefer to work with companies who have a common vision and can come along with our business ecosystem and corporate culture value system. Our partners come from the multi-diversification of internal and external resources.</p>
                <div class="owl-carousel ">
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-custom col-sm-6">
                                <a href="http://phiglobal.com/" target="blank">
                                    <img src="{{ asset('img/Vietnam Post.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="https://vnpt.com.vn/" target="blank">
                                    <img src="{{ asset('img/Viettin Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="https://www.linkedin.com/company/acentus-capital" target="blank">
                                    <img src="{{ asset('img/Acentus Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Petroland.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VVC.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VNPT.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom col-sm-6">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Nikko AM.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-custom">
                                <a href="http://phiglobal.com/" target="blank">
                                    <img src="{{ asset('img/Vietnam Post.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="https://vnpt.com.vn/" target="blank">
                                    <img src="{{ asset('img/Viettin Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="https://www.linkedin.com/company/acentus-capital" target="blank">
                                    <img src="{{ asset('img/Acentus Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Petroland.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VVC.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VNPT.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Nikko AM.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-custom">
                                <a href="http://phiglobal.com/" target="blank">
                                    <img src="{{ asset('img/Vietnam Post.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="https://vnpt.com.vn/" target="blank">
                                    <img src="{{ asset('img/Viettin Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="https://www.linkedin.com/company/acentus-capital" target="blank">
                                    <img src="{{ asset('img/Acentus Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Petroland.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VVC.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VNPT.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Nikko AM.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-custom">
                                <a href="http://phiglobal.com/" target="blank">
                                    <img src="{{ asset('img/Vietnam Post.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="https://vnpt.com.vn/" target="blank">
                                    <img src="{{ asset('img/Viettin Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="https://www.linkedin.com/company/acentus-capital" target="blank">
                                    <img src="{{ asset('img/Acentus Capital.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Petroland.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VVC.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/VNPT.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Phi Group.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-custom">
                                <a href="http://www.petroland.com.vn/" target="blank">
                                    <img src="{{ asset('img/Nikko AM.png') }}" alt="">
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
                        <div class="row g-0 justify-content-center">
                            <div class="col-auto col-sm-6">
                                <a href="https://ca.finance.yahoo.com/news/phi-group-joins-vietnam-based-143000193.html" target="blank">
                                    <img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Viettimes.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
                                    <img src="{{ asset('img/UNasdaq.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://www.marketwatch.com/press-release/phi-group-joins-vietnam-based-cmc-holdings-to-develop-digital-economy-ecosystem-with-multiple-platforms-to-serve-global-users-needs-2022-01-25" target="blank">
                                    <img src="{{ asset('img/Market-Watch.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
                                    <img src="{{ asset('img/Market-Screener.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://www.globenewswire.com/news-release/2022/01/27/2374480/0/en/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-up-developments-aiming-for-US-300-billion-IPO-target-by-2027.html" target="blank">
                                    <img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/doanh-nhan-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Cafe-F.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-sm-6">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Bloomberg.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-auto">
                                <a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
                                    <img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#" target="blank">
                                    <img src="{{ asset('img/Viettimes.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
                                    <img src="{{ asset('img/UNasdaq.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Market-Watch.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Market-Screener.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/doanh-nhan-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Cafe-F.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Bloomberg.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-auto">
                                <a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
                                    <img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#" target="blank">
                                    <img src="{{ asset('img/Viettimes.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
                                    <img src="{{ asset('img/UNasdaq.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Market-Watch.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Market-Screener.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/doanh-nhan-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Cafe-F.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Bloomberg.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row g-0 justify-content-center">
                            <div class="col-auto col-md-3">
                                <a href="https://www.nasdaq.com/press-release/corrections-startup-cmc-holdings-successfully-raised-us%241.5-million-in-co-founder" target="blank">
                                    <img src="{{ asset('img/Yahoo-Finance.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="#" target="blank">
                                    <img src="{{ asset('img/Viettimes.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://www.marketscreener.com/quote/stock/PHI-GROUP-INC-120787446/news/Corrections-Startup-CMC-Holdings-Successfully-Raised-US-1-5-million-in-Co-founder-Round-to-speed-u-37661739/" target="blank">
                                    <img src="{{ asset('img/UNasdaq.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Thoi-bao-kinh-te-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Market-Watch.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Market-Screener.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Global-PR-Newswire.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/doanh-nhan-sai-gon.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Cafe-F.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-auto col-md-3">
                                <a href="https://viettimes.vn/mot-startup-goi-von-thanh-cong-1-5-trieu-usd-trong-vong-dau-tien-post153780.html" target="blank">
                                    <img src="{{ asset('img/Bloomberg.png') }}" alt="">
                                </a>
                            </div>
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
