<!-- PHP code to establish connection with the localserver -->
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Event Booking";

$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT id,name,email,address FROM Register_member";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Event Booking</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		
	</head>
	<style>
	body{
		font-family:'Roboto',sans-serif;
	}

	*{
		margin: 0;
		padding: 0;
		list-style: none;
		text-decoration: none;
	}
	.scrollmenu{
		background-color: #F08080;
		overflow: auto;
		white-space: nowrap;
		text-align: center;
		font-size: 16px;
		padding: 1px;
		position: sticky;
		top: 0;
		transition: all .5s ease;
	}
	
	
	.scrollmenu a{
		display: inline-block;
		width: 180px;
		height: 30px;
		font-size: 16px;
		color: white;
		padding-left: 10px;
		padding-top: 10px;
		transition: .4s;
		position: sticky;
		top: 0;	
	}
	a:hover{
		background-color:pink;
	}
	scrollmenu a:active{
		background-color:pink;
	}
	@media screen and (max-width: 900px) {
  	.scrollmenu {
    		width: 100%;
   	 	height: auto;
    		position: relative;
  	}
	.scrollmenu a {
    		float: left;
    		padding: 15px;
  	}
  	div.content {margin-left: 0;}
	}

	h1{
		padding: 20px;
		text-align: center;
		color: pink;
		font-size: 48px;
		transition: all .5s;
		
	}
	p{
		padding: 30px;
		
		font-size: 20px;
		transition: all .5s;
		
	}
	button{
		background-color: red;
		margin-left: auto;
		margin-right: auto;
		display: block;
		border: none;
		border-radius: 8px;
		padding: 14px 40px;
		font-size: 24px;
		color: white;
	}
	
	
	.footer{
		background-color: #F08080;
		left: 0;
		bottom: 0;
		width: 100%;
		
	}
	
	hr {
  		border: 1px solid #f1f1f1;
  		margin-bottom: 25px;
	}
				
	</style>
	<body>
		
		<div style="padding:0.5px;"></div>
		
		<div class="scrollmenu">
			
			<a style="font-size:18px;" href="#">HOME</a>
			<a style="font-size:18px;" href="#">NEW EVENT</a>
			<a style="font-size:18px;" href="#">BOOKED EVENT</a>
			<a style="font-size:18px;" href="#">ABOUT US</a>
			<a style="font-size:18px;" href="#">CONTACT US</a>
		</div>
		
		<div><h1 style="width: 50%;"> Welcome To Sumago Events.</h1></div>
		
		<div style="width:50%;"><button onclick="document.location='C:\Users\Nik\OneDrive\Desktop\add_new_event.html'" style="background-color: red;"> Add New Event</button></div>
		<div style="padding: 10px;"></div>

		</div>
		<div style="padding:20px;"></div>
		<div style="padding: 40px; background-color: pink; color:black;"><p style="font-size: 24px; text-align: center;"> Check status for booked events.</p>
		<div style="text-align: center;"><button onclick="document.location='http://localhost/admin_dashboard.php'">Booked Event.</button></div></div>
		
		
		
	
		<div style="background-color:#696969; color: white;"><p style=" font-size: 45px; padding: 40px; text-align: center;"><b> Register Members</b></p>
		<hr>
		<p style=" padding: 0px; font-size:28px; text-align: center;">user details and location.</p>
		<!-- TABLE CONSTRUCTION -->
        <table style="text-align:center;">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['address'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
		<hr>
		<div style="padding: 20px;"></div>
		</div>
	

		
		<div class="footer">
		<p style=" font-size: 13px; color: white; margin-left: 10%; padding: 5px; line-height: 1.4;"> Event Booking <br> pune, pune, JM Road, <br> Maharashtra 412101 <br></p>
		<p style=" font-size: 13px; color: white; margin-left: 80%; padding: 5px;"> </p>
		</div>
	</body>

</html>

