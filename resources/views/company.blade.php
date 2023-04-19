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
        <a href="{{ url('/register') }}">user</a>
        <a href="{{ url('/company') }}">company</a>
    </div>
    <form class="form form-signup" method="POST" action="{{ route('registercomp') }}" enctype="multipart/form-data">
        @csrf
        <h1>you are a company?</h1>
        <div class="circle">
            <img src="{{ asset('images/default_prof.png') }}" alt="Profile picture">
            <input type="file" id="photo" name="photo" required
                style="display: none;">
            <button class="upload-btn" type="button"
                onclick="document.getElementById('photo').click()">Upload</button>
        </div>
        <fieldset>
            <fieldset>
                <div class="input-block">
                    <input type="text" id="company_name" name="company_name"
                        placeholder="Company Name"
                        class="form-control @error('company_name') is-invalid @enderror"
                        value="{{ old('company_name') }}" required autocomplete="company_name">
                    @error('company_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-block">
                    <input type="text" id="speciality" name="speciality" placeholder="Speciality"
                        class="form-control @error('speciality') is-invalid @enderror"
                        value="{{ old('speciality') }}" required autocomplete="speciality">
                    @error('speciality')
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
                    <input type="text" id="address" name="address" placeholder="Address"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address') }}" required autocomplete="address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-block">
                    <input type="text" id="phone" name="phone" placeholder="Phone Number"
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
            </fieldset>


        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
    </form>

</div>
</section>





</body>

</html>
