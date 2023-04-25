<?php
    require("us_common.php");
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$id="";
	$name = "";
	$author = "";
	$publisher = "";
	$genre = "";
    $price = "";
	$query = "select * from book";
?>

<!DOCTYPE html>
<html>
    <body>
            <div class="col-md-1"></div>
			<div class="col-md-8">
            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Book Detail</h4><br></center>
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Book ID</th>
							<th>Name</th>
							<th>Author</th>
							<th>Publisher</th>
                            <th>Genre</th>
                            <th>Price</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$id = $row['id'];
							$name = $row['name'];
							$author = $row['author'];
                            $publisher = $row['publisher'];
                            $genre = $row['genre'];
                            $price = $row['price'];
					?>
						<tr>
							<td><?php echo $id;?></td>
							<td><?php echo $name;?></td>
                            <td><?php echo $author;?></td>
							<td><?php echo $publisher;?></td>
                            <td><?php echo $genre;?></td>
                            <td><?php echo $price;?></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		<
        </div>
    </body>
</html>