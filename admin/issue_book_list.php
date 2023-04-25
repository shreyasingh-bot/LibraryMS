<?php
	require('common.php');
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$id="";
	$unid = "";
	$name="";
    $bookname = "";
    $bookauthor = "";
    $issuedate = "";
    $no_of_days = "";
    $price = "";
	$query = "select * from issued_books";
?>

<!DOCTYPE html>
<html>
    <body>
            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Issued Books</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Issue Book ID</th>
                            <th>User ID</th>
							<th>User Name</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Issue Date</th>
                            <th>No. of Days</th>
							<th>Book Return</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$id= $row['id'];
							$unid= $row['unid'];
                            $name= $row['username'];
                            $bookname = $row['bookname'];
                            $bookauthor = $row['bookauthor'];
                            $issuedate = $row['issuedate'];
                            $no_of_days = $row['no_of_days'];
					?>
						<tr>
							<td><?php echo $id;?></td>
							<td><?php echo $unid;?></td>
							<td><?php echo $name;?></td>
                            <td><?php echo $bookname;?></td>
                            <td><?php echo $bookauthor;?></td>
                            <td><?php echo $issuedate;?></td>
                            <td><?php echo $no_of_days;?></td>
							<td><button class="btn" name=""><a href="mark_return.php?bn=<?php echo $row['id'];?>">Mark Return</a></button></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>

    </body>
</html>