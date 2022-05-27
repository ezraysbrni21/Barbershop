<?php
// Include config file
include "config.php";

$id = $_GET['id'];
// Processing form data when form is submitted
if(isset($_POST['ubah'])){
  
    // $jenis = $_POST['jenis_layanan'];
    $nama = filter_input(INPUT_POST, 'nama_produk', FILTER_SANITIZE_STRING);
    $layanan = filter_input(INPUT_POST, 'layanan', FILTER_SANITIZE_STRING);
    $harga = filter_input(INPUT_POST, 'harga_produk', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi_produk', FILTER_SANITIZE_STRING);
    $diskon = filter_input(INPUT_POST, 'diskon_produk', FILTER_SANITIZE_STRING);

    $sql = "update layanan set nama_produk = '$nama', layanan = '$layanan', harga_layanan='$harga',deskripsi_layanan='$deskripsi',diskon_produk='$deskripsi',diskon='$diskon' where id =$id";
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
                        <h2>Ubah</h2>
                    </div>
                    <form action="" method="post">
                    <?php
                    $query = mysqli_query($conn,"SELECT * FROM layanan WHERE id=$id");
                    $kat = mysqli_fetch_assoc($query);
                        ?>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" value="<?= $kat['nama_produk'] ?>" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Harga Layanan</label>
                            <input type="number" name="harga_produk" value="<?= $kat['harga_layanan'] ?>" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Layanan</label>
                            <input type="text" name="layanan" value="<?= $kat['layanan'] ?>" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Layanan</label>
                            <textarea name="deskripsi_layanan" class="form-control" required><?= $kat['deskripsi_layanan'] ?></textarea>
                            <span class="help-block"></span>
                        </div>
						<div class="form-group">
                            <label>Diskon Layanan</label>
                            <input type="number" name="diskon_produk" value="<?= $kat['diskon_produk'] ?>" class="form-control" required>
                            <span class="help-block"></span>
                        </div>
                        <input type="submit" name="ubah" class="btn btn-primary" value="Ubah">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>