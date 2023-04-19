<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/companydashbord.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid">
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
                            <a class="nav-link" href="#">
                                our job offers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Settings
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

            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">company Profile</h1>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-pic-container">
                            <img src="{{asset($company->photo)}}" alt="Profile Picture" class="sidebar-profile-pic">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h4>company_name: {{ $company->company_name }}</h4>
                        <h4>Email: {{ $company->email }}</h4>
                        <h4>Phone: {{ $company->phone }}</h4>
                        <h4>Address: {{ $company->address }}</h4>
                        <p></p>
                        <p></p>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-1j88tX9/0+epd5n5H5Y5RbRJn5gZaDjsv+odztHAPwoX9q3n/V/B+EnWhpgM6f12"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
