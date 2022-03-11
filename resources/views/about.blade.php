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
                        <h2 class="sectionHeading text-uppercase">OUR MISSION</h2>
                        <p>Concentrating on finding comprehensive answers to society's and people's key concerns around the globe, pioneering technological innovation and knowledge, making a great contribution to the digital economy and the world economic growth.</p>
                        <p>Creating a worldwide community with individuals that have a huge vision.</p>
                        <p>Delivering significant values and positive impacts on society and the globe.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0 item">
                <div class="col-md-6">
                    <img src="{{ asset('img/img-6.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">OUR VISION</h2>
                        <p>Build its business foundation to contribute to the pillar industries of Vietnam and the world</p>
                        <p>The pioneering and most advanced digital ecosystem in the world.</p>
                        <p>Set a goal IPO target of US$300 billion by 2027.</p>
                        <p>Stay connected with the entry and companionship of worldwide partners in order to become a gigantic player in global business for mutual prosperity.</p>
                        <p>Creating a legacy for future generations.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0 item">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('img/img-7.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="desc">
                        <h2 class="sectionHeading text-uppercase">OUR CORE VALUES</h2>
                        <p>Our positioning is global, digital, and high-class but our core values are centered on people and the unifying of intelligence including human intelligence, artificial intelligence, and business intelligence.</p>
                        <p>Globalization: With the leverage of a borderless economy, CMC Holdings' products, services, and business development are globally oriented with the goal of addressing huge user needs.</p>
                        <p>Human First: As a technology company, we put people first, including developing talent in the company and taking care of human issues globally.</p>
                        <p>Tech-Driven: Technology-centric business development, identify technologies for addressing both consumer digital endpoints & social impacts.</p>
                        <p>HI, AI, BI Union: Unifying human intelligence (HI), artificial intelligence (AI), and business intelligence (BI) for optimum performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business highlights -->
    <section class="newsHighlights bgGrey bgArrow">
        <div class="container-lg">
            <h2 class="sectionHeading centered">BUSINESS CATEGORY</h2>
            <p class="text-center">The business of CMC Holdings focuses on leading and high-class industries including specialized healthcare, super-luxury real estate, technology-related categories, especially financial technology, and blockchain-driven.</p>
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-8.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">Digital Economy</a></h5>
                            <p class="card-text flex-grow-1">With the rapid advancement of technology, we have quickly entered the digital era with the evolving needs of tech-driven consumption, and CMC Holdings' commercial growth aim is to improve living standards with powerful technology.</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">READ MORE</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-9.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">Specialized Healthcare</a></h5>
                            <p class="card-text flex-grow-1">Our ultimate mission is to create great value for people and society through Human-Oriented Technology and Specialized & Personalization healthcare Services and Treatments.</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">READ MORE</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-10.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">Real Estate</a></h5>
                            <p class="card-text flex-grow-1">We provide and invest in the most comprehensive and advanced real estate services including high-class real estate products & projects and platforms using blockchain technology to convert real estate into digital assets. </p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">READ MORE</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/img-11.jpg') }}"></a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title titleUnderline"><a href="#">Corporate Consulting</a></h5>
                            <p class="card-text flex-grow-1">With the goal of building a prosperous business community globally, we will help enterprises grow their businesses through consulting services including enterprise service delivery, data management strategy, ERP solutions, cloud, forecasting, blockchain, project development, investment, finance talent, M&A, business management, and many more.</p>
                            <p class="card-text flex-grow-1">In particular, we pioneer in providing consulting services and designing the right IPO roadmap for SMEs with a team of experienced Mentors and in-depth knowledge in many different fields.</p>
                            <div class="text-center"><a target="_blank" href="http://127.0.0.1:8000/about-us/overview" class="btn btnWhite">READ MORE</a></div>
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
                    <h2 class="sectionHeading">OUR ECOSYSTEM</h2>
                    <p>CMC Holdings is a multi-industry, multinational corporation that focuses on important economies' backbone ecosystems to meet global needs. We put priority on the digital economy, high-class real estate, and specialized healthcare. </p>
                    <p>We have built self-contained and growing ecosystems to fulfill the ever-increasing demands of our global consumers. </p>
                    <p>The digital ecosystem will feature Hyperas Chain, a specialized platform for coding assets, Pindias, a transaction management platform for digital asset logs, Divega, an auction e-commerce platform, and Rapital Bank, a digital banking service available at any time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our members -->
    <section class="bgWhite partners">
        <div class="container-lg">
            <h2 class="sectionHeading centered">OUR MEMBERS</h2>
            <p class="text-center">As a “Holding in Holding” model, we establish member enterprises with separate ecosystems while maintaining focus on Metaway Holding's broad aims of globalization, digitalization, and innovation for outstanding social values.</p>
            <p><img src="{{ asset('img/map.jpg') }}" alt=""></p>
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