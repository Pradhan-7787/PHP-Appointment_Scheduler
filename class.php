
<?php
include ('db_inc.php');
$date=$_POST['datapost'];
$sql = "SELECT time From timeslot where time not in (select time from booking where date = '$date')";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);?><select>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $time=$row['time'];?>
                     <!--   <label class="input-group">
                            <span class="input-group-addon">
                            
                                <input id="time_slot" type="radio" name="time" value="<?php //echo "$time" ?>" />
                            </span>
                            <div class="form-control form-control-static">
                            <?php //echo "$time" ?>
                            </div>

                            <span class="glyphicon form-control-feedback "></span>
                        </label>-->
                        
                            <option value="<?php echo "$time" ?>"><?php echo "$time" ?></option>
                        
                        <?php
    }
}	 
    ?>
    </select>