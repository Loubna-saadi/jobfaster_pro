<nav>
<ul><li><a class="logo" href="{{ url('/') }}">JobFaster</a></li></ul>
    <ul class="navies">

        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        {{-- <li><a href="#0">employees</a></li> --}}
        <li><a href="company.php">companies</a> </li>
        <li><a href="{{ url('/jobs') }}">jobs</a></li>

    </ul>
    <ul class="navbar-nav ms-auto">
        @guest
            @if (Route::has('login'))

                <a href="{{ route('login') }}" id="user"><i class="bi bi-person-fill"></i>login</a>
            @endif
            {{-- @if (Route::has('register')) --}}

                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

            {{-- @endif --}}
        @else
            <li class="nav-item dropdown" style="list-style: none">
                <a id="navbarDropdown" class="a nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-user p-1"></i>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a style="margin-top:5px;color:black" class="dropdown-item" href="{{ route('userprof') }}"
                    style="color:black">
                    Profile
                </a>
                    <a style="margin-top:5px;color:black" class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        style="color:black">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>




</nav>
