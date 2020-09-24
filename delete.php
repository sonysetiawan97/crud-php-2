<?php
	include 'connection.php';

	$nik=$_GET['nik'];

	mysqli_query($conn, "DELETE FROM tableKaryawan WHERE nik='$nik'");
?>
<br>

<script type="text/javascript">
	window.location.href = "http://localhost/crud-php-2/Index.php";
</script>