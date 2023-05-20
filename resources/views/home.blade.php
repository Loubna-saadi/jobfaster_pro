<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-wWwBX/EyOhadkb8CW+ot4kOlyhB9w10B4L7WY68BIVPXvnQbE3rI86mDpkhy6W08kNnfeKsszDrGh48wacBMRg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="content">
        @include('layouts.nav')
        <div class="container">
            <h2>Discover your dream job</h2>
            <h3 class="two"> with JobFaser</h3>
            <h3>connecting you to top employers and opportunities</p>
            </h3>
            <input type="text" class="subscribe_barre" placeholder="email address or phone number">
            <button>subscribe</button>
        </div>
    </div>
    <img class="prof" src="/images/Prof1.PNG" alt="">

    </div>
</body>
@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>


</html>
