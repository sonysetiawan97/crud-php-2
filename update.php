<?php
	include 'connection.php';

	$idKaryawan=$_POST['idKaryawan'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $tempatLahir=$_POST['tempatLahir'];
    $tanggalLahir=date('Y-m-d', strtotime($_POST['tanggalLahir']));
    $gender=$_POST['gender'];

	$sql= (
		"UPDATE tableKaryawan SET 
		nama='$nama', 
		alamat='$alamat', 
		email='$email', 
		tempatLahir='$tempatLahir', 
		tanggalLahir='$tanggalLahir',
		gender='$gender'
		WHERE idKaryawan='$idKaryawan'"
	);
	
	if($conn->query($sql)===TRUE){
		echo("Data telah diubah");
	}else{
		echo("Tidak terupdate");
	}
?>

<script type="text/javascript">
	window.location.href = "http://localhost/crud-php-2/Index.php";
</script>