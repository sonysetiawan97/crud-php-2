<?php
	include 'connection.php';

	$idKaryawan=$_GET['idKaryawan'];

	mysqli_query($conn, "DELETE FROM tableKaryawan WHERE idKaryawan='$idKaryawan'");
?>
<br>

<script type="text/javascript">
	window.location.href = "http://localhost/crud-php-2/Index.php";
</script>