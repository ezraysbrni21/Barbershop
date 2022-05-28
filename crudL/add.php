<?php
// Include config file
include "config.php";

// Processing form data when form is submitted
if(isset($_POST['tambah'])){
  
    // $jenis = $_POST['jenis_layanan'];
    $nama = filter_input(INPUT_POST, 'nama_produk', FILTER_SANITIZE_STRING);
    $layanan = filter_input(INPUT_POST, 'layanan', FILTER_SANITIZE_STRING);
    $harga = filter_input(INPUT_POST, 'harga_produk', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi_produk', FILTER_SANITIZE_STRING);
    $diskon = filter_input(INPUT_POST, 'diskon_produk', FILTER_SANITIZE_STRING);

    $sql = "insert into layanan (nama_produk,layanan,harga_layanan,deskripsi_layanan,diskon_produk) values ('$nama','$layanan', '$harga', '$deskripsi', '$diskon')";
    $query = mysqli_query($conn,$sql);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Tambah</h2>
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Id Layanan</label>
                            <input type="text" name="deskripsi_produk" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Jenis Layanan</label>
                            <input type="text" name="nama_produk" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Layanan</label>
                            <textarea name="layanan" class="form-control" required></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Harga Layanan</label>
                            <input type="number" name="harga_produk" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
						<div class="form-group">
                            <label>Diskon Layanan</label>
                            <input type="number" name="diskon_produk" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <input type="submit" name="tambah" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>