<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
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
        <a href="">user</a>
        <a href="{{ url('/company') }}">company</a>
    </div>
    <section class="forms-section">

        <div class="forms">
            <div class="form-wrapper is-active">

                <form class="form form-login" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>look for a job?</h1>
                    <div class="circle">
                        <img src="{{ asset('images/default_prof.png') }}" alt="Profile picture">
                        <input type="file" id="profile-picture" name="photo" accept=".jpg,.jpeg,.png"
                            style="display: none;">
                        <button class="upload-btn" type="button"
                            onclick="document.getElementById('profile-picture').click()">Upload</button>
                    </div>
                    <fieldset>
                        <fieldset>
                            <div class="input-block">
                                <input type="text" id="name" name="name" placeholder="Username"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    required autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="text" id="phone" name="phone" placeholder="Phone number"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" required autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="password" id="password" name="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="input-block">
                                <input type="file" id="file" name="file" accept=".pdf,.doc,.docx"
                                    placeholder="CV" class="form-control @error('file') is-invalid @enderror"
                                    value="{{ old('file') }}" required autocomplete="file">
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </fieldset>

                    </fieldset>
                    <button type="submit" class="btn-login">Register</button>
                </form>
            </div>
</body>

</html>
