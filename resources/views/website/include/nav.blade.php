<body>
    {{--  <!-- ======= Header ======= -->  --}}
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            {{--  <!-- Uncomment below if you prefer to use an image logo -->  --}}
            <a href="{{ route('index') }}" class="logo logocoutomecolor"><img src="{{ asset('assets\img\logo\nepverlogo.png') }}"
                    alt="" class="img-fluid" /></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
                    <li>
                        <a class="nav-link scrollto" href="{{ route('index') }}#services">Services</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="{{ route('protfolio.page') }}">Portfolio</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="{{ route('teams.index') }}">Team</a>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact</a></li>
                    {{-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            {{--  <!-- .navbar -->  --}}
        </div>
    </header>
    {{--  <!-- End Header -->  --}}
