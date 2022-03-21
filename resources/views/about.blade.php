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
            <div class="row g-0 item">
                <div class="col-md-6">
                    <img src="{{ asset('img/img-1.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">overview</h2>
                        <p>Global Based Company: CMC Holdings is headquartered in the US and has offices in many countries around the world, of which a large part of its personnel is in Vietnam, a country with people who are studious, clever, tech-savvy and which is currently recognized for having numerous startups in innovation and high-tech industrie.</p>
                        <p>Inspiration: CMC Holdings was founded with the aim of bringing together a community of competent entrepreneurs in the new era of emerging economies.</p>
                        <p>Human Power: The founders and Executive Team of CMC Holdings have vast experience in investing, corporate management, restructuring, and executing cross-border initiatives, which contributes to the company's strength.</p>
                        <p>Aspiration: The big vision of CMC Holdings always closely connects with the big dreams of solving the major challenges of the global and social market with huge user needs.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0 item">
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
            <div class="row g-0 item">
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
            <div class="row g-0 item">
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
    <section class="newsHighlights bgGrey bgArrow">
        <div class="container-lg">
            <h2 class="sectionHeading centered">@lang ('BUSINESS SECTORS')</h2>
            <p class="text-center">The business of CMC Holdings focuses on leading and high-class industries including specialized healthcare, super-luxury real estate, technology-related categories, especially financial technology, and blockchain-driven.</p>
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-8.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Technology field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ('Metaway Tech explores, expands, and delivers crucial technology solutions in the pillars of the digital economy. Our goal is to improve the capacity and overall development to meet global user needs in the digital economy age.')</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-9.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Healthcare field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ("Metaway Med orients to establish an international standard clinic and hospital system specializing in chiropractic. Blockchain technology will be applied to digital medical records for best tracked Metaway Med builds a technology platform to support medical examination, diagnosis, calibration, and treatment for patients, which will help patients save huge amounts of unnecessary costs. Metaway Med owns a world-leading professors and specialists team who are dedicated to caring for patients' health.")</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-10.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Real Estate field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ('Metaway Land is an investor and developer of super-luxury class real estate and smart cities. We create the differences for real estates, set new standards for personal branding and premium enjoyment exclusively for elite owners. We apply new technologies comprehensively in the field of real estate. On a global scale, myriad investment opportunities and new forms of ownership will be opened up for Investors regardless of legal and geographical barriers.')</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-11.jpg') }}"></a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline"><a href="#">@lang ('Finance field')</a></h5>
                            <p class="card-text" style="height: 100px; overflow-y: scroll;">@lang ("Metaway Finance applies new technologies in creating digital platforms and solutions for Banking, Insurance, and Securities fields. Brand new investment opportunities and exclusive trading models will be opened up for global users We believe in the future you are the only one who will take control of your own financial life. FWe empower you to learn, plan, and actualize your financial prosperity dreams. You should say bye to all the confusing myths you've heard about investing")</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">@lang ('READ MORE')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- eco system -->
    <section class="bgDark text-white">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-6">
                    <p><img src="{{ asset('img/img-4.jpg') }}" alt=""></p>
                </div>
                <div class="col-md-6">
                    <h2 class="sectionHeading">@lang ('ECOSYSTEM')</h2>
                    <p>@lang ("Metaway Holdings' ecosystem revolves around the pillars which shape the digital economy. We generate core technologies to apply in all fields of life such as Digital Health Ecosystem, Technology Ecosystem, Digital Real Estate Ecosystem, Digital Financial Ecosystem.") </p>
                    <!-- <p>@lang ('We have built self-contained and growing ecosystems to fulfill the ever-increasing demands of our global consumers.') </p>
                    <p>@lang ('The digital ecosystem will feature Hyperas Chain, a specialized platform for coding assets, Pindias, a transaction management platform for digital asset logs, Divega, an auction e-commerce platform, and Rapital Bank, a digital banking service available at any time.')</p> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgWhite partners">
        <div class="container-lg">
            <h2 class="sectionHeading centered">@lang ('HOLDINGS MEMBERS')</h2>
            <p class="text-center">@lang ("As a 'Holding in Holding' model, we establish member enterprises with separate ecosystems while maintaining focus on Metaway Holding's broad aims of globalization, digitalization, and innovation for outstanding social values.")</p>
            <p><img src="{{ asset('img/map.png') }}" alt=""></p>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgGrey team text-center">
        <div class="container-lg">
            <h2 class="sectionHeading centered">OUR EXECUTIVE TEAM</h2>
            <p>It is a team of qualified personnel, advisors, CEO's, CMO's... all of them have many years of experience in restructuring, M&A, Marketing, and business management industries. The founding partners include PHI Group (USA), and the leading individuals are Mr. Tran Nam Chung and many other associates. Aura Capital is the strategic stakeholder in Vietnam.</p>
            <div class="listTeam">
                <h4 class="sectionHeading centered text-uppercase">Board of Management</h4>
                <div class="row g-0 justify-content-center">
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
                        <img src="{{ asset('img/Nguyen Thanh Long - Member of BOM, Deputy CEO.png') }}" alt="">
                        <h4 class="name">Nguyen Thanh Long</h4>
                        <div class="position flex-grow-1">Member of BOM, Deputy CEO</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
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
                        <h4 class="name">Henry</h4>
                        <div class="position flex-grow-1">Vice Chairman</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
                <div class="row g-0 justify-content-center mt-5">
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
                        <img src="{{ asset('img/Vu Thi Tuyet Thanh -Member of BOM.png') }}" alt="">
                        <h4 class="name">Vu Thi Tuyet Thanh</h4>
                        <div class="position flex-grow-1">Member of BOM</div>
                        <div class="social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 item d-flex flex-column align-items-center">
                        <img src="{{ asset('img/Hoang Quoc Tuan - Member of BOM.png') }}" alt="">
                        <h4 class="name">Hoang Quoc Tuan</h4>
                        <div class="position flex-grow-1">Member of BOM</div>
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