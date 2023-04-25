<?php
    require('common.php');
?>


<!DOCTYPE html>
<html>
    <body>
            <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Request ID</th>
							<th>User ID</th>
							<th>Name</th>
							<th>Book Name</th>
							<th>Author</th>
							<th>From Date</th>
							<th>Number of Days</th>
							<th>Transaction ID</th>
                            <th>Approve</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"library");
						$query = "select * from request_book";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['unid'];?></td>
								<td><?php echo $row['username'];?></td>
								<td><?php echo $row['bname'];?></td>
								<td><?php echo $row['author'];?></td>
								<td><?php echo $row['date'];?></td>
                                <td><?php echo $row['nodays'];?></td>
								<td><?php echo $row['tid'];?></td>
								<td><button class="btn" name=""><a href="req_delete.php?bn=<?php echo $row['id'];?>">Approve</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
    </body>
</html>
