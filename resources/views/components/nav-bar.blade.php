<header>
    <div class="top">METAWAY Holdings Roadmap 2022-2027 IPO $300 billion</div>
    <nav class="navbar navbar-expand-md bg-dark" > 
      <a class="navbar-brand d-md-none d-block" href="{{ route('home') }}">
            <img src="{{ asset('img/Logo-cmc.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-around align-items-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $isActive('home') }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $isActive('about') }}" href="{{ route('about') }}">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $isActive('investor') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Investor
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('investor.internal') }}">Internal Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('investor.finance') }}">Annual Finance Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('investor.sec-filing') }}">Sec Filing</a></li>
                    </ul>
                </li>
            </ul>
            <a class="navbar-brand d-none d-md-block" href="{{ route('home') }}">
                <img src="{{ asset('img/Logo-cmc.png') }}" alt="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $isActive('media') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Media
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('media.investor-news') }}">Investor News</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.news') }}">News</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.press') }}">Press Release</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $isActive('contact') }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if ( App::getLocale() === 'vi')
                        <img src="{{ asset('img/flagVN.png')}}" alt=""><i class="fas fa-angle-down arrowdown"></i>
                        @else
                            <img src="{{ asset('img/flagUSA.png')}}" alt=""><i class="fas fa-angle-down arrowdown"></i>
                        @endif
                        
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('localization.set', 'en') }}"><img src="{{ asset('img/flagUSA.png')}}" alt="" class="flag">EN</a></li>
                        <li><a class="dropdown-item" href="{{ route('localization.set', 'vi') }}"><img src="{{ asset('img/flagVN.png')}}" alt="" class="flag">VI</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
