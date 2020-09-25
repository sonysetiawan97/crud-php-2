<?php
	include 'connection.php';

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $tempatLahir=$_POST['tempatLahir'];
    $tanggalLahir=date('Y-m-d', strtotime($_POST['tanggalLahir']));
    $gender=$_POST['gender'];

	$sql= "INSERT INTO tableKaryawan VALUES ('$nik','$nama','$alamat','$email','$tempatLahir','$tanggalLahir','$gender')";

	$conn->query($sql);
?>

<script type="text/javascript">
	window.location.href = "http://localhost/crud-php-2/Index.php";
</script>