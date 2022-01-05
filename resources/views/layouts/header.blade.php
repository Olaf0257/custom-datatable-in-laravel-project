<header class="header-area">
    <div class="session-notification" style="display: none;">
        <span class="title">AHORA</span>
        <a href="">
            Lorem ipsum dolor sit amet, c sed diam nonummy
        </a>
    </div>
    <div class="row pl-3 pr-3">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between" id="saasboxNav">
                <!-- Logo--><a class="nav-brand mr-0 mr-lg-5 logo" href="{{ url('/') }}"><img
                        src="{{ asset('img/logo_color.svg') }}" alt="Logo"></a>
                <!-- Navbar Toggler-->
                @auth
                    <div class="classy-navbar-toggler"><span class="navbarToggler"><i class="fa fa-bars"></i></span></div>
                @endauth
                <!-- Menu-->
                <div class="classy-menu">
                    <!-- close btn-->
                    <div class="classycloseIcon">
                        <div class="cross-wrap d-none"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start-->
                    <div class="classynav">
                        @auth
                            <ul id="corenav">
                                <li>
                                    <a href="#" class="loginbtn custom-color font-weight-800">
                                        <img width="50px" height="50px" src="{{ asset('img/core-img/user.png') }}"
                                            alt="User">
                                        {{ Auth::user()->name }}
                                        <i class="fas fa-caret-down ml-10 custom-color font-weight-800"></i>
                                    </a>
                                    <ul class="dropdown right-0 left-unset">
                                        @if(Auth::user()->usertype == "admin")
                                            <li class="custom-bg-color rounded-top-left rounded-top-right">
                                                <a href="/admin">
                                                    <i class="fa fa-home text-white"></i><span class="text-white">Panel administrador</span>
                                                </a>
                                            </li>
                                        @endif
                                        <li class="custom-bg-color rounded-bottom-left rounded-bottom-right">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out text-white"></i><span class="text-white">Logout</span>
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>