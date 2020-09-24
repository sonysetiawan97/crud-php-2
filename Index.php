<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<?php include 'connection.php' ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<form action="create.php" method="post">
			nik: <input required type="text" name="nik"><br>
			Nama: <input required type="text" name="nama"><br>
            Alamat: <input required type="text" name="alamat"><br>
            Email: <input required type="email" name="email"><br>
            Tempat Lahir: <input required type="text" name="tempatLahir"><br>
            Tanggal Lahir: <input required type="date" name="tanggalLahir"><br>
            <label>Gender</label>
            <select required name="gender">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select><br>
			<input type="submit" value="Submit">
		</form>
		<table class="table">
			<tr>
				<td>NIK</td>
				<td>Nama</td>
				<td>Alamat</td>
                <td>Email</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
                <td>Gender</td>
				<td>Action</td>
                <td></td>
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
                    <a href="update.php?nik=<?php echo $temp_nik?>">Update</a>
				    <a href="delete.php?nik=<?php echo $temp_nik?>">Delete</a>
                </td>
			</tr>
			<?php
					}
				}
			?>
		</table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>