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
    <link rel="icon" type="image/x-icon" href="images/Logo.png" />
    <title>ඉskole</title>
</head>

<body>
    <!-- Banner Section -->
    <section id="banner">
        <div id="navbar">
            <nav>
                <ul class="nav_menu">
                    <!-- Navbar -->
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{ route('Courses') }}" class="active">Courses</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li>
                        <a href="{{route('Login')}}"><button>Login</button></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="banner-text">
            <h1>Courses</h1>
            <p>Let's Learn New Things<br />_ඉskole</p>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="teachers-banner">
        <div class="title-text">
            <p>Our Courses</p>
            <h4>Let's Learn New Things</h4>
        </div>
        <div class="teachers-row">
            <!-- Teacher 1 -->
            <div class="teachers-col">
                <div class="teacher">
                    <img src="{{ asset('images/img-4.jpg') }}" alt="Teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>Computer Engineering</h3>
                    <small></small>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae sequi excepturi saepe architecto corporis et sit earum.
                    Pariatur? <br /><br />
                </p>
                <div class="teacher-social">
                    <ul>
                        <li>
                            <button class="course_btn">View</button>
                        </li>
                        <li>
                            <button class="course_btn">Enroll</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="Images/img-5.jpg" alt="Teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>Project management</h3>
                    <small></small>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae sequi excepturi saepe architecto corporis et sit earum.
                    Pariatur? <br /><br />
                </p>
                <div class="teacher-social">
                    <ul>
                        <li>
                            <button class="course_btn">View</button>
                        </li>
                        <li>
                            <button class="course_btn">Enroll</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="Images/img-5.jpg" alt="Teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>Data Science</h3>
                    <small></small>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae sequi excepturi saepe architecto corporis et sit earum.
                    Pariatur? <br /><br />
                </p>
                <div class="teacher-social">
                    <ul>
                        <li>
                            <button class="course_btn">View</button>
                        </li>
                        <li>
                            <button class="course_btn">Enroll</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="Images/img-4.jpg" alt="Teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>AI for Everyone</h3>
                    <small></small>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae sequi excepturi saepe architecto corporis et sit earum.
                    Pariatur? <br /><br />
                </p>
                <div class="teacher-social">
                    <ul>
                        <li>
                            <button class="course_btn">View</button>
                        </li>
                        <li>
                            <button class="course_btn">Enroll</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="Images/img-5.jpg" alt="Teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>Android development</h3>
                    <small></small>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae sequi excepturi saepe architecto corporis et sit earum.
                    Pariatur? <br /><br />
                </p>
                <div class="teacher-social">
                    <ul>
                        <li>
                            <button class="course_btn">View</button>
                        </li>
                        <li>
                            <button class="course_btn">Enroll</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="Images/img-4.jpg" alt="Teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>Computer Engineering</h3>
                    <small></small>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae sequi excepturi saepe architecto corporis et sit earum.
                    Pariatur? <br /><br />
                </p>
                <div class="teacher-social">
                    <ul>
                        <li>
                            <button class="course_btn">View</button>
                        </li>
                        <li>
                            <button class="course_btn">Enroll</button>
                        </li>
                    </ul>
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