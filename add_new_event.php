<?php
// Retrieve the form data
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$seats = $_POST['seats'];

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

$sql1="CREATE TABLE IF NOT EXISTS new_events(id int PRIMARY KEY AUTO_INCREMENT,name varchar(30) NOT NULL,date varchar(10) NOT NULL,time varchar(10) NOT NULL,venue varchar(20) NOT NULL,seats int(11) NOT NULL)";
if($conn->query($sql1) === TRUE)
{
}
// Insert the payment details into the database
$sql = "INSERT INTO new_events (name, date, time, venue, seats) VALUES ('$name', '$date', '$time', '$venue','$seats')";

if ($conn->query($sql) === TRUE) 
{
	echo "Event added successful!";
	header("Location: admin_dashboard.html"); 
} else 
{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>