<?php

 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon.ico">
    <title>Cyprus International University | Student Database</title>
    <!-- Custom CSS -->
    
    <link href="css/style.css" rel="stylesheet">
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

tr:nth-child(even){background-color: #f2f2f2}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}
</style>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />  

<script>
			$(document).ready(function () {
    $('#example').DataTable();
});
		</script> 

</head>
<body>
<div class="topnav">
   
  <a href="index.php">Home</a>
  <a href="insert.php">+New Record</a>
  <a class="active" href="view.php">View Records</a>
  <a href="logout.php">Logout</a>
</div>

<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">

                           <img src="images/ciu_Logo.png"><br><h3 class="card-title">Students Data</h3></div>
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Print</h6>
                                <div class="table-responsive m-t-40">

<table width="100%" border="1" style="border-collapse:collapse;" align="left" id="example23" class="display" border="0" cellspacing="0" cellpadding="0">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>First Name</strong></th><th><strong>Middle Name</strong></th><th><strong>Last Name</strong></th><th><strong>Phone</strong></th><th><strong>Email</strong></th><th><strong>Date of Birth</strong></th><th><strong>Address</strong></th><th><strong>Marital Status</strong></th><th><strong>Nationality</strong></th><th><strong>Department</strong></th><th><strong>Date of Entry</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from ciu_students;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="left"><?php echo $count; ?></td><td align="left"><?php echo $row["fname"]; ?></td><td align="left"><?php echo $row["mname"]; ?></td><td align="left"><?php echo $row["lname"]; ?></td><td align="left"><?php echo $row["phone"]; ?></td><td align="left"><?php echo $row["email"]; ?></td><td align="left"><?php echo $row["dob"]; ?></td><td align="left"><?php echo $row["c_address"]; ?></td><td align="left"><?php echo $row["marital_status"]; ?></td><td align="left"><?php echo $row["nationality"]; ?></td><td align="left"><?php echo $row["department"]; ?></td><td align="left"><?php echo $row["date_of_entry"]; ?></td><td align="left"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="left"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
                            </div>
                        </div>
                        
            </div>

<br /><br /><br /><br />
</div>
<script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>
</html>
