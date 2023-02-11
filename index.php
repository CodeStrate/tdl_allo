<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_tdl");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -------------- CSS ---------------- -->
    <link rel="stylesheet" href="style.css">

    <!-- --------- Boxicons CSS icons --------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="SU_Red.png" alt="SU">
                </span>
                <div class="text header-text">
                    <span class="name">Sushant University</span>
                    <span class="title">Student</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search-alt icon'></i>
                        <input type="text" placeholder="Search">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="home.php">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-sitemap icon'></i>
                            <span class="text nav-text">Courses</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-cart-alt icon'></i>
                            <span class="text nav-text">Enrolled</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-edit icon'></i>
                            <span class="text nav-text">Assignments</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-headphone icon'></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="logout-mode"><a href="form.html">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon' ></i>
                        <i class='bx bx-sun icon sun' ></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

   <!-- ------------------ Dash Section ----------------- -->
   <section class="dashboard">
    <div class="top">  
        <div class="search-bar">
            <i class='bx bx-search icon' ></i>
            <input type="text" placeholder="Search here...">        
        </div>

        <img src="images/profile.jpg" alt="profile">
    </div>

    <div class="dash-content">

        <div class="right">
            <div class="recent-updates">
                <div class="title">
                    <i class='bx bx-rotate-right'></i>
                    <span class="text">Recent Updates</span>
                </div>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/profile3.jpeg">
                        </div>
                        <div class="message">
                            <p><b>Abhijit Mandal</b> submitted his Health Law Assignment.</p>
                            <small class="text-muted">5 Minutes Ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/profile2.jpeg">
                        </div>
                        <div class="message">
                            <p><b>Shivam Sharma</b> uploaded a new Assignment for Social Media Marketing.</p>
                            <small class="text-muted">1 Hour Ago</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="analytics">
                <div class="title">
                    <i class='bx bx-bar-chart-alt-2'></i>
                    <span class="text">Analytics</span>
                </div>
                <div class="assign">
                    <i class='bx bx-book-content' ></i>
                    <div class="right">
                        <div class="info">
                            <h3>Ongoing Work</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="doing">...15 Marks</h5>
                        <h3>Report</h3>
                    </div>
                </div>

                <div class="assign pending">
                    <i class='bx bx-bookmark-alt' ></i>
                    <div class="right">
                        <div class="info">
                            <h3>Pending Work</h3>
                            <small class="text-muted">Last 72 Hours</small>
                        </div>
                        <h5 class="pending">~60 Marks</h5>
                        <h3>Website</h3>
                    </div>
                </div>

                <div class="assign done">
                    <i class='bx bxs-book-open' ></i>
                    <div class="right">
                        <div class="info">
                            <h3>Completed Work</h3>
                            <small class="text-muted">Last 1 Week</small>
                        </div>
                        <h5 class="done">+40 Marks</h5>
                        <h3>Practical File</h3>
                    </div>
                </div>
            </div>

        </div>

        <div class="overview">
            <div class="title">
                <i class='bx bx-tachometer'></i>
                <span class="text">Quick Insights</span>
            </div>

            <div class="cards">
                <!-- start of card 1 -->
                <div class="attendence">
                    <i class='bx bx-notepad'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Attendence</h3>
                            <h1>36 out of 40</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>90%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of card 1 -->

                <!-- start of card 2 -->
                <div class="course">
                    <i class='bx bx-chalkboard'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Course Completion</h3>
                            <h1>6 of 12 Lectures</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of card 2 -->

                <!-- start of card 3 -->
                <div class="assignment">
                    <i class='bx bx-edit'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Assignments Done</h3>
                            <h1>3 of 5</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>60%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of card 3 -->
            </div>
        </div>
        <!-- end of cards -->

        <div class="activity">
            <div class="title">
                <i class='bx bx-time'></i>
                <span class="text">Recent Activity</span>
            </div>

            <div class="activity-data">
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Lecture Attended</th>
                            <th>Assignments</th>
                            <th>Submission Status</th>
                            <th>Performance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Social Media Marketing</td>
                            <td>Yes</td>
                            <td>Performance Marketing</td>
                            <td class="warning done">Submitted 2022-11-22</td>
                            <td class="grade best">Excellent</td>
                        </tr>

                        <tr>
                            <td>Social Media Marketing</td>
                            <td>Yes</td>
                            <td>Case Study : Netflix</td>
                            <td class="warning pending">Pending 2022-11-10</td>
                            <td class="grade good">Very Good</td>
                        </tr>

                        <tr>
                            <td>Web Development</td>
                            <td>Yes</td>
                            <td>Javascript</td>
                            <td class="warning done">Submitted 2022-10-24</td>
                            <td class="grade best">Excellent</td>
                        </tr>

                        <tr>
                            <td>Fashion Design</td>
                            <td>No</td>
                            <td>Case Study: GUCCI</td>
                            <td class="warning done">Submitted 2022-10-22</td>
                            <td class="grade good">Good</td>
                        </tr>

                        <tr>
                            <td>Health Law</td>
                            <td>Yes</td>
                            <td>Rights to Individual Health</td>
                            <td class="warning done">Submitted 2022-11-22</td>
                            <td class="grade best">Excellent</td>
                        </tr>

                        <tr>
                            <td>Cyber Security</td>
                            <td>No</td>
                            <td>Penetration Testing</td>
                            <td class="warning pending">Pending 2022-11-30</td>
                            <td class="grade avg">Average</td>
                        </tr>

                        <tr>
                            <td>Fashion Design</td>
                            <td>Yes</td>
                            <td>Basics of Fashion: Girls</td>
                            <td class="warning bad">Pending 2022-08-21</td>
                            <td class="grade bad">Bad</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All Recent Activities</a>
            </div>
        </div>
    </div>
    
   </section>

    <!-- --------------- JS Script --------------- -->
    <script src="main.js"></script>
</body>
</html>