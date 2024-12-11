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
                    <li><a href="{{route('home')}}" class="active">Home</a></li>
                    <li><a href="{{route('Courses') }}">Courses</a></li>
                    <li><a href="{{route('about') }}">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="form_box">
            <form class="login_form" action="{{ route('login.post') }}" method="post">
                @csrf
                <!-- Email field -->
                <div class="input_box">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter email address"
                        required />
                </div>

                <!-- Password field -->
                <div class="input_box">
                    <div class="password_title">
                        <label for="password">Password</label>
                        <a href="{{ route('Forgotpw') }}">Forgot Password?</a>
                    </div>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required />
                </div>

                <!-- Submit button -->
                <button type="submit">Log In</button>

                <!-- Signup link -->
                <p class="sign_up">
                    Don't have an account? <a href="{{route('Signup') }}">Sign up</a>
                </p>
            </form>
        </div>
    </section>
</body>

</html>