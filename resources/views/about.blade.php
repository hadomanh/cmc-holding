@extends('layouts.app')

@section('meta-tag')
    <title>Metaway Holdings xoay quanh các trụ cột hình thành nền kinh tế số</title>
    <meta name="description" content="Trở thành tập đoàn kinh tế số hàng đầu thế giới bằng sức mạnh của sự hội tụ trí tuệ, tài chính và công nghệ, đóng góp vào sự thịnh vượng chung của kinh tế toàn cầu." />
    <meta name="keywords" content="tap đoàn kinh tế số, tapdoankinhteso" />
@endsection

@section('content')
<div id="aboutPage">

    <!-- Banner -->
    <section class="banner">
        <div class="container-xxl">
            <h1 class="mb-0 text-white">@lang ('ABOUT US')</h1>
        </div>
    </section>

    <!-- overview -->
    <section class="bgGrey overviewElement">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('overview')</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{ asset('img/icon-building.svg') }}" alt="">
                        <h6 class="title">@lang ('Company Background')</h6>
                        <p class="text-justify">@lang ('Metaway Holdings is headquartered in the United States with numerous branch offices around the world. The company was founded in the next wave of digital technologies with artificial intelligence, blockchain, the Internet of things, and Cloud computing platforms and applications . These invincible waves will convey great potential and promote the instantaneous development of key economic sectors. Our major ambition is to connect together a community of entrepreneurs, firms, and investors who all share the same desire of giving a legacy for future genera tions.')</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{ asset('img/icon-resource.svg') }}" alt="">
                        <h6 class="title">@lang ('Resource')</h6>
                        <p class="text-justify">@lang ("Possesses influential resources in human, finance, and technology. founders and management team have extensive expertise and knowledge in strategy, corporate governance, investing, and restructuring. We capture the world's top successful business formulae. Thanks to the creative ideas based on understanding and mastering the latest platform technologies, We have earned the attention of major investment funds and reputable financial organizations.")</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{ asset('img/icon-aspiration.svg') }}" alt="">
                        <h6 class="title">@lang ('Aspiration')</h6>
                        <p class="text-justify">Metaway Holdings @lang ('desires to integrate human intelligence, artificial intelligence, and business intelligence to jointly generate prosperous values for worldwide inhabitants and progress to become a leading digital economy organization in the world.')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bgWhite ourMission">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="imgWrap">
                            <img src="{{ asset('img/our-mission.jpg') }}" alt="">
                        </div>
                        <h2 class="sectionHeading centered fs-5 mb-3">@lang ('OUR MISSION')</h2>
                        <div class="desc">
                            <ul>
                                <li>@lang ('Utilizing the power of all social resources to build, develop and accompany the global digital economy era.')</li>
                                <li>@lang ('Creating borderless connectivity in all fields of the digital economy.')</li>
                                <li>@lang ('Creating a happier and more prosperous life for the worldwide community')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="imgWrap">
                            <img src="{{ asset('img/our-vision.jpg') }}" alt="">
                        </div>
                        <h2 class="sectionHeading centered fs-5 mb-3">@lang ('OUR VISION')</h2>
                        <div class="desc">
                            <ul>
                                <li>@lang ('Building a community of entrepreneurs, businesses, investors, and individuals with unified intelligence, companionship and sustainable development.')</li>
                                <li>@lang ("Becoming the world's leading digital economy corporation by the convergence of intelligence, finance, technology. Thus, we contribute to the common prosperity of the global economy.")</li>
                                <li> @lang ('Aspiring to IPO on the international exchange platform in 2027.')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="imgWrap">
                            <img src="{{ asset('img/our-value.jpg') }}" alt="">
                        </div>
                        <h2 class="sectionHeading centered fs-5 mb-3">@lang ('OUR CORE VALUES')</h2>
                        <div class="desc">
                            <div class="d-flex align-items-start">
                                @if (Session::get('app_locale') == 'en')
                                    <div class="number">01</div>    
                                @endif
                                <div>
                                    <h6>@lang ('Think Big')</h6>
                                    <ul>
                                        <li>@lang ('Act like a founder')</li>
                                        <li>@lang ('Keep the discipline and high standards')</li>
                                        <li class="boder-ourcore">@lang ('Respect the diversity')</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                @if (Session::get('app_locale') == 'en')
                                    <div class="number">02</div>    
                                @endif
                                <div>
                                    <h6>@lang ('Spirit of Dedication')</h6>
                                    <ul>
                                        <li>@lang ('Attaching Affection')</li>
                                        <li>@lang ('Sharing the responsibility')</li>
                                        <li class="boder-ourcore">@lang ('Giving is forever lasted')</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                @if (Session::get('app_locale') == 'en')
                                    <div class="number">03</div>    
                                @endif
                                <div>
                                    <h6 class="">@lang ('Transparency, safety')</h6>
                                    <ul>
                                        <li>@lang ('Oriented for solution')</li>
                                        <li>@lang ('Deep Expertise')</li>
                                        <li class="boder-ourcore">@lang ('Leaving a legacy')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="investmentSector bgGrey">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('INVESTMENT SECTOR')</h2>
            <p class="text-center mb-4">@lang ('The business of') <strong>METAWAY Holdings</strong> @lang ('focuses on leading and high-class industries including specialized healthcare, super-luxury real estate, technology-related categories, especially financial technology, and blockchain-driven.')</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="item d-flex flex-column">
                        <a href="#" class="imgWrap">
                            <img src="{{ asset('img/img-8.jpg') }}">
                        </a>
                        <h5 class="titleUnderline fs-5 mb-3"><a href="#">@lang ('Technology field')</a></h5>
                        <div class="desc flex-grow-1">
                            <strong>Metaway Tech</strong> @lang ('explores, expands, and delivers crucial technology solutions in the pillars of the digital economy. Our goal is to improve the capacity and overall development to meet global user needs in the digital economy age.')
                        </div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item d-flex flex-column">
                        <a href="http://metawaymed.com" class="imgWrap">
                            <img src="{{ asset('img/img-9.jpg') }}">
                        </a>
                        <h5 class="titleUnderline fs-5 mb-3"><a href="#">@lang ('Healthcare field')</a></h5>
                        <div class="desc flex-grow-1">
                            <strong>Metaway Med</strong> @lang ("orients to establish an international standard clinic and hospital system specializing in chiropractic. Blockchain technology will be applied to digital medical records for best tracked Metaway Med builds a technology platform to support medical examination, diagnosis, calibration, and treatment for patients, which will help patients save huge amounts of unnecessary costs. Metaway Med owns a world-leading professors and specialists team who are dedicated to caring for patients' health.")
                        </div>
                        <div class="text-center mt-4">
                            <a href="http://metawaymed.com" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item d-flex flex-column">
                        <a href="http://metawayland.com" class="imgWrap">
                            <img src="{{ asset('img/img-10.jpg') }}">
                        </a>
                        <h5 class="titleUnderline fs-5 mb-3"><a href="#">@lang ('Real Estate field')</a></h5>
                        <div class="desc flex-grow-1">
                            <strong>Metaway Land</strong> @lang ('is an investor and developer of super-luxury class real estate and smart cities. We create the differences for real estates, set new standards for personal branding and premium enjoyment exclusively for elite owners. We apply new technologies comprehensively in the field of real estate. On a global scale, myriad investment opportunities and new forms of ownership will be opened up for Investors regardless of legal and geographical barriers.')
                        </div>
                        <div class="text-center mt-4">
                            <a href="http://metawayland.com" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item d-flex flex-column">
                        <a href="http://metawayfinance.com" class="imgWrap">
                            <img src="{{ asset('img/img-11.jpg') }}">
                        </a>
                        <h5 class="titleUnderline fs-5 mb-3"><a href="#">@lang ('Finance field')</a></h5>
                        <div class="desc flex-grow-1">
                            <strong>Metaway Finance</strong> @lang ("applies new technologies in creating digital platforms and solutions for Banking, Insurance, and Securities fields. Brand new investment opportunities and exclusive trading models will be opened up for global users We believe in the future you are the only one who will take control of your own financial life. FWe empower you to learn, plan, and actualize your financial prosperity dreams. You should say bye to all the confusing myths you've heard about investing")
                        </div>
                        <div class="text-center mt-4">
                            <a href="http://metawayfinance.com" class="btn btn-grey-outline">@lang ('READ MORE')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- eco system -->
    <section class="ecoSystem">
        <div class="container-xxl">
            <h2 class="sectionHeading">@lang ('ECOSYSTEM')</h2>
            <strong>@lang ('The Metaway Holdings')</strong> @lang ("ecosystem is investing in products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market. We address existing markets and industries' issues with the latest smart, transparent technology solutions.")
        </div>
    </section>

    <!-- map -->
    <section class="bgWhite map" id="holdingsmembers">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('HOLDINGS MEMBERS')</h2>
            <p class="text-center">@lang ("Metaway Holdings operates under the model of 'Holdings in holdings'. We build separate ecosystems while still focusing on Metaway Holding's broad goal of globalization, digitization, and innovation for superior social values.")</p>
            <div class="map">
                <div class="memberLocation style-1 cannada">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>Canada</p>
                </div>
                <div class="memberLocation style-2 usa">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>USA</p>
                </div>
                <div class="memberLocation style-1 dubai">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>Dubai</p>
                </div>
                <div class="memberLocation style-2 south">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>SouthAfrica</p>
                </div>
                <div class="memberLocation style-1 hongkong">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>Hongkong</p>
                </div>
                <div class="memberLocation style-2 vietnam">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>Vietnam</p>
                </div>
                <div class="memberLocation style-1 singapore">
                    <img src="{{ asset('img/icon-metaway.png') }}" alt="">
                    <p>Singapore</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgGrey teamMembers text-center">
        <div class="container-xxl">
            <h2 class="sectionHeading centered">@lang ('OUR EXECUTIVE TEAM')</h2>
            <p class="text-center"><strong>Metaway Holdings</strong> @lang ('owns executive resources who have many years of experience in many fields: restructuring, M&A, finance, investment and corporate governance. In addition, we also have senior advisors from Phi Group (USA) with a strong and reputable global partner system.')</p>
            <div class="listMembers">
                <h5 class="sectionHeading centered fs-4">@lang ('BOARD OF MANAGEMENT')</h5>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Tran-Nam-Trung.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Tran Nam Chung')</h4>
                        <h5 class="position">@lang ('Chairman')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Henre-D.Fahman.png') }}" alt="">
                        </div>
                        <h4 class="name">Henry D.Fahman</h4>
                        <h5 class="position">@lang ('Vice Chairman')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/ngo-minh-thang1.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('NGO MINH THANG')</h4>
                        <h5 class="position">@lang ('CEO')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div> -->
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Pham-Anh-Tuan.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Pham Anh Tuan')</h4>
                        <h5 class="position">@lang ('Deputy CEO')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Anna-Nguyen.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Anna Nguyen')</h4>
                        <h5 class="position">@lang ('Deputy CEO')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listMembers advisors">
                <h5 class="sectionHeading centered fs-4">@lang ('ADVISORS')</h5>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Tran-Quang-Trung.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Tran Quang Trung')</h4>
                        <h5 class="position">@lang ('Growth Advisor')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Steve-Truong.png') }}" alt="">
                        </div>
                        <h4 class="name">Steve Truong</h4>
                        <h5 class="position">@lang ('Managing Director PHI Group Advisor')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Frank-N.Hawkins.png') }}" alt="">
                        </div>
                        <h4 class="name">Frank N.Hawkins</h4>
                        <h5 class="position">@lang ('Finance Advisor')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Michael-Bennett.png') }}" alt="">
                        </div>
                        <h4 class="name">Michael Bennett</h4>
                        <h5 class="position">@lang ('Investment & Partnership Advisor')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Tam-T.Bui.png') }}" alt="">
                        </div>
                        <h4 class="name">Tam T.Bui</h4>
                        <h5 class="position">@lang ('COO PHI Group Operation Advisor')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listMembers">
                <h5 class="sectionHeading centered fs-4">@lang ('CORE TEAM')</h5>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Andy-Vu.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Andy Vu')</h4>
                        <h5 class="position">@lang ('CMO')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/ma-chi-thanh.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Ma Chi Thanh')</h4>
                        <h5 class="position">@lang ('Creative Director')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/tran-duc-minh.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Tran Duc Minh')</h4>
                        <h5 class="position">@lang ('Training Director')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Le-Van-Duong.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Le Van Duong')</h4>
                        <h5 class="position">@lang ('Legal Director')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listMembers">
                <h5 class="sectionHeading centered fs-4">@lang ('TECHNICAL STEERING COMMITEE')</h5>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Bui-Dinh-Ngoc.png') }}" alt="">
                        </div>
                        <h4 class="name">@lang ('Bui Dinh Ngoc')</h4>
                        <h5 class="position">@lang ('CTO')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Guiko-K.png') }}" alt="">
                        </div>
                        <h4 class="name">Guiko K</h4>
                        <h5 class="position">@lang ('Technology Advisor')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="avatar">
                            <img src="{{ asset('img/Francesco.png') }}" alt="">
                        </div>
                        <h4 class="name">Francesco</h4>
                        <h5 class="position">@lang ('CTO')</h5>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
