<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('css/joboffers.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job Offer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('joboffers.css') }}">

</head>

<body>
    <div class="row">
        <nav class="sidebar">
            <div class="sidebar-sticky">
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
        </nav>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Add Job Offer
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('joboffers.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="requirements">Requirements</label>
                                    <textarea class="form-control" id="requirements" name="requirements"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="salary">salary</label>
                                    <textarea class="form-control" id="salary" name="salary"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location">
                                </div>

                                <div class="form-group">
                                    <label for="type_of_job">Type of job</label>
                                    <select class="form-control" id="type_of_job" name="type_of_job">
                                        <option value="Full time job">Full time job</option>
                                        <option value="Part time job">Part time job</option>
                                        <option value="Internship">Internship</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Freelance">Freelance</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Job Offer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">

               <h1>  Job Offers</h1>



                <div class="card-body">
                    @foreach ($jobOffers as $job)
                        <div class="job-offer">
                            <div class="job-offer-header">
                                <div class="profile-pic-container">
                                    <img src="{{ asset($job->company->photo) }}" alt="Profile Picture"
                                        class="sidebar-profile-pic">
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
                                <form action="{{ route('joboffers.destroy', ['id' => $job->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>
</body>
<script src="{{ asset('js/jobs.js') }}"></script>

</html>
``
