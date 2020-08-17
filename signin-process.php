<?php
session_start();

if(isset($_POST['SIGN'])){

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

$conn = mysqli_connect("localhost", "pharmacy", "","expenditure");

$UserName = stripcslashes($UserName);
$Password = stripcslashes($Password);
$UserName = mysqli_real_escape_string($conn,$UserName);
$Password = mysqli_real_escape_string($conn,$Password);




$result = mysqli_query($conn,"select * from employee where UserName = '$UserName' and Password = '$Password'") or die("Failed to query database".mysqli_error());

$row = mysqli_fetch_array($result);
if ($row['UserName'] == $UserName && $row['Password'] == $Password){
    header("location: Dashboard.php");
} else{
    
    $_SESSION['message'] = "Invalid User Login !!!     Please Enter Valid User Login !!!";
    $_SESSION['msg_type'] = "danger";

    header("location: signIn.php");
}
}
    
?>
