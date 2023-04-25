<?php
    require("us_common.php");
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$id = "";
    $name ="";
	$bname = "";
	$author = "";
	$issuedate = "";
    $days = "";
    $price = "";
	$query = "select * from issued_books where unid= $_SESSION[unid]";
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="col-md-1"></div>
			<div class="col-md-7">
            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Approved Book Detail</h4><br></center>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
                            <th>Issue ID</th>
							<th>Name</th>
                            <th>Book Name</th>
							<th>Author</th>
							<th>Issue Date</th>
                            <th>Number of Days</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
                            $id = $row['id'];
							$name = $row['username'];
                            $bname = $row['bookname'];
							$author = $row['bookauthor'];
                            $issuedate = $row['issuedate'];
                            $days = $row['no_of_days'];
                            
					?>
						<tr>
                            <td><?php echo $id;?></td>
							<td><?php echo $name;?></td>
                            <td><?php echo $bname;?></td>
                            <td><?php echo $author;?></td>
							<td><?php echo $issuedate;?></td>
                            <td><?php echo $days;?></td>
                           
						</tr>
					<?php
						}
					?>	
				</table>
                    </div>
    </body>
</html>