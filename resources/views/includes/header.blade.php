<nav class="navbar navbar-expand-md navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <div class="logo_laravel">

            </div>
            <div class="d-flex align-items-center me-3">
                <h4><a class="nav-link @if (request()->routeIs('guest.home*')) active-txt @endif"
                        href="{{ route('guest.home') }}">Portfolio</a>
                </h4>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('admin.home')) active-txt @endif"
                        href="{{ route('admin.home') }}">Home</a>
                </li>
                @auth
                    <li>
                        <a class="nav-link @if (request()->routeIs('admin.projects*')) active-txt @endif"
                            href="{{ route('admin.projects.index') }}">Progetti</a>
                    </li>
                    <li>
                        <a class="nav-link @if (request()->routeIs('admin.types*')) active-txt @endif"
                            href="{{ route('admin.types.index') }}">Tipologie</a>
                    </li>
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-danger" href="{{ route('admin.types.trash') }}"><i
                                class="fa-solid fa-trash-can"></i>Tipologie</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-danger" href="{{ route('admin.projects.trash') }}"><i
                                class="fa-solid fa-trash-can"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-success" href="{{ route('admin.projects.create') }}">+</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ url('admin') }}">Home</a>
                            <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
