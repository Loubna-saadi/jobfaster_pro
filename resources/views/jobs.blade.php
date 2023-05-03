<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/jobs.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <h1>All Job Offers</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>logo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Requirements</th>
                    <th>Salary</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td><div class="profile-pic-container">
                            <img src="{{ asset($job->company->photo) }}" alt="Profile Picture" class="sidebar-profile-pic">
                        </div></td>
                        <td>{{ $job->title }}</td>
                        <td>
                            <p class="job-description">{{ $job->description }}</p>
                            <button class="toggle-description">Show More</button>
                        </td>
                        <td>
                            <p class="job-requirements">{{ $job->requirements }}</p>
                            <button class="toggle-requirements">Show More</button>
                        </td>
                        <td>{{ $job->salary }}</td>
                        <td>{{ $job->company->company_name }}</td>

                         @if(Auth::check())
            @php
                $application = \App\Models\Application::where('user_id', auth()->user()->id)->where('job_id', $job->id)->first();
            @endphp
            <td>
                @if($application)
                    <button class="btn btn-success" disabled>Applied Successfully</button>
                @else
                    <a href="{{ route('apply', ['job' => $job->id]) }}" class="btn btn-primary">Apply</a>
                @endif
            </td>
        @else
            <td><a href="{{ route('login') }}" class="btn btn-primary">Apply</a></td>
        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>

</body>
<script src="{{ asset('js/jobs.js') }}"></script>
</html>

