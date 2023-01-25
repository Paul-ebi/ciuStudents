<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #990000;
  color: white;
}
</style>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="topnav">
   
  <a class="active" href="index.php">Home</a>
  <a href="insert.php">+New Record</a>
  <a href="view.php">View Records</a>
  <a href="logout.php">Logout</a>
</div>

<div style="padding-left:16px">
<a><img src="images/ciu_Logo.png"></a>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
  <p>This is secure area.</p>
</div>

</body>
</html>
