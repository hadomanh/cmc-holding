
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
                    <div class="carousel-item active container2">
                        <img src="{{ asset('img/Banner-about-Copy.jpg') }}" alt="" class="w-100">
                        <div class="content">
                            <h1>ABOUT US</h1>
                        </div>
                    </div>
                    <div class="carousel-item container2">
                        <img src="{{ asset('img/Banner-about-Copy.jpg') }}" alt="" class="w-100">
                        <div class="content">
                            <h1>ABOUT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- overview -->
        <section class="bgWhite overview">
            <div class="container-lg">
                <div class="g-0 item" id="overview">
                <h2 class="sectionHeading text-uppercase"><span class="mt-5">overview</span></h2>
                <!-- <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"> -->
                    <!-- <div class="col-md-12">
                        <div class="desc"><img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about">
                        </div>
                    </div> -->
                        <div class="col-md-12">
                            <img src="{{ asset('img/Img-about.png') }}" alt="" class="w-100">
                        </div>
                    <div class="row text-overview">
                        <div class="col-md-4">
                            <h4><img src="{{ asset('img/Overview- Company.png') }}" alt=""> <span>Company Background</span></h4>
                            <p>Metaway Holdings is headquartered in the United States with numerous branch offices around the world. The company was founded in the next wave of digital technologies with artificial intelligence, blockchain, the Internet of things, and Cloud computing platforms and applications . These invincible waves will convey great potential and promote the instantaneous development of key economic sectors. Our major ambition is to connect together a community of entrepreneurs, firms, and investors who all share the same desire of giving a legacy for future genera tions.</p>

                        </div>
                        <div class="col-md-4">
                            <h4><img src="{{ asset('img/Overview-Resource.png') }}" alt=""> <span>Resource</span></h4>
                            <p>Metaway Holdings possesses influential resources in human, finance, and technology. Metaway Holdings' founders and management team have extensive expertise and knowledge in strategy, corporate governance, investing, and restructuring. We capture the world's top successful business formulae. Thanks to the creative ideas based on understanding and mastering the latest platform technologies, We have earned the attention of major investment funds and reputable financial organizations.</p>
                        </div>
                        <div class="col-md-4">
                            <h4><img src="{{ asset('img/Overview-Aspiration.png') }}" alt=""> <span>Aspiration</span></h4>
                            <p>Metaway Holdings desires to integrate human intelligence, artificial intelligence, and business intelligence to jointly generate prosperous values for worldwide inhabitants and progress to become a leading digital economy organization in the world.f</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 item" id="ourmission">
                    <div class="col-md-12">
                        <div class="desc">
                            <h2 class="sectionHeading text-uppercase"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>OUR MISSION</span></h2>
                        </div>
                    </div>
                    <div class="row bg-ourmission">
                        <div class="col-md-6 order-md-1">
                            <div class="desc text-our-mission">
                                <p><img src="{{ asset('img/Dots.png') }}" alt=""> @lang ('Utilizing the power of all social resources to build, develop and accompany the global digital economy era.')</p>
                                <p><img src="{{ asset('img/Dots.png') }}" alt=""> @lang ('Creating borderless connectivity in all fields of the digital economy.')</p>
                                <p><img src="{{ asset('img/Dots.png') }}" alt=""> @lang ('Creating a happier and more prosperous life for the worldwide community')</p>
                            </div>
                        </div>
                        <div class="col-md-6 order-md-2">
                            <img src="{{ asset('img/blockcahin-1.png') }}" alt="">
                        </div>
                    </div>

                </div>
                <div class="row g-0 item" id="ourvision">
                    <div class="col-md-12">
                        <div class="desc">
                            <h2 class="sectionHeading text-uppercase"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>OUR VISION</span></h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/blockcahin-2.png') }}" alt="" class="">
                    </div>
                    <div class="col-md-6">
                        <div class="desc text-our-mission">
                            <p><img src="{{ asset('img/Dots.png') }}" alt=""> @lang ('Building a community of entrepreneurs, businesses, investors, and individuals with unified intelligence, companionship and sustainable development.')</p>
                            <p><img src="{{ asset('img/Dots.png') }}" alt=""> @lang ("Becoming the world's leading digital economy corporation by the convergence of intelligence, finance, technology. Thus, we contribute to the common prosperity of the global economy.")</p>
                            <p><img src="{{ asset('img/Dots.png') }}" alt=""> @lang ('Aspiring to IPO on the international exchange platform in 2027.')</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 item" id="ourcorevalues">
                    <div class="col-md-12">
                        <div class="desc">
                            <h2 class="sectionHeading text-uppercase"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>OUR CORE VALUES</span></h2>
                        </div>
                    </div>
                    <div class="col-md-12 order-md-1">
                        <div class="desc row">
                            <div class="col-md-4 our-core">
                            <p>1</p> <h5>@lang ('Think Big')</h5>
                            <ul>
                                <li>@lang ('Act like a founder')</li>
                                <li>@lang ('Keep the discipline and high standards')</li>
                                <li>@lang ('Respect the diversity')</li>
                            </ul>
                            </div>
                            <div class="col-md-4 our-core">
                            <p>2</p>  <h5>@lang ('Spirit of Dedication')</h5>
                            <ul>
                                <li>@lang ('Attaching Affection')</li>
                                <li>@lang ('Sharing the responsibility')</li>
                                <li>@lang ('Giving is forever lasted')</li>
                            </ul></div>
                            <div class="col-md-4 our-core">
                            <p>3</p><h5 class="">@lang ('Transparency, safety')</h5>
                            <ul>
                                <li>@lang ('Oriented for solution')</li>
                                <li>@lang ('Deep Expertise')</li>
                                <li>@lang ('Leaving a legacy')</li>
                            </ul></div>
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
                    <div class="col-md-6 item">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/img-8.jpg') }}"></a>
                            <div class="card-body">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Technology field')</a></h5>
                                <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ('Metaway Tech explores, expands, and delivers crucial technology solutions in the pillars of the digital economy. Our goal is to improve the capacity and overall development to meet global user needs in the digital economy age.')</p>
                                <div class="text-end"><a target="_blank" href="http://metawaytech.com/" class="btn  btn-btnWhite">@lang ('READ MORE')<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 item">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/img-9.jpg') }}"></a>
                            <div class="card-body">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Healthcare field')</a></h5>
                                <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ("Metaway Med orients to establish an international standard clinic and hospital system specializing in chiropractic. Blockchain technology will be applied to digital medical records for best tracked Metaway Med builds a technology platform to support medical examination, diagnosis, calibration, and treatment for patients, which will help patients save huge amounts of unnecessary costs. Metaway Med owns a world-leading professors and specialists team who are dedicated to caring for patients' health.")</p>
                                <div class="text-end"><a target="_blank" href="{{ route('about') }}" class="btn btn-btnWhite">@lang ('READ MORE')<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 item">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/img-10.jpg') }}"></a>
                            <div class="card-body">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Real Estate field')</a></h5>
                                <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ('Metaway Land is an investor and developer of super-luxury class real estate and smart cities. We create the differences for real estates, set new standards for personal branding and premium enjoyment exclusively for elite owners. We apply new technologies comprehensively in the field of real estate. On a global scale, myriad investment opportunities and new forms of ownership will be opened up for Investors regardless of legal and geographical barriers.')</p>
                                <div class="text-end"><a target="_blank" href="{{ route('about') }}" class="btn  btn-btnWhite">@lang ('READ MORE')<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 item">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="{{ asset('img/img-11.jpg') }}"></a>
                            <div class="card-body">
                                <h5 class="card-title titleUnderline"><a href="#">@lang ('Finance field')</a></h5>
                                <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ("Metaway Finance applies new technologies in creating digital platforms and solutions for Banking, Insurance, and Securities fields. Brand new investment opportunities and exclusive trading models will be opened up for global users We believe in the future you are the only one who will take control of your own financial life. FWe empower you to learn, plan, and actualize your financial prosperity dreams. You should say bye to all the confusing myths you've heard about investing")</p>
                                <div class="text-end"><a target="_blank" href="{{ route('about') }}" class="btn  btn-btnWhite">@lang ('READ MORE')<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- eco system -->
        <section class="text-white" id="ecosystem">
            <img src="{{ asset('img/bg-ecosystem.jpg') }}" alt="">
  <div class="content">
  <h2 class="">@lang ('ECOSYSTEM')</h2>
                         <p>@lang ("<strong>The Metaway Holdings</strong>ecosystem is investing in products and services for specialized needs: The backbone pillar of the digital economy, Enormous Volume, Global Scale, Recurrent Demand, Fast-developing Market. We address existing markets and industries' issues with the latest smart, transparent technology solutions.") </p>
   </div>
