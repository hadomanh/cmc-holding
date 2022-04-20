<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Main Tag -->
    <title>METAWAY HOLDING</title>
    <meta id="PagKeywords" name="keywords" content="CMC CHAIN" />
    <meta id="PagDescription" name="description" content="" />
    <link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Facebook Tag -->
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="CMC CHAIN"/>
    <meta property="og:description" content="CMC CHAIN"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="CMC CHAIN" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>

    <!-- Css File -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

</head>

<body>

<!-- Header -->
<x-nav-bar />

@yield('content')

<!-- Footer -->
<footer class="pb-0 bgWhite">
    <div class="container-lg">
        <div class="row">
            <div class="col-xl col-12">
                <div class="row social">
                    <div class="col-auto"><a target="_blank" href="https://www.facebook.com/metawayholdings" class="item"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></div>
                    <div class="col-auto"><a target="_blank" href="https://www.youtube.com/channel/UCpIg6-XEcZnofCZD5z8OLVw" class="item"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>
                    <div class="col-auto"><a target="_blank" href="https://www.linkedin.com/company/metawayholdings/" class="item"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                    <div class="col-auto"><a target="_blank" href="https://twitter.com/metawayholdings" class="item"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                </div>
                <h6 class="title text-red">
                    <div class="">
                        <img src="{{ asset('img/Logo-cmc.png') }}" class="footerLogo">
                    </div>
                </h6>
            </div>
            <div class="row menuFooter">
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li>
                            <img src="{{ asset('img/icon-map.png') }}" class="icon">
                            <div><strong>Address 1:</strong> 30 N Gould St Ste R Sheridan, Wyoming 82801, USA</div>
                            <div><strong>Address 2:</strong> 2323 Main Street Irvine, CA 92614, U.S.A.</div>
                            <div><strong>Address 3:</strong> CX01 lot, Van Khe urban area, La Khe Ward, Ha Dong District, Hanoi, Vietnam</div>
                        </li>
                        <li>
                            <img src="{{ asset('img/Email.png') }}" class="icon">
                            <div>info@metawayholdings.com  info@metawayholdings.vn</div>
                        </li>
                        <li>
                            <img src="{{ asset('img/icon-global-2.png') }}" class="icon">
                            <div>www.metawayholdings.com  www.metawayholdings.vn</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li class="parent list-unstyled">
                            <span class="ml-4">About us</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">Overview</a></li>
                                <li><a href="{{ route('about') }}">Our Mission</a></li>
                                <li><a href="{{ route('about') }}">Our Vision</a></li>
                                <li><a href="{{ route('about') }}">Our Core Values</a></li>
                                <li><a href="{{ route('about') }}">Business Sector</a></li>
                                <li><a href="{{ route('about') }}">Our Ecosystem</a></li>
                                <li><a href="{{ route('about') }}">Holdings Members</a></li>
                                <li><a href="{{ route('about') }}">Our Executive Team</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-md">
                    <ul>
                        <li class="parent list-unstyled">
                            <span>Investor</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('investor.internal') }}">Internal Report</a></li>
                                <li><a href="{{ route('investor.finance') }}">Annual Finance Report</a></li>
                                <li><a href="{{ route('investor.sec-filing') }}">Sec Filing</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li class="parent list-unstyled">
                            <span>Media</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('media.investor-news') }}">Investment News</a></li>
                                <li><a href="{{ route('media.news') }}">News</a></li>
                                <li><a href="{{ route('media.press') }}">Press Release</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul><li class="list-unstyled"> 
                    <a href="{{ route('contact') }}"><span>Contact</span></a>
                    </li></ul>
                    
                </div>
            </div>
        </div>
        <div class="companyInfo">
            <h6 class="title"></h6>
            <div class="row text-center">
                <div>METAWAY Holdings.com is a proud part of METAWAY Holdings Inc., a leading business  services company.</div>
                <div>METAWAY Holdings.com is a Registered Trademark. © 2022 – 2027  All Rights Reserved</div>
            </div>
        </div>
    </div>
</footer>

<!-- Js File -->
<script type="text/javascript" src=" {{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 1000,
        navSpeed: 1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CCGS9ZB4JL"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CCGS9ZB4JL');
</script>

@stack('script')
</body>
</html>

