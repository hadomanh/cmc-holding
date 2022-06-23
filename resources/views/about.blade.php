@extends('layouts.app')

@section('content')
<div id="aboutPage">

    <!-- Banner -->
    <section class="banner p-0">
        <div id="carouselBanner" class="carousel slide pt-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active container2">
                    <img src="{{ asset('img/Banner-about.png') }}" alt="" class="w-100">
                    <div class="content">
                        <h1>@lang ('ABOUT US')</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- overview -->
    <section class="bgWhite overview">
        <div class="container-lg">
            <div class="g-0 item" id="overview">
                <h2 class="sectionHeading text-uppercase"><span>@lang ('overview')</span></h2>
                <div class="col-md-12">
                    <img src="{{ asset('img/bg-degital-economy.png') }}" alt="" class="w-100">
                </div>
                <div class="row text-overview">
                    <div class="col-md-4 p-4">
                        <h4><img src="{{ asset('img/Overview- Company.png') }}" alt=""> <span>@lang ('Company Background')</span></h4>
                        <p>Metaway Holdings @lang ('is headquartered in the') @lang ('United States') @lang ('with numerous branch offices around the world. The company was founded in the next wave of digital technologies with artificial intelligence, blockchain, the Internet of things, and Cloud computing platforms and applications . These invincible waves will convey great potential and promote the instantaneous development of key economic sectors. Our major ambition is to connect together a community of entrepreneurs, firms, and investors who all share the same desire of giving a legacy for future genera tions.')</p>

                    </div>
                    <div class="col-md-4 p-4">
                        <h4><img src="{{ asset('img/Overview-Resource.png') }}" alt=""> <span>@lang ('Resource')</span></h4>
                        <p>@lang ('Possesses influential resources in human, finance, and technology.') @lang ("founders and management team have extensive expertise and knowledge in strategy, corporate governance, investing, and restructuring. We capture the world's top successful business formulae. Thanks to the creative ideas based on understanding and mastering the latest platform technologies, We have earned the attention of major investment funds and reputable financial organizations.")</p>
                    </div>
                    <div class="col-md-4 p-4">
                        <h4><img src="{{ asset('img/Overview-Aspiration.png') }}" alt=""> <span>@lang ('Aspiration')</span></h4>
                        <p>Metaway Holdings @lang ('desires to integrate human intelligence, artificial intelligence, and business intelligence to jointly generate prosperous values for worldwide inhabitants and progress to become a leading digital economy organization in the world.')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourmission">
        <div class="container-lg">
            <div class="row g-0 item" id="ourmission">
                <h2 class="sectionHeading text-uppercase"><span>@lang ('OUR MISSION')</span></h2>
                <div class="row">
                    <div class="col-md-6 order-md-1 order-2 d-flex align-items-center">
                        <div class="desc text-our-mission">
                            <ul>
                                <li>@lang ('Utilizing the power of all social resources to build, develop and accompany the global digital economy era.')</li>
                                <li>@lang ('Creating borderless connectivity in all fields of the digital economy.')</li>
                                <li>@lang ('Creating a happier and more prosperous life for the worldwide community')</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="{{ asset('img/meta-about.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bgWhite ourvision">
        <div class="container-lg">
            <div class="row g-0 item" id="ourvision">
                <h2 class="sectionHeading text-uppercase"><span>@lang ('OUR VISION')</span></h2>
                <div class="col-md-6">
                    <img src="{{ asset('img/blockcahin-2.png') }}" alt="" class="">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="desc text-our-mission">
                        <ul>
                            <li>@lang ('Building a community of entrepreneurs, businesses, investors, and individuals with unified intelligence, companionship and sustainable development.')</li>
                            <li>@lang ("Becoming the world's leading digital economy corporation by the convergence of intelligence, finance, technology. Thus, we contribute to the common prosperity of the global economy.")</li>
                            <li> @lang ('Aspiring to IPO on the international exchange platform in 2027.')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bgWhite ourcorevalues">
        <div class="container-lg">
            <div class="row g-0 item" id="ourcorevalues">
                <h2 class="sectionHeading text-uppercase"><span>@lang ('OUR CORE VALUES')</span></h2>

                <div class="col-md-12 order-md-1">
                    <div class="desc row justify-content-center">
                        <div class="col-lg-3 col-md-4 our-core">
                            <p>1</p>
                            <h5>@lang ('Think Big')</h5>
                            <ul class="ms-2">
                                <li>@lang ('Act like a founder')</li>
                                <li>@lang ('Keep the discipline and high standards')</li>
                                <li class="boder-ourcore">@lang ('Respect the diversity')</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-4 our-core">
                            <p>2</p>
                            <h5>@lang ('Spirit of Dedication')</h5>
                            <ul class="ms-2">
                                <li>@lang ('Attaching Affection')</li>
                                <li>@lang ('Sharing the responsibility')</li>
                                <li class="boder-ourcore">@lang ('Giving is forever lasted')</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-4 our-core">
                            <p>3</p>
                            <h5 class="">@lang ('Transparency, safety')</h5>
                            <ul class="ms-2">
                                <li>@lang ('Oriented for solution')</li>
                                <li>@lang ('Deep Expertise')</li>
                                <li class="boder-ourcore">@lang ('Leaving a legacy')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Business highlights -->
    <section class="newsHighlights bgGrey bgArrow" id="businesssectors">
        <div class="container-lg">
            <h2 class="sectionHeading centered"><strong>@lang ('INVESTMENT SECTOR')</strong></h2>
            <p class="text-center mb-4">@lang ('The business of') <strong>METAWAY Holdings</strong> @lang ('focuses on leading and high-class industries including specialized healthcare, super-luxury real estate, technology-related categories, especially financial technology, and blockchain-driven.')</p>
            <div class="row">
                <div class="col-md-6 item">
                    <div class="card" style="height: 100%;">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-8.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Technology field')</a></h5>
                            <p class="card-text flex-grow-1"><strong>Metaway Tech</strong> @lang ('explores, expands, and delivers crucial technology solutions in the pillars of the digital economy. Our goal is to improve the capacity and overall development to meet global user needs in the digital economy age.')</p>
                            <div class="text-end"><a target="_blank" href="http://metawaytech.com/" class="btn btn-btnWhite">@lang ('READ MORE') <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item">
                    <div class="card" style="height: 100%;">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-9.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Healthcare field')</a></h5>
                            <p class="card-text flex-grow-1"><strong>Metaway Med</strong> @lang ("orients to establish an international standard clinic and hospital system specializing in chiropractic. Blockchain technology will be applied to digital medical records for best tracked Metaway Med builds a technology platform to support medical examination, diagnosis, calibration, and treatment for patients, which will help patients save huge amounts of unnecessary costs. Metaway Med owns a world-leading professors and specialists team who are dedicated to caring for patients' health.")</p>
                            <div class="text-end"><a target="_blank" href="http://metawaymed.com/" class="btn btn-btnWhite">@lang ('READ MORE') <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item">
                    <div class="card" style="height: 100%;">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-10.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Real Estate field')</a></h5>
                            <p class="card-text flex-grow-1"><strong>Metaway Land</strong> @lang ('is an investor and developer of super-luxury class real estate and smart cities. We create the differences for real estates, set new standards for personal branding and premium enjoyment exclusively for elite owners. We apply new technologies comprehensively in the field of real estate. On a global scale, myriad investment opportunities and new forms of ownership will be opened up for Investors regardless of legal and geographical barriers.')</p>
                            <div class="text-end"><a target="_blank" href="http://metawayland.com/" class="btn  btn-btnWhite">@lang ('READ MORE') <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item">
                    <div class="card" style="height: 100%;">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-11.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Finance field')</a></h5>
                            <p class="card-text flex-grow-1"><strong>Metaway Finance</strong> @lang ("applies new technologies in creating digital platforms and solutions for Banking, Insurance, and Securities fields. Brand new investment opportunities and exclusive trading models will be opened up for global users We believe in the future you are the only one who will take control of your own financial life. FWe empower you to learn, plan, and actualize your financial prosperity dreams. You should say bye to all the confusing myths you've heard about investing")</p>
                            <div class="text-end"><a target="_blank" href="http://metawayfinance.com/" class="btn  btn-btnWhite">@lang ('READ MORE') <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- eco system -->
    <section class="text-white" id="ecosystem">
        <div class="container-lg">
            <div class="content">
                <h2 class="text-light">@lang ('ECOSYSTEM')</h2>
                <p><strong>The Metaway Holdings</strong> @lang ("ecosystem is investing in products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market. We address existing markets and industries' issues with the latest smart, transparent technology solutions.") </p>
            </div>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgWhite " id="holdingsmembers">
        <div class="container-lg">
            <h2 class="sectionHeading centered">@lang ('HOLDINGS MEMBERS')</h2>
            <p class="text-center">@lang ("Metaway Holdings operates under the model of “Holdings in holdings”. We build separate ecosystems while still focusing on Metaway Holding's broad goal of globalization, digitization, and innovation for superior social values.")</p>

            <!-- <p><img src="http://127.0.0.1:8000/img/Map1.png" alt=""></p> -->
            <p>
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
            </p>
        </div>
    </section>
    <!-- Our members -->
    <section class="bgGrey team" id="executive">
        <div class="container-lg">
            <h2 class="sectionHeading centered">@lang ('OUR EXECUTIVE TEAM')</h2>
            <p class="text-center"><strong>Metaway Holdings</strong> @lang ('owns executive resources who have many years of experience in many fields: restructuring, M&A, finance, investment and corporate governance. In addition, we also have senior advisors from Phi Group (USA) with a strong and reputable global partner system.')</p>
            <div class="listTeam">
                <div class="col-md-12">
                    <h4 class="sectionHeading text-uppercase1 mt-4"><span>@lang ('BOARD OF MANAGEMENT')</span></h4>
                </div>
                <div class="row g-0 d-flex justify-content-center text-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Tran-Nam-Trung.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">TRAN NAM CHUNG</h4>
                            <div class="position flex-grow-1">@lang ('Chairman')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Henre-D.Fahman.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">HENRY D.FAHMAN</h4>
                            <div class="position flex-grow-1">@lang ('Vice Chairman')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/ngo-minh-thang1.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">NGO MINH THANG</h4>
                            <div class="position flex-grow-1">@lang ('CEO')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Pham-Anh-Tuan.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">PHAM ANH TUAN </h4>
                            <div class="position flex-grow-1">@lang ('Deputy CEO')</div>
                            <div class="social">
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Anna-Nguyen.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">ANNA NGUYEN</h4>
                            <div class="position flex-grow-1">@lang ('Deputy CEO')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listTeam ">
                <div class="col-md-12">
                    <h4 class="sectionHeading text-uppercase1 mt-4"><span>@lang ('ADVISORS')</span></h4>
                </div>
                <div class="row g-0 d-flex justify-content-center text-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Tran-Quang-Trung.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">TRAN QUANG TRUNG</h4>
                            <div class="position flex-grow-1">@lang ('Growth Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Steve-Truong.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">STEVE TRUONG</h4>
                            <div class="position flex-grow-1">@lang ('Managing Director PHI') <br> @lang ('Group Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Frank-N.Hawkins.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">FRANK N.HAWKINS</h4>
                            <div class="position flex-grow-1">@lang ('Finance Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Michael-Bennett.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">MICHAEL BENNETT</h4>
                            <div class="position flex-grow-1">@lang ('Investment &<br> Partnership Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Tam-T.Bui.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">TAM T.BUI</h4>
                            <div class="position flex-grow-1">@lang ('COO PHI Group Operation Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Guiko-K.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">GUIKO K</h4>
                            <div class="position flex-grow-1">@lang ('Technology Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listTeam">
                <div class="col-md-12">
                    <h4 class="sectionHeading text-uppercase1 mt-4"><span>@lang ('CORE TEAM')</span></h4>
                </div>
                <div class="row g-0 d-flex justify-content-center text-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Andy-Vu.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">ANDY VU</h4>
                            <div class="position flex-grow-1">@lang ('CMO')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/ma-chi-thanh.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">MA CHI THANH </h4>
                            <div class="position flex-grow-1">Creative Director</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/tran-duc-minh.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">TRAN DUC MINH</h4>
                            <div class="position flex-grow-1">@lang ('Training Director')</div>
                            <div class="social">
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Le-Van-Duong.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <div class="des">
                                <h4 class="name">LE VAN DUONG</h4>
                                <div class="position flex-grow-1">@lang ('Legal Director')</div>
                                <div class="social">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listTeam">
                <div class="col-md-12">
                    <h4 class="sectionHeading text-uppercase1 mt-4"><span>@lang ('TECHNICAL STEERING COMMITEE')</span></h4>
                </div>
                <div class="row g-0 d-flex justify-content-center text-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Guiko-K.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">GUIKO K</h4>
                            <div class="position flex-grow-1">@lang ('Technology Advisor')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Francesco.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">FRANCESCO</h4>
                            <div class="position flex-grow-1">@lang ('CTO')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex flex-column align-items-center mt-3">
                        <img src="{{ asset('img/Bui-Dinh-Ngoc.png') }}" alt="">
                        <div class="item">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">BUI DINH NGOC</h4>
                            <div class="position flex-grow-1">@lang ('CTO')</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection