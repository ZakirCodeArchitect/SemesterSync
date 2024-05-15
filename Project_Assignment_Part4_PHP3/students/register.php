<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Define database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";     // it will not remain blank in server , secret credentials to reach server.
    $dbname = "semestersyncusersdb";

    // Create connection without specifying the database name
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to create database if it does not exist
    $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sqlCreateDB) === TRUE) {
        echo "Database created successfully <br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
    }

    // Select the database
    $conn->select_db($dbname);

    // SQL to create table if it does not exist
    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        userId VARCHAR(255) NOT NULL UNIQUE,
        Password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sqlCreateTable) === TRUE) {
        echo "Table 'users' created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }

    // Get username and password from the form
    $userId = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username already exists in the database
    $sql = "SELECT * FROM users WHERE userId='$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Username already exists, display alert message
        echo "<script>alert('Username already exists. Please choose a different username.'); window.location.href = 'registration.html';</script>";
    } else {
        // Insert the new user into the database
        $sql = "INSERT INTO users (userId, Password) VALUES ('$userId', '$password')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to desktop-2.html upon successful registration
            header("Location: ../SemesterSyncDashboard/tempindex2.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the connection
    $conn->close();
}
