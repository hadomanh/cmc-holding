<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Main Tag -->
    <title>METAWAY HOLDING</title>
    <meta id="PagKeywords" name="keywords" content="METAWAY HOLDINGS" />
    <meta id="PagDescription" name="description" content="" />
    <link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
    <link rel="icon" href="{{ asset('img/Avata.jpg') }}" type="image/ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Facebook Tag -->
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="METAWAY HOLDINGS"/>
    <meta property="og:description" content="METAWAY HOLDINGS"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="METAWAY HOLDINGS"/>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                        <img src="{{ asset('img/logo-metaway.png') }}" class="footerLogo">
                </h6>
            </div>
            <div class="row menuFooter">
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li>
                            <img src="{{ asset('img/map-fter.png') }}" class="icon">
                            <p><strong>@lang ('Address 1:')</strong> 30 N Gould St Ste R Sheridan, Wyoming 82801, USA</p>
                            <p><strong>@lang ('Address 2:')</strong> 2323 Main Street Irvine, CA 92614, U.S.A.</p>
                            <p><strong>@lang ('Address 3:')</strong> @lang ('CX01 lot, Van Khe urban area, La Khe Ward, Ha Dong District, Hanoi, Vietnam')</p>
                        </li>
                        <li>
                            <img src="{{ asset('img/email-fter.png') }}" class="icon">
                            <p>info@metawayholdings.com  info@metawayholdings.vn</p>
                        </li>
                        <li>
                            <img src="{{ asset('img/global-fter.png') }}" class="icon">
                            <p>www.metawayholdings.com  www.metawayholdings.vn</p>
                        </li>
                    </ul>
                </div>
                <div class="col-9">
                <div class="row">
                <div class="col-md-5 col-xl-3">
                    <ul>
                        <li class="parent list-unstyled">
                            <span class="">@lang ('About us')</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">@lang ('Overview')</a></li>
                                <li><a href="{{ route('about') }}">@lang ('Our Mission')</a></li>
                                <li><a href="{{ route('about') }}">@lang ('Our Vision')</a></li>
                                <li><a href="{{ route('about') }}">@lang ('Our Core Values')</a></li>
                                <li><a href="{{ route('about') }}">@lang ('Investment Sectors') </a></li>
                                <li><a href="{{ route('about') }}">@lang ('Our Ecosystem')</a></li>
                                <li><a href="{{ route('about') }}">@lang ('Holdings Members')</a></li>
                                <li><a href="{{ route('about') }}">@lang ('Our Executive Team')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md">
                    <ul>
                        <li class="parent list-unstyled">
                            <span class="">Investment Sector</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">Our Core Values</a></li>
                                <li><a href="{{ route('about') }}">Business Sector</a></li>
                                <li><a href="{{ route('about') }}">Our Ecosystem</a></li>
                                <li><a href="{{ route('about') }}">Holdings Members</a></li>
                                <li><a href="{{ route('about') }}">Our Executive Team</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
                <div class="col-md-5 col-xl-3">
                    <ul>
                        <li class="parent list-unstyled">
                            <span>@lang ('Investor')</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('investor.internal') }}">@lang ('Internal Report')</a></li>
                                <li><a href="{{ route('investor.finance') }}">@lang ('Annual Finance Report')</a></li>
                                <li><a href="{{ route('investor.sec-filing') }}">@lang ('Sec Filing')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 col-xl-3">
                    <ul>
                        <li class="parent list-unstyled">
                            <span>@lang ('Media')</span>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('media.investor-news') }}">@lang ('Investor News')</a></li>
                                <li><a href="{{ route('media.news') }}">@lang ('News')</a></li>
                                <li><a href="{{ route('media.press') }}">@lang ('Press Release')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 col-xl-3">
                    <ul>
                        <li class="list-unstyled"> 
                    <a href="{{ route('contact') }}"><span>@lang ('Contact')</span></a>
                    </li></ul>
                    
                </div>
                </div>
                </div>
                
            </div>
        </div>
        <div class="companyInfo">
            <h6 class="title"></h6>
            <div class="row text-center">
                <p class="m-0 pt-2">@lang ('METAWAY Holdings.com is a proud part of METAWAY Holdings Inc., a leading business  services company.')</p>
                <p>@lang ('METAWAY Holdings.com is a Registered Trademark. © 2022 – 2027  All Rights Reserved')</p>
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
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: false,
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

