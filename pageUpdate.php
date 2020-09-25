<!DOCTYPE html>
<html>

<head>
	<title>Test</title>
	<link rel="stylesheet" href="style.css">
	<?php include 'connection.php' ?>
	<?php include 'indexStyle.php' ?>
</head>

<body>
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">Update Karyawan</a>
	</nav>
	<form action="update.php" method="post" autocomplete="off">
		<?php
			$idKaryawan=$_GET['idKaryawan'];

			$sql="SELECT * FROM tablekaryawan WHERE idKaryawan='$idKaryawan'";
			$result=$conn->query($sql);

			if($result->num_rows>0){
				while ($row=$result->fetch_assoc()) {
					$temp_idKaryawan=$row['idKaryawan'];
                    $temp_nama=$row['nama'];
                    $temp_alamat=$row['alamat'];
                    $temp_email=$row['email'];
                    $temp_tempatLahir=$row['tempatLahir'];
                    $temp_tanggalLahir=$row['tanggalLahir'];
                    $temp_gender=$row['gender'];
				}
			}
		?>
		<input type="text" name="idKaryawan" value="<?php echo $temp_idKaryawan ?>" hidden>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="nama">Nama</label>
			<div class="col-sm-10">
				<input required type="text" class="form-control" id="nama" value="<?php echo $temp_nama ?>" name="nama">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
			<div class="col-sm-10">
				<input required type="text" class="form-control" id="alamat" value="<?php echo $temp_alamat ?>"
					name="alamat">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="email">Email</label>
			<div class="col-sm-10">
				<input required type="email" class="form-control" id="email" value="<?php echo $temp_email ?>"
					name="email">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="tempatLahir">Tempat Lahir</label>
			<div class="col-sm-10">
				<input required type="text" class="form-control" id="tempatLahir"
					value="<?php echo $temp_tempatLahir ?>" name="tempatLahir">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="tanggalLahir">Tanggal Lahir</label>
			<div class="col-sm-10">
				<input required type="date" class="form-control" id="tanggalLahir"
					value="<?php echo $temp_tanggalLahir ?>" name="tanggalLahir">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="gender">Gender</label>
			<div class="col-sm-10">
				<select required class="custom-select" value="<?php echo $temp_gender ?>" name="gender">
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</div>
		</div>
		<a href="/crud-php-2/Index.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
		<button type="submit" class="btn btn-primary buttonSubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i>
			Submit</button>
	</form>
	<?php include 'indexJs.php' ?>
	<?php include 'script.js' ?>
</body>

</html>