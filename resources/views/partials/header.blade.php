<header>
    <div class="header-bottom" style="background-color: #ffdd2a">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    {{-- <a href=" {{ route("homepage") }}"> --}}
                    <img src="{{ asset('images/LogoNovCom2.png') }}" alt="DC logo">
                    </a>
                </div>

                {{-- <div class="menu-header">
                    <nav>
                        <ul>
                            <li>
                                <a class="uppercase" href="#">Home</a>
                            </li>
                            <li>
                                <a class="uppercase active" href="#">Komik</a>
                            </li>
                            <li>
                                <a class="uppercase" href="#">Novel</a>
                            </li>
                            <li>
                                <a class="uppercase" href="#">Followed</a>
                            </li>
                        </ul>
                    </nav>

                </div> --}}

                {{-- <div class="search-bar">
                    <input type="search" name="" value="" placeholder="Search">
                </div> --}}
            </div>
        </div>

    </div>

    <div class="header-bottom" style="background-color: #ffffff">
        <div class="container">
            <div class="navbar">
                {{-- <div class="logo">
                    <img src="{{ asset('images/Blank.PNG') }}">
                </div> --}}
                <div class="menu-header">
                    <nav>
                        <ul>
                            <li>
                                <a class="uppercase {{ Request::route()->getName() == 'home' ? 'active' : '' }}"
                                    href="{{ url('/home') }}">Home</a>
                            </li>
                            <li>
                                <a class="uppercase {{ Request::route()->getName() == 'komik' ? 'active' : '' }}"
                                    href="{{ url('/komik') }}">Komik</a>
                            </li>
                            <li>
                                <a class="uppercase {{ Request::route()->getName() == 'novel' ? 'active' : '' }}"
                                    href="{{ url('/novel') }}">Novel</a>
                            </li>
                            <li>
                                <a class="uppercase {{ Request::route()->getName() == 'following' ? 'active' : '' }}"
                                    href="{{ url('/following') }}">Following</a>
                            </li>
                            {{-- <div class="logo">
                            <img src="{{ asset('images/Blank.PNG') }}">
                            </div> --}}
                        </ul>
                    </nav>
                </div>
                @auth
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                            <img src="" alt="Profile Picture">
                            <p>Profil</p>
                        </div>
                        <div class="menu">
                            <h3>{{ Auth::user()->name }}<br />
                                <ul>
                                    <li>
                                        <a href="{{ url('/profiles/user/user:username}') }}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/profiles/edit') }}">Edit profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/create/karya') }}">Buat Komik / Novel</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">Logout</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                @else
                    <div class="col-md-3 text-end">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
                    </div>
                @endauth
</header>
