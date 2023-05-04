<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/applications.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{-- <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/company/profile') }}">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/joboffers') }}">
                    our job offers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/applications') }}">
                    applications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Logout
                </a>
            </li>
        </ul>
    </div> --}}
    <div class="container">
        <h1>Applications for Job </h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Job Title</th>
                    <th>CV</th>
                    <th>Date Applied</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->user->name }}</td>
                    <td>{{ $application->title }}</td>

                    <td><a href="{{ Storage::url($application->cv) }}">{{ $application->cv }}</a></td>
                    <td>{{ $application->created_at->format('m/d/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>



</body>

</html>
