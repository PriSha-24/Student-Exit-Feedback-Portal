<!DOCTYPE html>
<html lang="en">
<head>
  <title>MiniProject
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
}

/* Style the background image */
body {
    background-image: url('bg.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-repeat: no-repeat;
}

/* Style the navigation bar */
.navbar {
    background-color: black;
    overflow: hidden;
}

.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration:none;
    font-family: "open sans", helvetica, arial, sans; 
    font-size: 20px;
    font-weight:bold;
}

.navbar a:hover {
    background-color: grey;
}

/* Style the content area */
.container {
    padding: 70px;
    text-align: center;font-family: "open sans", helvetica, arial, sans; 
    font-size: 20px;
    font-weight:bold;
    color: black;
}
.center {
      text-align: center; /* Center-align the content */
      margin-top: 50px;
    }

/* Change font style for <h1> */
h1 {
    font-family: "Times New Roman", sans-serif;
    font-size: 50px;
    font-weight: bold;
    margin-top:20px;
    color: black; /* Text color */
    text-align: center;
    text-shadow: 2px 2px 4px #ffffff;;
}

/* Change font style for <h2> */
h2 {
    font-family: "Times New Roman", serif;
    font-size: 35px;
    font-style:bold;
    color: black; /* Text color */
    text-align: center;
    margin-top:30px;
    margin-bottom:30px;
}


  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="studentlogin.php">Student</a></li>
      <li><a href="adminlogin.php">Admin</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h1>HERITAGE INSTITUTE OF TECHNOLOGY</h1>
  <h2>Student Exit Feedback Portal</h2>
  <p>This is a portal for students to provide their overall academic feedback for furthur teaching improvisation.
     Kindly provide your feedback here.
  </p>
</div>

<div class="center">
      <?php include('visitorcount.php'); ?>
</div>
</body>
</html>