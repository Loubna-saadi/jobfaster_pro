<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@include('layouts.nav')

<body>
    <div class="choose">
        <a href="">user</a>
        <a href="{{ url('/company') }}">company</a>
    </div>


    <form class="form form-login" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <h1>look for a job?</h1>
        <div class="circle">
            <img src="{{ asset('images/default_prof.png') }}" alt="Profile picture">
            <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png" style="display: none;"
                required>
            <button class="upload-btn" type="button" onclick="document.getElementById('photo').click()">Upload</button>
        </div>


                <div class="input-row">

                    <div class="input-block">
                        <input type="text" id="name" name="name" placeholder="Username"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            required autocomplete="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-block">
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-row">
                    <div class="input-block">
                        <input type="text" id="phone" name="phone" placeholder="Phone number"
                            class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                            required autocomplete="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-block">
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                            required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-row">
                    <div class="input-block">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                    <div class="input-block">
                        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx" placeholder="CV"
                            class="form-control @error('file') is-invalid @enderror" value="{{ old('file') }}"
                            required autocomplete="file">
                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


        <button type="submit" class="btn-login">Register</button>
    </form>


</body>

</html>
