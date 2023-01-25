<?php
include_once 'dbConfig.php';
if(isset($_POST['submit']))
{    
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $dob = $_POST['dob'];
     $address = $_POST['c_address'];
     $marital_status = $_POST['marital_status'];
     $nationality = $_POST['nationality'];
     $department = $_POST['department'];
     $date_of_entry = time();

     $sql = "INSERT INTO ciu_students (fname,mname,lname,phone,email,dob,c_address,marital_status,nationality,department,date_of_entry)
     VALUES ('$fname','$mname','$lname','$phone','$email','$dob','$address','$marital_status','$nationality','$department','$date_of_entry')";
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record was added successful!")</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

include_once 'dbConfig.php';
// File upload path
if(isset($_FILES['file_array'])){
    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++) {
       if (move_uploaded_file($tmp_name_array[$i], "uploads/".$name_array[$i])){
           echo '<script type="text/javascript">
            alert("Uploads were Successful"); 
            window.location.href = "index.php";</script>';   
       } else {
           echo "upload file failed to move for". $name_array[$i]."<br>";
       }
       }
    }


?>