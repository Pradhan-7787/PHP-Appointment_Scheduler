<?php
include ('db_inc.php');
extract($_POST);
if(isset($_POST['submit'])){
    if (isset($_POST['sx1'])){
        $sx = $_POST['sx1'];}
        else{$sx = $_POST['sx2'];}

    $q="insert into booking (firstname, lastname, email, number, dob, date, time, sex) values ('$fname', 
    '$lname', '$email','$num','$dob','$date','$at','$sx')";
$query=mysqli_query($conn,$q);
header('location:index.php');
}
?>