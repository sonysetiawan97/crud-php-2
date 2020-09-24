<!DOCTYPE html>
<html>

<head>
	<title>Test</title>
	<link rel="stylesheet" href="style.css">
	<?php include 'connection.php' ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				$sql="SELECT * FROM tablekaryawan";
				$result=$conn->query($sql);
				if($result->num_rows>0){
					while ($row=$result->fetch_assoc()) {
						$temp_nik=$row['NIK'];
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
					<a class="btn btn-primary" href="/crud-php-2/pageUpdate.php?nik=<?php echo $temp_nik?>"><i
							class="fa fa-refresh" aria-hidden="true"></i>
						Update</a>
					<a class="btn btn-primary" href="delete.php?nik=<?php echo $temp_nik?>"><i class="fa fa-trash"
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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>
</body>

</html>