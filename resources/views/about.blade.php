@extends('layouts.app')

@section('content')
<div id="aboutPage">

    <!-- Banner -->
    <section class="banner p-0">
        <div id="carouselBanner" class="carousel slide pt-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/banner-about.jpg') }}" alt="" class="w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-about.jpg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- overview -->
    <section class="bgWhite overview">
        <div class="container-lg">
            <div class="row g-0 item" id="overview">
                <div class="col-md-6">
                    <img src="{{ asset('img/img-1.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">overview</h2>
                        <h6>@lang ('Company Background')</h6>
                        <p>@lang ('Metaway Holdings is headquartered in the United States with numerous branch offices around the world. The company was founded in the next wave of digital technologies with artificial intelligence, blockchain, the Internet of things, and Cloud computing platforms and applications . These invincible waves will convey great potential and promote the instantaneous development of key economic sectors. Our major ambition is to connect together a community of entrepreneurs, firms, and investors who all share the same desire of giving a legacy for future generations.')</p>
                        <h6>@lang ('Resource')</h6>
                        <p>@lang ("Metaway Holdings possesses influential resources in human, finance, and technology. Metaway Holdings' founders and management team have extensive expertise and knowledge in strategy, corporate governance, investing, and restructuring. We capture the world's top successful business formulae. Thanks to the creative ideas based on understanding and mastering the latest platform technologies, We have earned the attention of major investment funds and reputable financial organizations.")</p>
                        <h6>@lang ('Aspiration')</h6>
                        <p>@lang ('Metaway Holdings desires to integrate human intelligence, artificial intelligence, and business intelligence to jointly generate prosperous values for worldwide inhabitants and progress to become a leading digital economy organization in the world.')</p>

                    </div>
                </div>
            </div>
            <div class="row g-0 item" id="ourmission">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('img/img-5.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">@lang ('OUR MISSION')</h2>
                        <p>@lang ('Utilizing the power of all social resources to build, develop and accompany the global digital economy era.')</p>
                        <p>@lang ('Creating borderless connectivity in all fields of the digital economy.')</p>
                        <p>@lang ('Creating a happier and more prosperous life for the worldwide community')</p>
                    </div>
                </div>
            </div>
            <div class="row g-0 item" id="ourvision">
                <div class="col-md-6">
                    <img src="{{ asset('img/img-6.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">@lang ('OUR VISION')</h2>
                        <p>@lang ('Building a community of entrepreneurs, businesses, investors, and individuals with unified intelligence, companionship and sustainable development.')</p>
                        <p>@lang ("Becoming the world's leading digital economy corporation by the convergence of intelligence, finance, technology. Thus, we contribute to the common prosperity of the global economy.")</p>
                        <p>@lang ('Aspiring to IPO on the international exchange platform in 2027.')</p>
                    </div>
                </div>
            </div>
            <div class="row g-0 item" id="ourcorevalues">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('img/img-7.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">@lang ('OUR CORE VALUES')</h2>
                        <h6>@lang ('1. Think Big')</h6>
                        <ul>
                            <li>@lang ('Act like a founder')</li>
                            <li>@lang ('Keep the discipline and high standards')</li>
                            <li>@lang ('Respect the diversity')</li>
                        </ul>
                        <h6>@lang ('2. Spirit of Dedication')</h6>
                        <ul>
                            <li>@lang ('Attaching Affection')</li>
                            <li>@lang ('Sharing the responsibility')</li>
                            <li>@lang ('Giving is forever lasted')</li>
                        </ul>
                        <h6>@lang ('3. Transparency, safety')</h6>
                        <ul>
                            <li>@lang ('Oriented for solution')</li>
                            <li>@lang ('Deep Expertise')</li>
                            <li>@lang ('Leaving a legacy')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business highlights -->
    <section class="newsHighlights bgGrey bgArrow" id="businesssectors">
        <div class="container-lg">
            <h2 class="sectionHeading centered">@lang ('INVESTMENT SECTOR')</h2>
            <p class="text-center">METAWAY Holdings focuses on investing in key areas in the digital economy, including technology, healthcare, real estate, and finance.</p>
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-8.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Technology field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ('Metaway Tech explores, expands, and delivers crucial technology solutions in the pillars of the digital economy. Our goal is to improve the capacity and overall development to meet global user needs in the digital economy age.')</p>
                            <div class="text-center"><a target="_blank" href="http://metawaytech.com/" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-9.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Healthcare field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ("Metaway Med orients to establish an international standard clinic and hospital system specializing in chiropractic. Blockchain technology will be applied to digital medical records for best tracked Metaway Med builds a technology platform to support medical examination, diagnosis, calibration, and treatment for patients, which will help patients save huge amounts of unnecessary costs. Metaway Med owns a world-leading professors and specialists team who are dedicated to caring for patients' health.")</p>
                            <div class="text-center"><a target="_blank" href="{{ route('about') }}" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-10.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Real Estate field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ('Metaway Land is an investor and developer of super-luxury class real estate and smart cities. We create the differences for real estates, set new standards for personal branding and premium enjoyment exclusively for elite owners. We apply new technologies comprehensively in the field of real estate. On a global scale, myriad investment opportunities and new forms of ownership will be opened up for Investors regardless of legal and geographical barriers.')</p>
                            <div class="text-center"><a target="_blank" href="{{ route('about') }}" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-11.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Finance field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ("Metaway Finance applies new technologies in creating digital platforms and solutions for Banking, Insurance, and Securities fields. Brand new investment opportunities and exclusive trading models will be opened up for global users We believe in the future you are the only one who will take control of your own financial life. FWe empower you to learn, plan, and actualize your financial prosperity dreams. You should say bye to all the confusing myths you've heard about investing")</p>
                            <div class="text-center"><a target="_blank" href="{{ route('about') }}" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- eco system -->
    <section class="bgDark text-white" id="ecosystem">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-6">
                    <p><img src="{{ asset('img/img-4.jpg') }}" alt=""></p>
                </div>
                <div class="col-md-6">
                    <h2 class="sectionHeading">@lang ('ECOSYSTEM')</h2>
                    <p>@lang ("The Metaway Holdings ecosystem is investing in products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market. We address existing markets and industries' issues with the latest smart, transparent technology solutions.") </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgWhite partners" id="holdingsmembers">
        <div class="container-lg">
            <h2 class="sectionHeading centered">@lang ('HOLDINGS MEMBERS')</h2>
            <p class="text-center">@lang ("As a 'Holding in Holding' model, we establish member enterprises with separate ecosystems while maintaining focus on Metaway Holding's broad aims of globalization, digitalization, and innovation for outstanding social values.")</p>
            <p><img src="{{ asset('img/map.png') }}" alt=""></p>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgGrey team text-center" id="executive">
        <div class="container-lg">
            <h2 class="sectionHeading centered">OUR EXECUTIVE TEAM</h2>
            <p>@lang ('Metaway Holdings owns executive resources who have many years of experience in many fields: restructuring, M&A, finance, investment and corporate governance. In addition, we also have senior advisors from Phi Group (USA) with a strong and reputable global partner system.')</p>
            <div class="listTeam">
                <h4 class="sectionHeading centered text-uppercase">Board of Management</h4>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Tran Nam Chung - Chairman.png') }}" alt="">
                        <h4 class="name">Tran Nam Chung</h4>
                        <div class="position flex-grow-1">Chairman</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Henry - Vice Chairman.png') }}" alt="">
                        <h4 class="name">Henry D.Fahman</h4>
                        <div class="position flex-grow-1">Vice Chairman</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Nguyen Ngoc Son - Vice Chairman CEO.png') }}" alt="">
                        <h4 class="name">Nguyen Ngoc Son</h4>
                        <div class="position flex-grow-1">Vice Chairman CEO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Nguyen Ngoc Long - Member of BOM, Deputy CEO.png') }}" alt="">
                        <h4 class="name">Nguyen Ngoc Long</h4>
                        <div class="position flex-grow-1">Member of BOM, Deputy CEO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Nguyen Thanh Long - Member of BOM, Deputy CEO.png') }}" alt="">
                        <h4 class="name">Nguyen Thanh Long</h4>
                        <div class="position flex-grow-1">Member of BOM, Deputy CEO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listTeam">
                <h4 class="sectionHeading centered text-uppercase">Advisors</h4>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-7.png') }}" alt="">
                        <h4 class="name">Tran Quang Trung</h4>
                        <div class="position flex-grow-1">Strategy Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-8.png') }}" alt="">
                        <h4 class="name">Steve Truong</h4>
                        <div class="position flex-grow-1">Managing Director PHI Groung Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-9.png') }}" alt="">
                        <h4 class="name">Frank N.Hawkins</h4>
                        <div class="position flex-grow-1">Finance Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-10.png') }}" alt="">
                        <h4 class="name">Michael Bennett</h4>
                        <div class="position flex-grow-1">Investment & Partnership Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-11.png') }}" alt="">
                        <h4 class="name">Tam T.Bui</h4>
                        <div class="position flex-grow-1">Chief Operationg Officer PHI Group Operation Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-12.png') }}" alt="">
                        <h4 class="name">Guiko K</h4>
                        <div class="position flex-grow-1">Technology Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listTeam">
                <h4 class="sectionHeading centered text-uppercase">Core Team</h4>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Nguyen Ngoc Hoa - CHRO.png') }}" alt="">
                        <h4 class="name">Nguyen Ngoc Hoa</h4>
                        <div class="position flex-grow-1">CHRO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Andy Vu - CMO.png') }}" alt="">
                        <h4 class="name">Andy Vu</h4>
                        <div class="position flex-grow-1">CMO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Anna Nguyen - Business & Partnership Director.png') }}" alt="">
                        <h4 class="name">Anna Nguyen</h4>
                        <div class="position flex-grow-1">Business & Partnership Director</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Le Van Duong - Legal Director.png') }}" alt="">
                        <h4 class="name">Le Van Duong</h4>
                        <div class="position flex-grow-1">Legal Director</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Trinh Hoang Linh - Deputy CEO.png') }}" alt="">
                        <h4 class="name">Trinh Hoang Linh</h4>
                        <div class="position flex-grow-1">Deputy CEO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listTeam">
                <h4 class="sectionHeading centered text-uppercase">Technical steering commitee</h4>
                <div class="row g-0 teamWrap justify-content-center">
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-12.png') }}" alt="">
                        <h4 class="name">Guiko K</h4>
                        <div class="position flex-grow-1">Technology Advisor</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-17.png') }}" alt="">
                        <h4 class="name">Francesco</h4>
                        <div class="position flex-grow-1">CTO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/person-18.png') }}" alt="">
                        <h4 class="name">Bui Dinh Ngoc</h4>
                        <div class="position flex-grow-1">CTO</div>
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
