<header>
    <div class="top">@lang ('METAWAY Holdings Roadmap 2022-2027 IPO $300 billion')</div>
    <nav class="navbar navbar-expand-lg"> 
        <div class="container-xxl">
            <a class="navbar-brand d-lg-none d-block" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" width="220">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $isActive('home') }}" aria-current="page" href="{{ route('home') }}">@lang ('Home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $isActive('about') }}" href="{{ route('about') }}">@lang ('About us')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ $isActive('investor') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang ('Investor')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('investor.internal') }}">@lang ('Internal Report')</a></li>
                            <li><a class="dropdown-item" href="{{ route('investor.finance') }}">@lang ('Annual Finance Report')</a></li>
                            <!-- <li><a class="dropdown-item" href="{{ route('investor.sec-filing') }}">@lang ('Sec Filing')</a></li> -->
                        </ul>
                    </li>
                </ul>
                <a class="navbar-brand logoDesktop d-none d-lg-block" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ $isActive('media') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang ('Media')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('media.investor-news') }}">@lang ('Investor News')</a></li>
                            <li><a class="dropdown-item" href="{{ route('media.news') }}">@lang ('News')</a></li>
                            <li><a class="dropdown-item" href="{{ route('media.press') }}">@lang ('Press Release')</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $isActive('contact') }}" href="{{ route('contact') }}">@lang ('Contact')</a>
                    </li>
                    <li class="nav-item dropdown language">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if ( App::getLocale() === 'vi')
                            <img src="{{ asset('img/flagVN.png')}}" alt="">
                            @else
                                <img src="{{ asset('img/flagUSA.png')}}" alt="">
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('localization.set', 'en') }}"><img src="{{ asset('img/flagUSA.png')}}" alt="" class="flag">EN</a></li>
                            <li><a class="dropdown-item" href="{{ route('localization.set', 'vi') }}"><img src="{{ asset('img/flagVN.png')}}" alt="" class="flag">VI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
