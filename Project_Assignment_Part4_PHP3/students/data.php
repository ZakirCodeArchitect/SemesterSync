<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database connection parameters
    // Connect to the database 
    $servername = "localhost";
    $username = "root";
    $password = "";     // it will not remain blank in server , secret credentials to reach server.
    $dbname = "semestersyncusersdb";

    // Establish a connection to the database
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Function to sanitize input data to prevent SQL injection
    function sanitizeInput($con, $data)
    {
        return mysqli_real_escape_string($con, $data);
    }

    $username = sanitizeInput($con, $_POST['username']); // Corrected 'userId' to 'username'
    $password = sanitizeInput($con, $_POST['password']); // Corrected 'Password' to 'password'

    // Query to check if the user exists in the database
    $query = "SELECT * FROM users WHERE userId='$username' AND Password='$password'";
    $result = mysqli_query($con, $query);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {

        // User exists, retrieve the serial number
        $row = mysqli_fetch_assoc($result);     // distribute according to rows , 2d array.
        //echo var_dump($row);
        $serialNumber = $row['Sr no.']; // Assuming 'Sr no.' is the column name for serial number

        // Store user information in session
        $_SESSION['serialNumber'] = $serialNumber;

        // User exists, redirect to desktop-2.html
        header("Location: ../SemesterSyncDashboard/tempindex2.php");
        exit();
    } else {
        // User does not exist, display error message
        echo "<script>alert('Invalid username or password. Please register first.')</script>";
        echo "<script>window.location.href = 'registration.html';</script>";
    }

    // Close the database connection
    mysqli_close($con);
}
