<?php
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$pass = $_POST['password'];
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

 $sql=mysqli_query($conn,"SELECT * FROM Register_member where Email='$email' and Password='$pass'");
$row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
	header("Location: dashboard.html"); 
	}
else
    {
        echo "Invalid Email ID/Password";
	header("Location: login_process.html"); 
    }
}
?>