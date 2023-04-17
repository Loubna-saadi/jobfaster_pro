<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
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
    <div class="choose">
        <a href="{{ url('/login') }}">user</a>
        <a href="{{ url('/complogin') }}">company</a>
    </div>
     <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    company
                    <span class="underline"></span>
                </button>
                <form class="form form-signup">
                    <h1>you are a company?</h1>


                        <fieldset>
                            <fieldset>
                                <legend>Please, enter your email and password for login.</legend>
                                <div class="input-block">
                                  <label for="login-email">E-mail</label><br>
                                  <input id="login-email" type="email" required>
                                </div>
                                <div class="input-block">
                                  <label for="login-password">Password</label><br>
                                  <input id="login-password" type="password" required>
                                </div>
                              </fieldset>
                              <button type="submit" class="btn-login">Login</button>

              </form>


            </div>

</div>
</section>





</body>

</html>
