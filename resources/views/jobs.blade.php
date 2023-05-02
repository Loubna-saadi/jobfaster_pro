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

