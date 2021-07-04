<?php
// include('db_inc.php');
// if ($_SERVER['REQUEST_METHOD']  == 'POST'){
//     $fname=$_POST['fname'];
//     $lname=$_POST['lname'];
//     $email=$_POST['email'];
//     $number=$_POST['num'];
//     $dob=$_POST['dob'];
//     $dt=$_POST['date'];
//     $at=$_POST['at'];
//     if (isset($_POST['sx1'])){
//         $sx = $_POST['sx1'];}
//         else{$sx = $_POST['sx2'];}

//   //inserting data
// $sql = "INSERT INTO booking (firstname, lastname, email, number, dob, date, time, sex)
// VALUES ('$fname', '$lname', '$email', '$number', '$dob', '$dt', '$at', '$sx')";

// if ($conn->query($sql) === TRUE) {
//     echo "<script>alert('Inserted Successfully');</script>";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
// }
?>

<style>
body {
     background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
.tm {
    display: block;
    width: 100%;
    height: 34px;
    padding: 2px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
#outer
{
    width:100%;
  /*  text-align: center;*/
}
.inner
{
    display: inline-block;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="jquery-ui.min.js"></script>-->
<link rel="stylesheet" href="jquery-ui.min.css">
<!------ Include the above in your HEAD tag ---------->


<div class="container">
            <form class="form-horizontal" role="form" action="insert.php" method="post" id="myform">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number*</label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" name="num" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
         
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender*</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="sx1" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="sx" name="sx2" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="text" id="birthDate" name="dob" class="form-control" autocomplete="off" placeholder="Enter D-O-B">
                    </div>
                </div>
           
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Appointment Date*</label>
                    <div class="col-sm-9">
                        <input onchange="myFun(this.value)" type="text" id="date" name="date" class="form-control" autocomplete="off" placeholder="Enter Appointment Date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Appointment Time*</label>
                    <div class="col-sm-9">
                      <select name="at" id="t_slot" class="tm">
                          <option value="">Select Timeslot</option>
                      </select>
                    </div>
                </div>
 <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Book</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        <script>
 $(document).ready(function(){
var form = $('#myform');
$('#submit').click(function(){
$.ajax({
url:'insert.php',
type:'post',
data:$("myform input").serialize(),
success:function(data){
    alert("Booking Successful !!");
}
});
});

// Calendar Date Restrict
 $('#date').datepicker({
    dateFormat:'yy-mm-dd',
     maxDate:'3D',
    minDate:'1D',
 });
 $('#birthDate').datepicker({
    dateFormat:'yy-mm-dd',
    changeMonth:true,
     changeYear:true,
     maxDate:'D',
     yearRange: '1920:Y',
 });
// Calendar Date Restrict
$("#close").click(function(){
  $("#myModal").css('display','none');
});
$(".btn btn-danger").click(function(){
  $("#myModal").css('display','none');
});
});

        </script>
        <script>function myFun(datavalue){
    $.ajax({
url:'class.php',
type:'POST',
data:{ datapost : datavalue },
success:function(result){
    $('#t_slot').html(result);

}
    });}
</script>
        <script src="jquery-ui.min.js"></script>