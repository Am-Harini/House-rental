<?php
include("connection.php");
$fname=$_GET['f'];
$lname=$_GET['l'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];

if(isset($_GET['submit'])) { // Check if the submit button is set
    if($fname!="" && $lname!="" && $email!="" && $pwd!="" && $mob!="" && $occ!="") {
        // Assuming 'tenant' table has columns 'fname', 'lname', 'email', 'pwd', 'mobile_no', 'occupation'
        $query="INSERT INTO tenant (fname, lname, email, pwd, mobile_no, occupation) 
                VALUES ('$fname', '$lname', '$email', '$pwd', '$mob', '$occ')";
        $data=mysqli_query($conn,$query);
        if($data) {
            echo "1"; // Success
        } else {
            echo "2"; // Failure
        }
    }
}
?>
