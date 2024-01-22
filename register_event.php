<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$seats = $_POST['seat'];


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

$sql1="CREATE TABLE IF NOT EXISTS Register_event(id_event int PRIMARY KEY AUTO_INCREMENT,id_e int NOT NULL,id_m int NOT NULL,seats int NOT NULL)";
if($conn->query($sql1) === TRUE)
{
}

$id_e=(int)($conn->query("SELECT id from new_events where name='$name'"));
$id_m=(int)($conn->query("SELECT id from register_member where email='$email'"));


// Insert the payment details into the database
$sql = "INSERT INTO register_event ( id_e,id_m,seats) VALUES ('$id_e', '$id_m', '$seats')";

if ($conn->query($sql) === TRUE) {
    echo "Register successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>