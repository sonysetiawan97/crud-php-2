<!DOCTYPE html>
<html>

<head>
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'connection.php' ?>
    <?php include 'indexStyle.php' ?>
</head>

<body class="createPage">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Add Karyawan</a>
    </nav>
    <form action="create.php" method="post" autocomplete="off">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="nama" placeholder="Nama lengkap" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="alamat" placeholder="Domisili tempat tinggal" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">Email</label>
            <div class="col-sm-10">
                <input required type="email" class="form-control" id="email" placeholder="example@example.com" name="email">
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
                    <option value="" disabled selected hidden>Choose Gender...</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
        </div>
        <a href="/crud-php-2/Index.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i>
            Submit</button>
    </form>
    <?php include 'indexJs.php' ?>
    <?php include 'script.js' ?>
</body>

</html>