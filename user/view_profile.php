<?php
    require("us_common.php");
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
    $unid="";
    $name="";
    $email="";
    $mobno="";
	$query = "select * from user where unid = '$_SESSION[unid]'";
	$query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $unid= $row['unid'];
        $name= $row['name'];
        $email= $row['email'];
        $mobno= $row['Mobile'];
    }
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                   <form id=prof-form>
                   <div class="form-group">
                            <label>Unique ID:</label>
                            <input type="text" class="form-control" value="<?php echo $unid;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value="<?php echo $mobno;?>" disabled>
                        </div>
                   </form>
            </div>

    </body>
</html>