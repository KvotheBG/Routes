<nav style="box-shadow: 0 2px 3px #343a40;" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand text-success font-weight-bold" href="{{ url('/') }}">
            <img class="navbar-logo" src="{{ asset('/images/logo.png') }}" width="34px" alt="app logo" draggable="false">
            {{ config('app.name', 'Travel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="{{ route('home') }}">@lang('home.home')</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="{{ route('about') }}">@lang('home.about_us')</a>
                </li>
                <li class="nav-item {{ Request::is('map') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="{{ route('map') }}">@lang('home.map')</a>
                </li>
                
                @if (Auth::check() && Auth::user()->role == 'admin')
                    <li class="nav-item {{ Request::is('manage') ? 'active' : '' }}">
                        <a class="nav-link menu-link" href="{{ route('manage') }}">@lang('home.manage')</a>
                    </li>
                @endif

                {{-- Language --}}
                <li><a href="locale/en">en</a></li>
                <li><a href="locale/fr">fr</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a style="padding: 8px 16px 8px 16px !important;" class="nav-link text-white bg-success" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-success " href="{{ route('register') }}">{{ __('auth.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-success nav-link-no-effect" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('auth.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>