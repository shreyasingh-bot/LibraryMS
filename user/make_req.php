<?php
    require("us_common.php");
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
    $bname="";
    $aname="";
    $id="";
    $price="";
	$query = "select * from book where id =$_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
            $bname= $row['name'];
            $aname= $row['author'];
            $id= $row['id'];
            $price= $row['price'];
    }
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12">
                <h4 style="background-color:aquamarine;height:50px;margin-top:10px"><center>Fill details and make payement</center></h4>

                <form action="" method="post">
                <div class="form-group">
                    <label for="name">Date *</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">Number of days *</label>
                    <input type="text" name="day" class="form-control" required>
                </div>

            The price for "<?php echo ($bname)?>" is <?php echo ($price)?> <br>
            Scan the QR code to make payment
                <div>
            <img src="qr.jpg" height="50%" width="30%">
              </div>

              <div class="form-group">
                    <label for="name">Enter Transaction ID *</label>
                    <input type="text" name="tid" class="form-control" required>
                </div>
                <button class="btn btn-success" name="done">Make Request</button>
                </form>
            </div>
        </div>

    </body>
</html>


<?php
     if(isset($_POST['done']))
     {
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"library");
         $query_var= "insert into request_book values (null,'$_SESSION[unid]','$_SESSION[name]','$bname','$aname','$_POST[date]','$_POST[day]','$price','$_POST[tid]')";
         $query_run= mysqli_query($connection,$query_var);
?>
     <script type="text/javascript">
         alert("Request Made Successfully")
         window.location.href="request.php";
     </script>
     <?php
     }
     ?>

