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

    <div class="sidebar">
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
    </div>
    <div class="container">
        <div class="main">
            <h1>All Job Offer Applications</h1>
            <h2>{{ $jobOffer->title }}</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>CV</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $application)
                        <tr>
                            <td>{{ $application->name }}</td>
                            <td>{{ $application->email }}</td>
                            <td><a href="{{ url('/storage/' . $application->cv) }}">Download</a></td>
                            <td>{{ $application->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
