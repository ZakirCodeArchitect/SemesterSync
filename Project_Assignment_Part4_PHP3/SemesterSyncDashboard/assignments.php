<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['serialNumber'])) {
    // Redirect the user to the login page if not logged in
    header("Location: \SemesterSyncPrototype\tempindex2.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Semester Sync</title> <!-- Responsive Design Dashboard # 1 -->
</head>

<body>
    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <!-- <img src="images/linkedinProfile-400x400px.png" >-->
                    <h2>Semester<span class="primary">Sync</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="dashBoard.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="activity.php">
                    <span class="material-icons-sharp">
                        work_history
                    </span>
                    <h3>Activity</h3>
                </a>
                <a href="chats.php">
                    <span class="material-icons-sharp">
                        chat
                    </span>
                    <h3>chats</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="tempindex2.php">
                    <span class="material-icons-sharp">
                        school
                    </span>
                    <h3>Courses</h3>
                </a>
                <a href="assignments.php" class="active">
                    <span class="material-icons-sharp">
                        assignment
                    </span>
                    <h3>Assignments</h3>

                </a>
                <a href="calender.php">
                    <span class="material-icons-sharp">
                        schedule
                    </span>
                    <h3>calender</h3>
                </a>
                <a href="timetable.php">
                    <span class="material-icons-sharp">
                        date_range
                    </span>
                    <h3>Time Table</h3>
                </a>
                <a href="workspace.php">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Workspace</h3>
                </a>
                <a href="\SemesterSyncPrototype\logout.php" id="logout-btn">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>

            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Assignments</h1>
            <!-- Analyses -->
            <div class="analyse">
                <!-- <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Attendence</h3>
                            <h1>81%</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Assignments Submitted</h3>
                            <h1>90%</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>90%</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Obtained Marks</h3>
                            <h1>70%</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>70%</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- End of 6th semester analysis -->

            <!--  courses Section Section -->
            <div class="new-users">
                <h2>Courses</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/WAD.avif">
                        <h2>CS312</h2>
                        <p>WAD</p>
                    </div>
                    <div class="user">
                        <img src="images/ADA.avif">
                        <h2>CS313</h2>
                        <p>ADA</p>
                    </div>
                    <div class="user">
                        <img src="images/CCN.avif">
                        <h2>CS232</h2>
                        <p>CCN</p>
                    </div>
                    <div class="user">
                        <img src="images/TOA.avif">
                        <h2>CS333</h2>
                        <p>TOA</p>
                    </div>
                    <div class="user">
                        <img src="images/AI.jpg">
                        <h2>CS414</h2>
                        <p>AI</p>
                    </div>
                </div>
            </div>
            <!-- End of courses Section -->

            <!-- Resources  -->
            <div class="recent-orders">
                <!-- <h2>Resources</h2> -->
                <table>
                    <thead>
                        <tr>
                            <th>Lectures</th>
                            <th>Books</th>
                            <th>Slides</th>
                            <th>Refrences</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Resources -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Zakir</b></p>
                        <small class="text-muted">Student</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/Admin.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <!-- <div class="user-profile">
                <div class="logo">
                    <img src="images/linkedinProfile-400x400px.png">
                    <h2>Code Architect</h2>
                    <p>Fullstack Web Developer</p>
                </div>
            </div> -->

            <div class="reminders">
                <div class="header">
                    <h2>Courses</h2>
                    <!-- <span class="material-icons-sharp">
                        notifications_none
                    </span> -->
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Assignment # 1 WAD</h3>
                            <small class="text_muted">
                                17-03-2024 Deadline
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Lab</h3>
                            <small class="text_muted">
                                09:00 AM - 12:00 PM Tuesday
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script>
        document.getElementById("logout-btn").addEventListener("click", function() {
            window.location.href = "../desktop.html";
        });
    </script>
    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>