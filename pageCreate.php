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
        <a class="navbar-brand">Add Karyawan</a>
    </nav>
    <form action="create.php" method="post" autocomplete="off">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nik">NIK</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="nama" placeholder="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">Email</label>
            <div class="col-sm-10">
                <input required type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="tempatLahir">Tempat Lahir</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir"
                    name="tempatLahir">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="tanggalLahir">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input required type="date" class="form-control" id="tanggalLahir" placeholder="mm/dd/yyyy"
                    name="tanggalLahir">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="gender">Gender</label>
            <div class="col-sm-10">
                <select required class="custom-select" id="gender" name="gender">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
        </div>
        <a href="/crud-php-2/Index.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary buttonSubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i>
            Submit</button>
    </form>
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