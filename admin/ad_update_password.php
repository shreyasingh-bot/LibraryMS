
<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	$query = "select * from admin where id = '$_SESSION[id]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['oldpassword']){
		$query = "update admin set password = '$_POST[newpassword]' where id = '$_SESSION[id]'";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Password Updated");
			window.location.href = "admin_dashboard.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Invalid Old Password, Try Again");
			window.location.href = "ad_change_password.php";
		</script>
		<?php
	}
?>