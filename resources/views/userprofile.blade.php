<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
</head>
<body>
    <nav>

        <ul>
            <li><a class="logo" href="#0">JobFaster</a></li>
            <li><a href="#0">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="#0">employees</a></li>
            <li><a href="company.php">companies</a> </li>
            <li><a href="{{ url('/jobs') }}">jobs</a></li>

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
    <div class="row">
        <div class="col-md-3">
            <div class="profile-pic-container">
                <img src="{{ asset($user->photo) }}" alt="Profile Picture" class="sidebar-profile-pic">
            </div>
        </div>
        <div class="col-md-9">
            <h4>Username: {{ $user->name }}</h4>
            <h4>Email: {{ $user->email }}</h4>
            <h4>Phone: {{ $user->phone }}</h4>
            @if($user->file)
                <a href="{{ asset($user->file) }}" download>Download CV</a>
                {{-- <img src="{{ asset($user->file) }}" alt="CV" class="cv-image"> --}}
            @else
                <p>No CV uploaded</p>
            @endif
            {{-- <h4>Address: {{ $user->address }}</h4> --}}
            <hr>
            <h4>Update Profile</h4>
            <form class="update" action="{{ route('profile.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $user->name }}"><br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}"><br><br>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="{{ $user->phone }}"><br><br>
                <label for="file">CV:</label>
                <input type="file" name="file"><br><br>
                <input type="submit" value="Update">
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</html>
