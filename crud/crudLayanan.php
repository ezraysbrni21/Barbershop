<!DOCTYPE html>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
if(isset($_POST['tambah'])) {

    $nama = filter_input(INPUT_POST, 'nama_produk', FILTER_SANITIZE_STRING);
    $layanan = filter_input(INPUT_POST, 'layanan', FILTER_SANITIZE_STRING);
    $harga = filter_input(INPUT_POST, 'harga_produk', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi_produk', FILTER_SANITIZE_STRING);
    $diskon = filter_input(INPUT_POST, 'diskon_produk', FILTER_SANITIZE_STRING);

    $sql = "insert into layanan (nama_produk,layanan,harga_layanan,deskripsi_layanan,diskon_produk) values ('$nama','$layanan', '$harga', '$deskripsi', '$diskon')";
    $query = mysqli_query($conn,$sql);
    header("Location: crudLayanan.php");
}
?>
<html>
<head>
	<meta charset="UTF-8">
    <title>CRUD Produk</title>
    <link rel="stylesheet" href="bootstrap/css/style_2_055.css">
	<link rel="stylesheet" href="bootstrap/css/navbar.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-utilities.rtl.min.css">
</head>
<header>
    <nav>
        <div class="logo">
            <img src="bootstrap/images/logo.jpeg" alt="image" height="80px" width="180px"/>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Appointment</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Notifikasi</a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
<body background="bg.jpg">
	<fieldset id="y">
	<h1 align="center">Produk</h1>
	<form onsubmit="" method="post">
		<!-- <div>
			<label>ID Layanan</label><label class="validation-error hide" id="validasinamaproduk">This field is required.</label>
			<input type="text" name="nama_produk" id="produk" placeholder="Nama produk" required>
		</div><br> -->
        <div>
			<label>Nama Produk</label><label class="validation-error hide" id="validasinamaproduk">This field is required.</label>
			<input type="text" name="nama_produk" id="produk" placeholder="Nama produk" required>
		</div><br>
        <div>
			<label>Layanan</label><label class="validation-error hide" id="validasinamaproduk">This field is required.</label>
			<input type="text" name="layanan" id="produk" placeholder="Layanan" required>
		</div><br>
        <div>
			<label>Harga Layanan</label><label class="validation-error hide" id="validasinamaproduk">This field is required.</label>
			<input type="text" name="harga_produk" id="produk" placeholder="Harga produk" required>
		</div><br>
		<div>
			<label>Deskripsi Layanan</label>
			<input type="text" name="deskripsi_produk" id="desc" placeholder="Deskripsi produk" required></input>
		</div><br>
		<div>
			<label>Diskon</lsabel><label class="validation-error hide" id="validasinamaproduk">This field is required.</label>
			<input type="text" name="diskon_produk" id="produk" placeholder="Nama produk" required>
		</div><br>
		<input type="submit" class="btn btn-success btn-block" name="tambah" value="Konfirmasi"/>
	</form>		
    <center><table class="list" id="list" border="1" width="750px">
		<tr>
			<th>ID Layanan</th>
			<th>Jenis Layanan</th>
			<th>Harga Layanan</th>
			<th>Deskripsi Layanan</th>
            <th>Diskon</th>
			<th>Action</th>
        </tr>
        <tr>
            <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM layanan ORDER BY id DESC");
        while($hasil = mysqli_fetch_array($result)) { ?>

            <td><?= $no++ ?></td>
            <td><?= $hasil['nama_produk']?></td>
            <td><?= $hasil['harga_layanan']?></td>
            <td><?= $hasil['deskripsi_layanan']?></td>
            <td><?= $hasil['diskon_produk']?></td>
        <?php } ?>
        </tr>
		<tbody>

		</tbody>
	</table></center>
	</fieldset>
    <script src="bootstrap/js/script_055.js"></script>
	<script src="bootstrap/js/navbar.js"></script>
</body>
<footer>
    <h2 class="pak">Pak Kumis <br/> Barbershop</h2>
    <h4>Hubungi Kami</h4>
    <h4 class="media">Social Media</h4> <br>
    <div class="gambar">
        <center>
            <ul>
                <li><img src="bootstrap/images/wa.PNG" width=30><a>+6285156968495</a></li>
                <li><img src="bootstrap/images/gmail.PNG" width=50><a>pakumis@gmail.com</a></li>
                <li ><img src="bootstrap/images/map.PNG" width=80 ><a>Jl. Kartini Atas Balige, Balige III, <br/> Balige KabupatenToba Samosir, <br/> Sumatera Utara</a></li>
            </ul>
        </center>
    </div>
    <div class="sosial">
        <img src="bootstrap/images/instagram.PNG" width=40> &nbsp;
        <img src="bootstrap/images/fb.PNG" width=37>
    </div>
    <p><br>Copyright Team 4 PSW II Institut Teknologi Del 2022</p>
</footer>
</html>