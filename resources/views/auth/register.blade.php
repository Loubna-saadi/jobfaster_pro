<!DOCTYPE html>
<html lang="en">
<head>
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
                <form class="form form-login">
                    <h1>look for a job?</h1>
                    <div class="circle">
                        <img src="{{asset('images/default_prof.png')}}" alt="Profile picture">
                        <input type="file" id="profile-picture" name="photo" accept=".jpg,.jpeg,.png"
                            style="display: none;">
                        <button class="upload-btn" type="button"
                            onclick="document.getElementById('profile-picture').click()">Upload</button>
                    </div>
                    <fieldset>
                        <fieldset>
                            <div class="input-block">
                                <input type="text" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="input-block">
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-block">
                                <input type="text" id="phone" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="input-block">
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="input-block">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                            </div>
                            <div class="input-block">
                                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" placeholder="CV" required>
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
                <form class="form form-signup">
                    <h1>you are a company?</h1>
                    <div class="circle">
                        <img src="{{asset('images/default_prof.png')}}" alt="Profile picture">
                        <input type="file" id="profile-picture" name="photo" accept=".jpg,.jpeg,.png"
                            style="display: none;">
                        <button class="upload-btn" type="button"
                            onclick="document.getElementById('profile-picture').click()">Upload</button>
                    </div>
                    <fieldset>
                        <fieldset>
                            <div class="input-block">
                                <input type="text" id="company_name" name="company_name" placeholder="Company Name" required>
                            </div>
                            <div class="input-block">
                                <input type="text" id="speciality" name="speciality" placeholder="Speciality" required>
                            </div>
                            <div class="input-block">
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-block">
                                <input type="text" id="address" name="address" placeholder="Address" required>
                            </div>
                            <div class="input-block">
                                <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="input-block">
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="input-block">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                            </div>
                        </fieldset>


                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>



<script src="{{asset('js/register.js')}}"></script>

</body>

</html>
