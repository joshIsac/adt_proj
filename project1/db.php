<?php
$servername = "localhost";
$username = "root";
$password = "123"; // Replace with the password for the 'root' user.
$dbname = "helpinghand";

// Create a connection to MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error in db connection: " . mysqli_connect_error());

// Create a new user
$query1 = "CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password'";
$result1 = mysqli_query($conn, $query1);

if (!$result1) {
    die("Error creating user: " . mysqli_error($conn));
}

// Grant privileges to the new user
$query2 = "GRANT ALL PRIVILEGES ON dbname.* TO 'newuser'@'localhost'";
$result2 = mysqli_query($conn, $query2);

if (!$result2) {
    die("Error granting privileges: " . mysqli_error($conn));
}

// Flush privileges
$query3 = "FLUSH PRIVILEGES";
$result3 = mysqli_query($conn, $query3);

if (!$result3) {
    die("Error flushing privileges: " . mysqli_error($conn));
}

// Close the MySQL connection
mysqli_close($conn);
?>

