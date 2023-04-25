<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"library");
$unid="";
$username="";
$bookname="";
$author="";
$issuedate="";
$day="";
$tid="";
$query_c = "select * from request_book where id=$_GET[bn]";
$query_run = mysqli_query($connection,$query_c);
while ($row = mysqli_fetch_assoc($query_run)){
	$unid= $row['unid'];
	$username= $row['username'];
	$bookname= $row['bname'];
	$author= $row['author'];
	$issuedate= $row['date'];
	$day= $row['nodays'];
	$tid= $row['tid'];
}
	
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query_a = "insert into issued_books values(null,'$unid','$username','$bookname','$author','$issuedate','$day','$tid')";
		$query_run = mysqli_query($connection,$query_a);
	



$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$query_b = "delete from request_book where id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query_b);
?>
<script type="text/javascript">
	alert("Request Approved successfully...");
	window.location.href = "request_list.php";
</script>
	