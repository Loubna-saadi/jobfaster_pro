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
    @include('layouts.nav')
    <h1>All Job Offers</h1>


    @foreach ($jobs as $job)
        <div class="job-offer">
            <div class="job-offer-header">
                <div class="profile-pic-container">
                    <img src="{{ asset($job->company->photo) }}" alt="Profile Picture" class="sidebar-profile-pic">
                </div>
                <h2>{{ $job->title }}</h2>
            </div>
            <div class="job-offer-content">
                <div class="job-details">
                    <p><strong>Location:</strong> {{ $job->location }}</p>
                    <p><strong>Type of Job:</strong> {{ $job->type_of_job }}</p>
                    <p><strong>Salary:</strong> {{ $job->salary }}</p>
                    <p><strong>Company:</strong> {{ $job->company->company_name }}</p>
                </div>
                <div class="job-description">
                    <h3>Description</h3>
                    <p>{{ $job->description }}</p>
                </div>
                <div class="job-requirements">
                    <h3>Requirements</h3>
                    <p>{{ $job->requirements }}</p>
                </div>
            </div>
            <div class="job-offer-footer">
                @if (Auth::check())
                    @php
                        $application = \App\Models\Application::where('user_id', auth()->user()->id)
                            ->where('job_id', $job->id)
                            ->first();
                    @endphp
                    @if ($application)
                        <button class="btn btn-success" disabled>Applied Successfully</button>
                    @else
                        <a href="{{ route('apply', ['job' => $job->id]) }}" class="btn btn-primary">Apply</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Apply</a>
                @endif
            </div>
        </div>
    @endforeach


</body>
<script src="{{ asset('js/jobs.js') }}"></script>

</html>
