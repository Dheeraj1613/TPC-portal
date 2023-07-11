<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		header {
            background-color: #003366;
            color: white;
            text-align: center;
			image-align: left;
			padding: 20px;
            display: flex;
            align-items: center;
			margin-top: -10px;
			margin-left: -10px;
			margin-right: -15px;
        }

		h1 {
            margin: 0;
			margin-left: 450px;
            flex: 1;
        }

		table {
			border-collapse: collapse;
			margin: 30px auto;
			width: 50%;
		}

		th, td {
			padding: 10px;
			border: 1px solid black;
			text-align: left;
		}

		.side-nav {
			height: 100%;
			width: 150px;
			position: fixed;
			top: 90px;
			left: 0;
			background-color: #f1f1f1;
			overflow-x: hidden;
			padding-top: 20px;
		}
		.side-nav a {
			padding: 20px 10px 20px 16px;

			text-decoration: none;
			font-size: 18px;
			color: #003366;
			display: block;
			transition: 0.3s;
		}

		.side-nav a:hover {
			background-color: #003366;
			color: white;
		}
	</style>
	<?php
session_start();

// Check if rollNo is set in session
if (!isset($_SESSION['rollNo'])) {
    // Redirect to "studlogin" page
    header("Location: studlogin.php");
    exit;
}

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "dheeraj16";
$dbname = "miniproject";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$rollNo = $_SESSION['rollNo'];

// Get student information from Students table based on rollNo
$sql = "SELECT * FROM Students WHERE rollNo = '$rollNo'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

</head>
<body>
	<header>
	    <img src="iit_patna_logo.png" alt="IIT Patna Logo" class="logo" width=60px height=60px>
		<centre>
		<h1>Student Information</h1>
        </centre>
	</header>
	<div class="side-nav">
  <a href="studentinfo.php">Home</a>
  <a href="updateprofile.php">Update Personal Profile</a>
  <a href="viewcompanies.php">View Companies</a>
  <a href="applied.php">Applied</a>
  <a href="studlogin.php">Logout</a>
</div>

	<table>
		<tr>
			<th>Roll No</th>
			<td><?php echo $row["rollNo"]; ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $row["name"]; ?></td>
		</tr>
		<tr>
			<th>Branch</th>
			<td><?php echo $row["branch"]; ?></td>
		</tr>
		<tr>
			<th>Department</th>
			<td><?php echo $row["dept"]; ?></td>
		</tr>
		<tr>
			<th>Placement Status</th>
			<td><?php echo $row["placementStatus"]; ?></td>
		</tr>
	</table>
</body>
</html>

	<?php

mysqli_close($conn);
?>



