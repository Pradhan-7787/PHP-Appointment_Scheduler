
<?php
include ('db_inc.php');
$sql = "SELECT * From booking ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);?>

  
                    
<style>
.project-tab {
    padding: 10%;
    margin-top: -8%;
}
.project-tab #tabs{
    background: #007b5e;
    color: #eee;
}
.project-tab #tabs h6.section-title{
    color: #eee;
}
.project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #0062cc;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 3px solid !important;
    font-size: 16px;
    font-weight: bold;
}
.project-tab .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #0062cc;
    font-size: 16px;
    font-weight: 600;
}
.project-tab .nav-link:hover {
    border: none;
}
.project-tab thead{
    background: #f3f3f3;
    color: #333;
}
.project-tab a{
    text-decoration: none;
    color: #333;
    font-weight: 600;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" aria-selected="true">Booking Details</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>B-ID</th>
                                            <th>Name</th>
                                            <th>Sex</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>D-O-B</th>
                                            <th>AP-Date</th>
                                            <th>Time SLot</th>
                                        </tr>
                                    </thead>
                                    <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row['id'];  
    $time=$row['time'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $name=$fname. ' ' .$lname;
    $email=$row['email'];
    $number=$row['number'];
    $dob=$row['dob'];
    $date=$row['date'];
    $sex=$row['sex'];
    ?>
                                    <tbody>
                                        <tr>

                                            <td><?php echo "$id" ?></td>
                                            <td><?php echo "$name" ?></td>
                                            <td><?php echo "$sex" ?></td>
                                            <td><?php echo "$email" ?></td>
                                            <td><?php echo "$number" ?></td>
                                            <td><?php echo "$dob" ?></td>
                                            <td><?php echo "$date" ?></td>
                                            <td><?php echo "$time" ?></td>
                                            
                                        </tr>
                                    </tbody>
                                    <?php
    }
}	 
    ?>
                            </div>
                                </table>
  

                        </div>
                    </div>
                </div>
            </div>
        </section>