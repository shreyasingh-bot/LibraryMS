<?php
    session_start();
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"library");
    $query="update admin set name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]' where id= $_SESSION[id]";
    $query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">
    alert("Successfully Updated!")
    window.location.href="admin_dashboard.php";
</script>