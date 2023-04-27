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
        <nav class="col-md-3 d-none d-md-block bg-light sidebar">
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
                        <a class="nav-link" href="#">
                            job requests
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

                                <button type="submit" class="btn btn-primary">Add Job Offer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Job Offers
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Salary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobOffers as $jobOffer)
                                        <tr>
                                            <td>{{ $jobOffer->title }}</td>
                                            <td>{{ $jobOffer->description }}</td>
                                            <td>{{ $jobOffer->requirements }}</td>
                                            <td>{{ $jobOffer->salary }}</td>
                                            <td>
                                                <form action="{{ route('joboffers.destroy', ['id' => $jobOffer->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
``
