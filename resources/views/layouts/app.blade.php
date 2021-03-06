<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    @section('meta-tag')
        <title>Metaway Holdings -The Big Things - Tập đoàn kinh tế số Việt Nam</title>
        <meta name="description" content="Metaway Holdings là tập đoàn kinh tế số hoạt động trên phạm vi toàn cầu, định hướng phát triển các lĩnh vực trụ cột của nền kinh tế, hướng tới xã hội số." />
        <meta name="keywords" content="kinh tế số, kinhteso, kinh tế số việt nam, kinhtesovietnam, metawayholdings" />
    @show
    
    <!-- Facebook Tag -->
    <meta property="og:url" content="https://metawayholdings.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Metaway Holdings -The Big Things - Tập đoàn kinh tế số Việt Nam" />
    <meta property="og:description" content="Metaway Holdings là tập đoàn kinh tế số hoạt động trên phạm vi toàn cầu, định hướng phát triển các lĩnh vực trụ cột của nền kinh tế, hướng tới xã hội số." />
    <meta property="og:image" content="https://imagedelivery.net/KvFcUzLL2k6Q3_ROU5d8cw/1d22c510-f212-4bb3-1786-b645b68f9400/public" />
    <meta property="og:site_name" content="metawayholdings.com" />

    <!-- Twitter Tag -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@metawayholdings" />
    <meta name="twitter:creator" content="@metawayholdings" />
    <meta name="twitter:title" content="Metaway Holdings -The Big Things - Tập đoàn kinh tế số Việt Nam" />
    <meta name="twitter:description" content="Metaway Holdings là tập đoàn kinh tế số hoạt động trên phạm vi toàn cầu, định hướng phát triển các lĩnh vực trụ cột của nền kinh tế, hướng tới xã hội số." />
    <meta name="twitter:image:src" content="https://imagedelivery.net/KvFcUzLL2k6Q3_ROU5d8cw/1d22c510-f212-4bb3-1786-b645b68f9400/public">

    <!-- Main Tag -->
    <link type="image/x-icon" rel="shortcut icon" />
    <link rel="icon" href="{{ asset('img/favicon-32x32.png') }}" type="image/ico" />
    <link rel="icon" href="{{ asset('img/favicon-32x32.png') }}" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ asset('img/favicon-16x16.png') }}" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="mask-icon" href="{{ asset('img/favicon-32x32.png') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css File -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css?v=1') }}" rel="stylesheet">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FL5XHE0VJW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-FL5XHE0VJW');
    </script>

</head>

<body>

<!-- Header -->
<x-nav-bar />

@yield('content')

<!-- Footer -->
<footer class="bgWhite">
    <div class="container-xxl">
        <div class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-auto text-center">
                    <img src="{{ asset('img/logo.svg') }}" class="footerLogo">
                </div>
                <div class="col-xl col-md col-12 mt-4 mt-md-0">
                    <div class="d-flex align-items-center justify-content-md-end justify-content-center social">
                        <a target="_blank" href="https://www.facebook.com/metawayholdings" class="item"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCpIg6-XEcZnofCZD5z8OLVw" class="item"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/metawayholdings/" class="item"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a target="_blank" href="https://twitter.com/metawayholdings" class="item"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-3">
                <ul class="list-unstyled info">
                    <li class="mb-4">
                        <img src="{{ asset('img/map-fter.png') }}" class="mb-2">
                        <div class="mb-3"><strong>@lang ('Address 1:')</strong> @lang ('30 N Gould St Ste R Sheridan, Wyoming 82801, USA')</div>
                        <div class="mb-3"><strong>@lang ('Address 2:')</strong> @lang ('2323 Main Street Irvine, CA 92614, U.S.A.')</div>
                        <div><strong>@lang ('Address 3:')</strong> @lang ('CX01 lot, Van Khe urban area, La Khe Ward, Ha Dong District, Hanoi, Vietnam')</div>
                    </li>
                    <li class="mb-4">
                        <img src="{{ asset('img/email-fter.png') }}" class="mb-2">
                        <div class="mb-1">
                            <a href="mailto:info@metawayholdings.com">info@metawayholdings.com</a>
                        </div>
                        <div>
                            <a href="mailto:info@metawayholdings.vn">info@metawayholdings.vn</a>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/global-fter.png') }}" class="mb-2">
                        <div class="mb-1">
                            <a href="https://www.metawayholdings.com">www.metawayholdings.com</a>
                        </div>
                        <div>
                            <a href="https://www.metawayholdings.vn">www.metawayholdings.vn</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="row justify-content-between">
                    <div class="col-md-3 col-6">
                        <h3 class="title">@lang ('About us')</h3>
                        <ul class="list-unstyled menuFooter">
                            <li><a href="{{ route('about') }}">@lang ('Overview')</a></li>
                            <li><a href="{{ route('about') }}">@lang ('Our Mission')</a></li>
                            <li><a href="{{ route('about') }}">@lang ('Our Vision')</a></li>
                            <li><a href="{{ route('about') }}">@lang ('Our Core Values')</a></li>
                            <li><a href="{{ route('about') }}">@lang ('Investment Sectors') </a></li>
                            <li><a href="{{ route('about') }}">@lang ('Our Ecosystem')</a></li>
                            <li><a href="{{ route('about') }}">@lang ('Holdings Members')</a></li>
                            <li><a href="{{ route('about') }}">@lang ('Our Executive Team')</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <h3 class="title">@lang ('Investor')</h3>
                        <ul class="list-unstyled menuFooter">
                            <li><a href="{{ route('investor.internal') }}">@lang ('Internal Report')</a></li>
                            <li><a href="{{ route('investor.finance') }}">@lang ('Annual Finance Report')</a></li>
                            <li><a href="{{ route('investor.sec-filing') }}">@lang ('Sec Filing')</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <h3 class="title">@lang ('Media')</h3>
                        <ul class="list-unstyled menuFooter">
                            <li><a href="{{ route('media.investor-news') }}">@lang ('Investor News')</a></li>
                            <li><a href="{{ route('media.news') }}">@lang ('News')</a></li>
                            <li><a href="{{ route('media.press') }}">@lang ('Press Release')</a></li>
                        </ul>
                    </div>
                    <div class="col-md-auto col-6">
                        <h3 class="title">
                            <a href="{{ route('contact') }}">@lang ('Contact')</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright small text-center">
            <p class="mb-1">@lang ('METAWAY Holdings.com is a proud part of METAWAY Holdings Inc., a leading business  services company.')</p>
            <p class="mb-0">@lang ('METAWAY Holdings.com is a Registered Trademark. © 2022 – 2027  All Rights Reserved')</p>
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
        margin: 20,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items: 5
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

