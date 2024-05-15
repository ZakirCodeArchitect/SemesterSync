<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['serialNumber'])) {
    // Redirect the user to the login page if not logged in
    header("Location: \SemesterSyncPrototype\Login.html");
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
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        school
                    </span>
                    <h3>Courses</h3>
                </a>
                <a href="assignments.php">
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
            <h1>6th semester</h1>
            <!-- Analyses -->
            <!-- <div class="analyse">
                <div class="sales">
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
                </div>
                <div class="visits">
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
                </div>
                <div class="searches">
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
                </div>
            </div> -->
            <!-- End of 6th semester analysis -->

            <?php


            // Assuming you have already established a database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "semestersyncusersdb";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch courses from the database
            $sql = "SELECT * FROM courses";
            $result = mysqli_query($conn, $sql);

            // Check if there are any courses
            // if (mysqli_num_rows($result) > 0) {
            //     echo '<div class="new-users">
            //             <h2>Courses</h2>
            //             <div class="user-list">';
            //     // Loop through each row in the result set
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         // Output HTML for each course
            //         echo '<div class="user">
            //         <img src="' . $row['courseName'] . '">
            //         <h2>' . $row['courseCode'] . '</h2>
            //         <p>' . $row['semester'] . '</p>
            //         </div>';
            //     }
            //     echo '</div></div>';
            // } else {
            //     // No courses found
            //     echo "No courses found";
            // }

            // // Close the database connection
            // mysqli_close($conn);


            ?>



            <div class="container">
                <!-- Sidebar Section -->
                <!-- Your sidebar code here -->
                <!-- End of Sidebar Section -->

                <!-- Course new Content -->
                <div class="new-users">
                    <h2>Courses</h2>
                    <div class="user-list">
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="user">';

                                /* -> First fetching the image from the database and then changing its datatyoe to display it properly  */
                                // Assuming 'image' is the name of your BLOB column
                                $imageData = $row['courseIcon'];

                                // Convert binary data to base64-encoded string
                                $imageBase64 = base64_encode($imageData);

                                // Generate HTML image tag with base64-encoded data
                                echo '<img src="data:image/jpeg;base64,' . $imageBase64 . '" />';

                                // echo '<img src="images/WAD.avif">';  
                                // echo '<img src="images/' . $row["courseIcon"] . '.avif">';
                                echo '<h2 class="coursecode">' . $row["courseCode"] . '</h2>';
                                echo '<p class="coursename">' . $row["courseName"] . '</p>';
                                echo '<p class="semester">' . $row["semester"] . '</p>';
                                echo '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </div>
                </div>
                <!--  courses Section Section -->
                <!-- <div class="new-users">
                <h2>Courses</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/WAD.avif">
                        <h2 class="coursecode">CS312</h2>
                        <p class="coursename">WAD</p>
                        <p class="semester">6 Semester</p>

                    </div>
                    <div class="user">
                        <img src="images/ADA.avif">
                        <h2 class="coursecode">CS313</h2>
                        <p class="coursename">ADA</p>
                        <p class="semester">6 Semester</p>
                    </div>
                    <div class="user">
                        <img src="images/CCN.avif">
                        <h2 class="coursecode">CS232</h2>
                        <p class="coursename">CCN</p>
                        <p class="semester">6 Semester</p>
                    </div>
                    <div class="user">
                        <img src="images/TOA.avif">
                        <h2 class="coursecode">CS333</h2>
                        <p class="coursename">TOA</p>
                        <p class="semester">6 Semester</p>
                    </div>
                    <div class="user">
                        <img src="images/AI.jpg">
                        <h2 class="coursecode">CS414</h2>
                        <p class="coursename">AI</p>
                        <p class="semester">6 Semester</p>
                    </div>
                </div>
            </div> -->
                <!-- End of courses Section -->

                <!-- Resources  -->

                <?php
                $uploadMessage = "";

                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
                    // Database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "semestersyncusersdb";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Check if a file is uploaded
                    if ($_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
                        $fileName = $_FILES['pdfFile']['name'];
                        $fileTmpName = $_FILES['pdfFile']['tmp_name'];

                        // Read the file content
                        $fileContent = file_get_contents($fileTmpName);

                        // Escape special characters in the file content
                        $fileContent = mysqli_real_escape_string($conn, $fileContent);

                        $uploadDate = date('Y-m-d H:i:s');

                        // Insert file information into database
                        $sql = "INSERT INTO files (fileName, folderPath, timeStamp) VALUES ('$fileName', '$fileContent', '$uploadDate')";

                        if ($conn->query($sql) === TRUE) {
                            $uploadMessage = "File uploaded successfully: $fileName (Uploaded on $uploadDate)";
                        } else {
                            $uploadMessage = "Error: " . $sql . "<br>" . $conn->error;
                        }
                    } else {
                        $uploadMessage = "Error uploading file: " . $_FILES['pdfFile']['error'];
                    }

                    mysqli_close($conn);
                }
                // Retrieve uploaded files from the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "semestersyncusersdb";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT fileName, timeStamp FROM files ORDER BY id DESC";
                $result = $conn->query($sql);

                mysqli_close($conn);
                ?>


                <!-- <div class="upload">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="file" name="pdfFile">
                        <button type="submit" name="submit">Upload File</button>
                    </form>
                    </ul>
                </div> -->
                <!-- <h2>Upload Class Material</h2> -->
                <div class="upload">
                    <table>
                        <thead>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <th><input type="file" name="pdfFile" id="fileInput"></th>
                                <th><label for="fileInput">Choose File</label></th>
                                <th><button type="submit" name="submit">Upload File</button></th>
                            </form>
                        </thead>
                    </table>

                    <div class="recent-orders">
                        <h2>Resources</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>File Name</th>
                                    <th>Uploaded Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?php echo $row['fileName']; ?></td>
                                        <td><?php echo $row['timeStamp']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <a href="#">Show All</a>
                    </div>
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
                        <small class="text-muted">Admin</small>
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
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
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

<style>
    .upload input[type="file"] {
        display: none;
    }

    .upload label {
        background-color: darkred;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        border: none;
    }

    .upload label:hover {
        background-color: #45a049;
    }

    .upload button {
        background-color: skyblue;
        margin-left: 2px;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
    }

    .upload button:hover {
        background-color: #005F6B;
    }
</style>

</html>