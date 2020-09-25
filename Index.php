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
		<a class="navbar-brand">Table Karyawan</a>
		<a href="/crud-php-2/pageCreate.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Karyawan</i></a>
	</nav>
	<div class="table-responsive">
		<table class="table table-hover">
			<tr>
				<th scope="col">NIK</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Email</th>
				<th scope="col">Tempat Lahir</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Gender</th>
				<th scope="col">Action</th>
			</tr>
			<?php
				$sql="SELECT `tablenikkaryawan`.`NIK`, tablekaryawan.* FROM tablekaryawan LEFT JOIN tablenikkaryawan ON tablenikkaryawan.idKaryawan=tablekaryawan.idKaryawan";
				$result=$conn->query($sql);
				if($result->num_rows>0){
					while ($row=$result->fetch_assoc()) {
						$temp_nik=$row['NIK'];
						$temp_idKaryawan=$row['idKaryawan'];
                        $temp_nama=$row['nama'];
                        $temp_alamat=$row['alamat'];
                        $temp_email=$row['email'];
                        $temp_tempatLahir=$row['tempatLahir'];
                        $temp_tanggalLahir=date_create($row['tanggalLahir']);
                        $temp_gender=$row['gender'];
			?>
			<tr>
				<td><?php echo $temp_nik ?></td>
				<td><?php echo $temp_nama ?></td>
				<td><?php echo $temp_alamat ?></td>
				<td><?php echo $temp_email ?></td>
				<td><?php echo $temp_tempatLahir ?></td>
				<td><?php echo date_format($temp_tanggalLahir, "l,d F Y") ?></td>
				<td><?php echo $temp_gender ?></td>
				<td>
					<a class="btn btn-primary" href="/crud-php-2/pageUpdate.php?idKaryawan=<?php echo $temp_idKaryawan?>"><i
							class="fa fa-refresh" aria-hidden="true"></i>
						Update</a>
					<a class="btn btn-primary" href="delete.php?idKaryawan=<?php echo $temp_idKaryawan?>"><i class="fa fa-trash"
							aria-hidden="true"></i>
						Delete</a>
				</td>
			</tr>
			<?php
					}
				}
			?>
		</table>
	</div>
	<?php include 'indexJs.php' ?>
	<?php include 'script.js' ?>
</body>

</html>