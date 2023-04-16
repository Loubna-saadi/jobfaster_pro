<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">login</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    user
                    <span class="underline"></span>
                </button>
                <form class="form form-login">
                    <h1>look for a job?</h1>

                                <fieldset>
                                  <legend>Please, enter your email and password for login.</legend>
                                  <div class="input-block">
                                    <label for="login-email">E-mail</label><br>
                                    <input id="login-email" type="email" required>
                                  </div>
                                  <div class="input-block">
                                    <label for="login-password">Password</label><br>
                                    <input id="login-password" type="password" required>
                                  </div>
                                </fieldset>
                                <button type="submit" class="btn-login">Login</button>

                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    company
                    <span class="underline"></span>
                </button>
                <form class="form form-signup">
                    <h1>you are a company?</h1>


                        <fieldset>
                            <fieldset>
                                <legend>Please, enter your email and password for login.</legend>
                                <div class="input-block">
                                  <label for="login-email">E-mail</label><br>
                                  <input id="login-email" type="email" required>
                                </div>
                                <div class="input-block">
                                  <label for="login-password">Password</label><br>
                                  <input id="login-password" type="password" required>
                                </div>
                              </fieldset>
                              <button type="submit" class="btn-login">Login</button>

              </form>


            </div>
        </div>
    </section>



<script src="{{asset('js/register.js')}}"></script>

</body>

</html>
