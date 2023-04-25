<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "delete from issued_books where id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Returned...");
	window.location.href = "issue_book_list.php";
</script>
	