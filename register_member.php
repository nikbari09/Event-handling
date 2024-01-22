<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['psw'];
$password_repeat = $_POST['psw-repeat'];
$address = $_POST['address'];

// Create a database connection (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Event Booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1="CREATE TABLE IF NOT EXISTS Register_member(id int PRIMARY KEY AUTO_INCREMENT,name varchar(30) NOT NULL,email varchar(20) NOT NULL,password varchar(15) NOT NULL, password_repeat varchar(15) NOT NULL, address varchar(30) NOT NULL)";
if($conn->query($sql1) === TRUE)
{
}


// Insert the payment details into the database
$sql = "INSERT INTO Register_member (name, email, password, password_repeat,address) VALUES ('$name', '$email', '$pass', '$password_repeat','$address')";

if ($conn->query($sql) === TRUE) {
    echo "Register successful!";
	header("Location: login_screen.html"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>