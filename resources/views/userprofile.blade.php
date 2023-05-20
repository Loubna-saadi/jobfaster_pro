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
@include('layouts.nav')
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
