<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<nav>

    <ul>
        <li><a class="logo" href="#0">JobFaster</a></li>
        <li><a href="#0">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="#0">employees</a></li>
        <li><a href="company.php">companies</a> </li>
        <li><a href="#0">jobs</a></li>

    </ul>
    <ul class="navbar-nav ms-auto">
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}" id="user"><i class="bi bi-person-fill"></i>login</a>
            @endif
            {{-- @if (Route::has('register')) --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            {{-- @endif --}}
        @else
            <li class="nav-item dropdown" style="list-style: none">
                <a id="navbarDropdown" class="a nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-user p-1"></i>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a style="margin-top:5px;color:black" class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
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

<body>
    <section class="forms-section">
        <div class="choose"><a href="{{ url('/login') }}">user</a>
            <a href="{{ url('/complogin') }}">company</a>
        </div>

        <div class="forms">
            <div class="form-wrapper is-active">
                <form class="form form-login" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>login</h1>

                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label><br>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label><br>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Login</button>
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                           

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>



    <script src="{{ asset('js/register.js') }}"></script>

</body>

</html>
