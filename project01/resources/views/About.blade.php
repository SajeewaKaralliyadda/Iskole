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
    <!-- Banner -->
    <section id="banner">
        <div id="navbar">
            <nav>
                <ul class="nav_menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('Courses') }}">Courses</a></li>
                    <li><a href="{{route('about') }}" class="active">About</a></li>
                    <li>
                        <a href="{{route('Login') }}"><button>Login</button></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="banner-text">
            <h1>About</h1>
            <p>Let's Learn New Things<br />_ඉskole</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="aboutcontent">
        <div class="title-text">
            <p>Who are we?</p>
            <h4>Let's create educated citizens to create a prosperous society</h4>
        </div>
        <p class="abouttext">
            Onlineguru is a preferred platform for online courses in web design,
            social media, and more. For these courses, we hire professionals to
            conduct them. We warmly welcome self-learners too. Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Praesentium consequuntur voluptate
            itaque commodi, corrupti ex libero, dolorem aliquid ullam temporibus
            nemo cumque numquam incidunt? Suscipit nemo ipsam vel nesciunt earum.
        </p>
    </section>

    <!-- Teachers Section -->
    <section id="teachers-banner">
        <div class="title-text">
            <p>Our Teachers</p>
            <h4>Let's create educated citizens to create a prosperous society</h4>
        </div>
        <div class="teachers-row">
            <div class="teachers-col">
                <div class="teacher">
                    <img src="{{ asset('images/t1.jpg') }}" alt="teacher 01" />
                </div>
                <div class="teacher-info">
                    <h3>George Andrew</h3>
                    <small>Lecturer of Web Design</small>
                </div>
                <p>
                    Studied at the "University of North Carolina." Also, the co-founder
                    of a "universal web designer." He had more than 20-year experience
                    as a Lecturer.
                </p>
                <div class="teacher-social">
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
                            <a href="#"><i class="fa fa-envelope-o"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="{{ asset('images/t2.jpg') }}" alt="teacher 02" />
                </div>
                <div class="teacher-info">
                    <h3>Matthieu Gomez</h3>
                    <small>Instructor of Graphic Design</small>
                </div>
                <p>
                    He had more than 08-year experience as a Lecturer. Also, He was Top
                    rated graphic design seller on "Fiverr and Upwork" platforms.
                </p>
                <div class="teacher-social">
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
                            <a href="#"><i class="fa fa-envelope-o"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="{{ asset('images/t3.jpg') }}" alt="teacher 03" />
                </div>
                <div class="teacher-info">
                    <h3>Danial Lewis</h3>
                    <small>Visiting Lecturer of Social Media Network</small>
                </div>
                <p>
                    Danial is currently working as a manager of the social media network
                    at ABC company. He visits us to do some modules.
                </p>
                <div class="teacher-social">
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
                            <a href="#"><i class="fa fa-envelope-o"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="teachers-col">
                <div class="teacher">
                    <img src="{{ asset('images/t4.jpg') }}" alt="teacher 04" />
                </div>
                <div class="teacher-info">
                    <h3>Jimmy Adam</h3>
                    <small>Seniour Lecturer of Computer System</small>
                </div>
                <p>
                    Studied at the "University of Perth." Also, he had more experience
                    working with leading IT companies. He has lot's of experience
                    working with students.
                </p>
                <div class="teacher-social">
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
                            <a href="#"><i class="fa fa-envelope-o"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location">
        <div class="title-text">
            <p>Our Location</p>
            <h4>Let's create educated citizens to create a prosperous society</h4>
        </div>
        <div class="aboutlocation">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.395115319391!2d79.83447611331941!3d6.926709086156205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593badd140d5%3A0xabf14e3453e710a9!2sGalle%20Face%20Ground!5e0!3m2!1sen!2slk!4v1681894811898!5m2!1sen!2slk"
                width="400"
                height="300"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        <div class="news-letter">
            <h3>Newsletter</h3>
            <p>You can trust us. We only send promotional offers.</p>
            <input type="email" id="email" placeholder="Your Email Address" />
            <button id="subbtn" onclick="subscribe()">SUBSCRIBE</button>
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