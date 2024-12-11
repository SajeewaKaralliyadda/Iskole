<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="Assets/Logo.png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- CSS Libraries -->
    <link
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet" />
    <link href="lib/slick/slick.css" rel="stylesheet" />
    <link href="lib/slick/slick-theme.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="style1.css" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <div id="navbar">
        <nav>
            <ul class="nav_menu">
                <!-- Navbar -->
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="Courses.html">Courses</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </div>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="/Assets/Logo.png" alt="Image" />
            </div>
            <div class="sidebar-content">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">Navigation</a>
                    <button
                        type="button"
                        class="navbar-toggler"
                        data-toggle="collapse"
                        data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#header">Dashboard <i class="fas fa-columns"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#courses">Courses <i class="fas fa-graduation-cap"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact <i class="fas fa-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="#"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
        <div class="content">
            <!-- Dashboard Section -->
            <div class="header" id="header">
                <div class="content-inner">
                    <p>Hello,</p>
                    <h1 id="user-name"></h1>
                    <hr />

                    <div class="content-header">
                        <h2>Your Dashboard</h2>
                    </div>
                    <div id="student-dashboard">
                        <h3>Enrolled Courses:</h3>
                        <div id="dashboard-courses"></div>
                    </div>
                </div>
            </div>
            <!-- Make a gap Start -->
            <div class="large-btn">
                <div class="content-inner"></div>
            </div>
            <!-- Make a gap End -->

            <!-- Courses Section -->
            <div class="about" id="courses">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Available Courses</h2>
                    </div>
                    <div class="row" id="course-tab">
                        <!-- Courses will be dynamically added here -->
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact" id="contact">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Contact</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <p>
                                    <i class="fa fa-user"></i> Name:
                                    <span id="user-contact-name">Loading...</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope"></i> Email:
                                    <span id="user-contact-email">Loading...</span>
                                </p>
                                <form id="update-contact-form">
                                    <div class="form-group">
                                        <label for="user-phone"><i class="fa fa-phone"></i> Phone Number:</label>
                                        <input
                                            type="text"
                                            id="user-phone"
                                            class="form-control"
                                            placeholder="Enter your phone number" />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-address"><i class="fa fa-map-marker"></i> Address:</label>
                                        <input
                                            type="text"
                                            id="user-address"
                                            class="form-control"
                                            placeholder="Enter your address" />
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        onclick="updateContactInfo()">
                                        Update Contact
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="content-inner">
                    <div class="row align-items-center">
                        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Main Javascript -->
    <script>
        //dashboard js courses update
        // Mock user session
        const loggedInUser = {
            name: "John Doe",
            isLoggedIn: true
        };

        // Mock courses
        const courses = [{
                id: 1,
                name: "Mathematics 101"
            },
            {
                id: 2,
                name: "History of Art"
            },
            {
                id: 3,
                name: "Introduction to Programming"
            },
        ];
        let enrolledCourses = [];

        // Check user login status
        document.addEventListener("DOMContentLoaded", () => {
            if (!loggedInUser || !loggedInUser.isLoggedIn) {
                window.location.href = "login.html"; // Redirect to login page
            } else {
                document.getElementById("user-name").innerText = loggedInUser.name;
            }

            renderCourses();
            updateDashboard();
        });

        // Render available courses
        function renderCourses() {
            const courseTab = document.getElementById("course-tab");
            courseTab.innerHTML = "";
            courses.forEach((course) => {
                const courseDiv = document.createElement("div");
                courseDiv.className = "col-md-4 mb-3";
                courseDiv.innerHTML = `
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">${course.name}</h5>
              <button class="btn btn-primary" onclick="enrollInCourse(${course.id})">Enroll</button>
            </div>
          </div>
        `;
                courseTab.appendChild(courseDiv);
            });
        }

        // Enroll in course
        function enrollInCourse(courseId) {
            const course = courses.find((c) => c.id === courseId);
            if (course && !enrolledCourses.includes(course)) {
                enrolledCourses.push(course);
                updateDashboard();
            }
        }

        // Unenroll from course
        function unenrollFromCourse(courseId) {
            enrolledCourses = enrolledCourses.filter((c) => c.id !== courseId);
            updateDashboard();
        }

        // Update dashboard
        function updateDashboard() {
            const dashboardCourses = document.getElementById("dashboard-courses");
            dashboardCourses.innerHTML = "";
            enrolledCourses.forEach((course) => {
                const courseDiv = document.createElement("div");
                courseDiv.className = "mb-2";
                courseDiv.innerHTML = `
          ${course.name}
          <button class="btn btn-danger btn-sm ml-2" onclick="unenrollFromCourse(${course.id})">Unenroll</button>
        `;
                dashboardCourses.appendChild(courseDiv);
            });
        }
        // Mock backend data
        const userContactInfo = {
            name: "John Doe",
            email: "john.doe@example.com",
            phone: "+123-456-7890",
            address: "123 Street, Los Angeles, CA, USA",
        };

        document.addEventListener("DOMContentLoaded", () => {
            // Load contact info on page load
            loadContactInfo();
        });

        function loadContactInfo() {
            // Mock fetching from the backend
            setTimeout(() => {
                document.getElementById("user-contact-name").innerText =
                    userContactInfo.name;
                document.getElementById("user-contact-email").innerText =
                    userContactInfo.email;
                document.getElementById("user-phone").value =
                    userContactInfo.phone || "";
                document.getElementById("user-address").value =
                    userContactInfo.address || "";
            }, 500); // Simulate network delay
        }

        function updateContactInfo() {
            // Collect updated data
            const updatedPhone = document.getElementById("user-phone").value;
            const updatedAddress = document.getElementById("user-address").value;

            // Mock updating to the backend
            setTimeout(() => {
                userContactInfo.phone = updatedPhone;
                userContactInfo.address = updatedAddress;
                alert("Contact information updated successfully!");
            }, 500); // Simulate network delay
        }
    </script>
</body>

</html>