</div>
        </section>

        <!-- Our members -->
        <section class="bgWhite partners" id="holdingsmembers">
            <div class="container-lg">
                <h2 class="sectionHeading centered">@lang ('HOLDINGS MEMBERS')</h2>
                <p class="text-center">@lang ("As a 'Holding in Holding' model, we establish member enterprises with separate ecosystems while maintaining focus on Metaway Holding's broad aims of globalization, digitalization, and innovation for outstanding social values.")</p>
                <p><img src="{{ asset('img/Map1.png') }}" alt=""></p>
            </div>
        </section>


        <!-- Our members -->
        <section class="bgGrey team" id="executive">
            <div class="container-lg">
                <h2 class="sectionHeading centered">OUR EXECUTIVE TEAM</h2>
                <p>@lang (' <strong>Metaway Holdings</strong>  owns executive resources who have many years of experience in many fields: restructuring, M&A, finance, investment and corporate governance. In addition, we also have senior advisors from Phi Group (USA) with a strong and reputable global partner system.')</p>
                <div class="listTeam">
                    <div class="col-md-12">
                        <h4 class="sectionHeading text-uppercase1 pt-4"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>Board of Management</span></h4>
                    </div>
                    <div class="row g-0 justify-content-center text-center">
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Tran-Nam-Trung.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Tran Nam Chung</h4>
                            <div class="position flex-grow-1">Chairman</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Henre-D.Fahman.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Henry D.Fahman</h4>
                            <div class="position flex-grow-1">Vice Chairman</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Nguyen-Ngoc-Son.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Nguyen Ngoc Son</h4>
                            <div class="position flex-grow-1">Vice Chairman CEO</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Nguyen-Ngoc-Long.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Nguyen Ngoc Long</h4>
                            <div class="position flex-grow-1">Member of BOM, Deputy CEO</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Nguyen-Thanh-Long.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Nguyen Thanh Long</h4>
                            <div class="position flex-grow-1">Member of BOM, Deputy CEO</div>
                            <div class="social">
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listTeam">
                <div class="col-md-12">
                        <h4 class="sectionHeading text-uppercase1 pt-4"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>Advisors</span></h4>
                    </div>
                    <div class="row g-0 justify-content-center  text-center">
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Tran-Quang-Trung.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Tran Quang Trung</h4>
                            <div class="position flex-grow-1">Strategy Advisor</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Steve-Truong.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Steve Truong</h4>
                            <div class="position flex-grow-1">Managing Director PHI Groung Advisor</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Frank-N.Hawkins.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Frank N.Hawkins</h4>
                            <div class="position flex-grow-1">Finance Advisor</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Michael-Bennett.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Michael Bennett</h4>
                            <div class="position flex-grow-1">Investment & Partnership Advisor</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Tam-T.Bui.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Tam T.Bui</h4>
                            <div class="position flex-grow-1">Chief Operationg Officer PHI Group Operation Advisor</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Guiko-K.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
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
                <div class="col-md-12">
                        <h4 class="sectionHeading text-uppercase1 pt-4"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>Core Team</span></h4>
                    </div>
                    <div class="row g-0 justify-content-center  text-center">
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Nguyen-Ngoc-Hoa.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Nguyen Ngoc Hoa</h4>
                            <div class="position flex-grow-1">CHRO</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Andy-Vu.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Andy Vu</h4>
                            <div class="position flex-grow-1">CMO</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Anna-Nguyen.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Anna Nguyen</h4>
                            <div class="position flex-grow-1">Business & Partnership Director</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Le-Van-Duong.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Le Van Duong</h4>
                            <div class="position flex-grow-1">Legal Director</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <!-- <div class="col-lg col-md-4 item d-flex flex-column align-items-center m-3 m-3">
                            <img src="{{ asset('img/Trinh-Hoang-Linh.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Trinh Hoang Linh</h4>
                            <div class="position flex-grow-1">Deputy CEO</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="listTeam">
                <div class="col-md-12">
                        <h4 class="sectionHeading text-uppercase1 pt-4"> <img src="{{ asset('img/icon-about.png') }}" alt="" class="icon-about"><span>Technical steering commitee</span></h4>
                    </div>
                    <div class="row g-0 teamWrap justify-content-center  text-center">
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Guiko-K.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Guiko K</h4>
                            <div class="position flex-grow-1">Technology Advisor</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Francesco.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
                            <h4 class="name">Francesco</h4>
                            <div class="position flex-grow-1">CTO</div>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center m-3">
                            <img src="{{ asset('img/Bui-Dinh-Ngoc.png') }}" alt="">
                            <img class="border-icon" src="{{ asset('img/border-executive.png') }}" alt="">
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
