<?php
//Since port has been changed on XAMPP, change MySQL server connections.
// connect to the database
$servername = "localhost";
$username = "root";
$password = "dheeraj16";
$dbname = "miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);


?>

<!DOCTYPE html>
<html>
<head>
    <title>IIT Patna Training and Placement Cell</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-image: url('iit_patna_building.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
}


        .logo {
            max-height: 120px;
            margin-right: 20px;
          }
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
        }
        h1 {
            margin: 0;
            flex: 1;
        }
        .logo {
            max-height: 60px;
            margin-right: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 200px);
            padding: 20px;
        }
        .button {
            background-color: #003366;
            border: none;
            color: white;
            padding: 20px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 10px;
        }
        
        .student {
            background-color: #003366;
        }
        .student:hover {
            background-color: #00796b;
        }
        .alumni {
            background-color: #003366;
        }
        .alumni:hover {
            background-color: #00796b;
        }
        .company {
            background-color: #003366;
        }
        .company:hover {
            background-color: #00796b;;
        }
        
        .contact-us {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}

.contact-us h2 {
  margin-top: 0;
  margin-bottom: 10px;
}

.contact-us ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.contact-us li {
  margin-bottom: 10px;
}
    </style>
</head>
<body>
    
    <header>
        <img src="iit_patna_logo.png" alt="IIT Patna Logo" class="logo">
        <h1>IIT Patna Training and Placement Cell</h1>
        
    </header>
    <div class="container">
        <a href="studlogin.php" class="button student" >For Students</a>
        <a href="alumnilogin.php" class="button alumni">For Alumni</a>
        <a href="companylogin.php" class="button company">For Companies</a>
        <a href="statistics.php" class="button company">Statistics</a>
    </div>
    <footer>
        <div class="contact-us">
            <h2>Contact Us</h2>
            <ul>
              <li><strong>Address:</strong> Indian Institute of Technology Patna, Bihta, Patna - 801103, Bihar, India</li>
              <li><strong>Email:</strong> tpo@iitp.ac.in</li>
              <li><strong>Phone:</strong> +91-612-302-8066</li>
            </ul>
          </div>


