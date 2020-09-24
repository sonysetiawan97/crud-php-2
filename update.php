<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<?php include 'connection.php' ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<form action="updateData.php" method="post">
			<?php
			$nik=$_GET['nik'];

			$sql="SELECT * FROM siswa WHERE nik='$nik'";
			$result=$conn->query($sql);

			if($result->num_rows>0){
				while ($row=$result->fetch_assoc()) {
					$temp_nik=$row['nik'];
                    $temp_nama=$row['nama'];
                    $temp_alamat=$row['alamat'];
                    $temp_email=$row['email'];
                    $temp_tempatLahir=$row['tempatLahir'];
                    $temp_tanggalLahir=date_create($row['temp_tanggalLahir']);
                    $temp_gender=$row['gender'];
				}
			}
			?>
            nik: <input value="<?php echo $temp_nik ?>" type="text" name="nik"><br>
			Nama: <input value="<?php echo $temp_nama ?>" type="text" name="nama"><br>
            Alamat: <input value="<?php echo $temp_alamat ?>" type="text" name="alamat"><br>
            Email: <input value="<?php echo $temp_email ?>" type="email" name="email"><br>
            Tempat Lahir: <input value="<?php echo $temp_tempatLahir ?>" type="text" name="tempatLahir"><br>
            Tanggal Lahir: <input value="<?php echo $temp_tanggalLahir ?>" type="date" name="tanggalLahir"><br>
            Gender: <input value="<?php echo $temp_gender ?>" type="text" name="gender"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
<br>
<a href="Index.php">Back To Index</a>