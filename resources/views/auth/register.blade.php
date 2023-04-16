<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section class="forms-section">
        <h1 class="section-title">Registration</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    sign up
                    <span class="underline"></span>
                </button>
                <form class="form form-login" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>look for a job?</h1>
                    <div class="circle">
                        <img src="{{ asset('images/default_prof.png') }}" alt="Profile picture">
                        <input type="file" id="profile-picture" name="photo" accept=".jpg,.jpeg,.png"
                            style="display: none;">
                        <button class="upload-btn" type="button"
                            onclick="document.getElementById('profile-picture').click()">Upload</button>
                    </div>
                    <fieldset>
                        <fieldset>
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
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="text" id="phone" name="phone" placeholder="Phone number"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" required autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="password" id="password" name="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="input-block">
                                <input type="file" id="file" name="file" accept=".pdf,.doc,.docx"
                                    placeholder="CV" class="form-control @error('file') is-invalid @enderror"
                                    value="{{ old('file') }}" required autocomplete="file">
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </fieldset>

                    </fieldset>
                    <button type="submit" class="btn-login">Register</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    company
                    <span class="underline"></span>
                </button>
                <form class="form form-signup" method="POST" action="{{ route('registercomp') }}">
                    @csrf
                    <h1>you are a company?</h1>
                    <div class="circle">
                        <img src="{{ asset('images/default_prof.png') }}" alt="Profile picture">
                        <input type="file" id="profile-picture" name="photo" accept=".jpg,.jpeg,.png"
                            style="display: none;">
                        <button class="upload-btn" type="button"
                            onclick="document.getElementById('profile-picture').click()">Upload</button>
                    </div>
                    <fieldset>
                        <fieldset>
                            <div class="input-block">
                                <input type="text" id="company_name" name="company_name"
                                    placeholder="Company Name"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" required autocomplete="company_name">
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="text" id="speciality" name="speciality" placeholder="Speciality"
                                    class="form-control @error('speciality') is-invalid @enderror"
                                    value="{{ old('speciality') }}" required autocomplete="speciality">
                                @error('speciality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="text" id="address" name="address" placeholder="Address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" required autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input type="password" id="password" name="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </fieldset>


                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>



    <script src="{{ asset('js/register.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
