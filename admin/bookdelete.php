<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "delete from book where id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted successfully...");
	window.location.href = "delete_book.php";
</script>
	