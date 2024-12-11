<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo.png') }}" />
    <title>ඉskole</title>
</head>

<body>
    <!-- Banner Section -->
    <section id="banner">
        <div id="navbar">
            <nav>
                <ul class="nav_menu">
                    <!-- Navbar -->
                    <li><a href="{{ route('home') }}" class="active">Home</a></li>
                    <li><a href="{{route('Courses')}}">Courses</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li>
                        <a href="{{route('Login')}}"><button>Login</button></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="banner-text">
            <h1>ඉskole</h1>
            <p>Let's Learn New Things</p>
            <div class="banner-btn">
                <a href="{{route('about')}}"><span></span>LEARN MORE</a>
                <a href="{{route('Courses')}}"><span></span>SEE COURSE</a>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="Courses">
        <div class="title-text">
            <p>Popular Courses</p>
            <h4>
                Let's create educated citizens to create a prosperous
                society
            </h4>
        </div>

        <div class="courses-box">
            <div class="single-course">
                <img src="{{ asset('images/courseimg1.jpg') }}" alt="Course Image" />
                <div class="overlay"></div>
                <div class="courses-desc">
                    <h3><a href="#">Computer Engineering</a></h3>
                    <hr />
                    <p>
                        Computer engineer is also used to describe someone
                        who has a background in electrical engineering.
                        Engage engineers right now to seize growth
                        opportunities!
                    </p>
                </div>
            </div>

            <div class="single-course">
                <img src="{{ asset('images/courseimg2.jpg') }}" alt="Course Image" />
                <div class="overlay"></div>
                <div class="courses-desc">
                    <h3><a href="#">Social Media Network</a></h3>
                    <hr />
                    <p>
                        As a social media network manager, overseeing a
                        company's interactions with the public by
                        implementing social media platforms' content
                        strategies. In the "Social media network" course, we
                        cover all the techniques and basics.
                    </p>
                </div>
            </div>

            <div class="single-course">
                <img src="{{ asset('images/courseimg3.jpg') }}" alt="Course Image" />
                <div class="overlay"></div>
                <div class="courses-desc">
                    <h3><a href="#">Professional Graphic Designer</a></h3>
                    <hr />
                    <p>
                        This course covers all of the software used for
                        graphic design and techniques. We also strive to
                        improve your creativity. After completing the
                        course, you can freelance as a graphic designer on
                        Fiverr, Upwork, and more.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section id="footer">
        <div class="footer-list">
            <ul>
                <li class="footerli-head">Top Products</li>
                <li><a href="#">Managed Website</a></li>
                <li><a href="#">Manage Reputation</a></li>
                <li><a href="#">Power Tools</a></li>
                <li><a href="#">Marketing Service</a></li>
            </ul>
        </div>
        <div class="footer-list">
            <ul>
                <li class="footerli-head">Quick Links</li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Brand Assets</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>
        <div class="footer-list">
            <ul>
                <li class="footerli-head">Features</li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Brand Assets</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>
        <div class="footer-list">
            <ul>
                <li class="footerli-head">Resources</li>
                <li><a href="#">Guides</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Experts</a></li>
                <li><a href="#">Agencies</a></li>
            </ul>
        </div>
        <div class="news-letter">
            <h3>Newsletter</h3>
            <p>You can trust us. We only send promo offers.</p>
            <input
                type="email"
                name="email"
                id="email"
                autocomplete="email"
                placeholder="Your Email Address" />
            <button name="subbtn" id="subbtn" onclick="Subscribe()">
                SUBSCRIBE
            </button>
        </div>
    </section>
    <div class="footerlinks">
        <ul>
            <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </li>
        </ul>
    </div>
    <div class="copyright">
        <p>Copyright ©2024 All rights reserved | ඉskole</p>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>