{{--

<footer class="footer">
    <div class="foot">
        <div class="row">
            <div class="col-lg-4">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu lacus justo. Aliquam erat volutpat.
                    Suspendisse potenti.</p>
            </div>
            <div class="col-lg-4">
                <h5>Contact</h5>
                <p>Email: info@example.com</p>
                <p>Phone: +1 123-456-7890</p>
            </div>
            <div class="col-lg-4">
                <h5>Follow Us</h5>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-f"></i>facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> --}}

<footer class="section-p1">
    <div class="cole">
        <br>
        <h4>Contact</h4>
        <p><strong>Address:</strong>........................</p>
        <p><strong>Phone:</strong>........................</p>
        <p><strong>Hours:</strong>..:.. - ..:.. , ... - ...</p>
        <br>
    </div>
    <div class="cole about">
        <h4>About</h4>
        {{-- <a href="{{route('about')}}">About Us</a> --}}
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quae vero fuga pariatur deleniti. Ad
            iusto dolorem natus eum qui harum blanditiis itaque, suscipit in quisquam vitae vero laboriosam quos?</p>
        {{-- <a href="{{route('contact')}}">Contact Us</a> --}}
    </div>
    <div class="cole account">
        <h4>My Account</h4>
        <a href="{{ route('login') }}">Sign In</a>
        <a href="{{ route('register') }}">Sign Up</a>
        <a href="{{ route('complogin') }}">My Company</a>
        <a href="#">Jobs</a>
        <a href="#">About</a>
    </div>

    <div class=" cole follow">
        <h4>Follow Us</h4>
        <div class="icon">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-pinterest"></i></a>
        </div>
    </div>
    <div class="copyright">
        <strong>&copy; Copy Right {{ date('Y') }}. All Rights Reserved</strong>
    </div>
</footer>
