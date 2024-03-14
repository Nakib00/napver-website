<body>
    {{--  <!-- Begin page -->  --}}
    <div id="wrapper">

        {{--  <!-- Topbar Start -->  --}}
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list topbar-dropdown">
                        <a id="dropdown-toggle" class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div id="dropdown-menu" class="dropdown-menu dropdown-menu-right profile-dropdown"
                            style="display: none;">
                            {{--  <!-- item-->  --}}
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
                            {{--  <!-- item-->  --}}
                            <a href="{{ route('profile.edit') }}" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            {{--  <!-- item-->  --}}
                            <form method="POST" action="{{ route('logout') }}" class="dropdown-item notify-item">
                                @csrf
                                <button type="submit" style="border: none; background: none; cursor: pointer;">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
                    <li>
                        {{--  <!-- Mobile menu toggle (Horizontal Layout)-->  --}}
                        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        {{--  <!-- End mobile menu toggle-->  --}}
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        {{--  <!-- end Topbar -->  --}}
        <script>
            document.getElementById("dropdown-toggle").addEventListener("click", function() {
                var dropdownMenu = document.getElementById("dropdown-menu");
                dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
            });
        </script>
