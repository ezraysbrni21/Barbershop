 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);
    
    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM informasi WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD Edit</title>
    <link rel="stylesheet" href="navbar.css"/>

    <style type="text/css">
      * {
        font-family: "Arial";
      }
      h1 {
        text-transform: uppercase;
        color: #ff7d00;
        margin-top: 55px;
        margin-bottom: 44px;
      }

      body{
        font-size: 14px;
        line-height: 22px;
      }

      button {
            width: 150px;
            background-color: darkcyan;
            color: #F8F8FF;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
            border: 0px;
            margin-top: 20px;
            border-radius: 5px;
      }
      label {
        margin-top: 10px;
        float: left;
        text-align: left;
        width: 100%;
      }
      input {
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #008B8B;
        outline-color: darkcyan;
        margin-bottom: 10px;
      }
   
      .base {
        width: 400px;
        height: auto;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background: #ededed;
      }
    </style>

    <link rel="stylesheet" type="text/css" href="app.css" />
  </head>
  <body>
    <nav>
            <div class="logo">
                <img src="gambar/logo.jpeg" alt="image" height="80px" width="180px"/>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Appointment</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Lowongan</a></li>
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
    <script src="navbar.js"></script>

    <center>
      <h1>Edit Informasi</h1>
    <center>
    <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Job</label>
          <input type="text" name="id" value="<?php echo $data['id']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Jobdesc</label>
          <input type="text" name="jobdesc" value="<?php echo $data['jobdesc']; ?>" />
        </div>
        <div>
          <label>Gaji</label>
          <input type="text" name="gaji" required=""value="<?php echo $data['gaji']; ?>" />
        </div>
        <div>
          <label>Gambar</label>
          <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
          <button type="submit">Simpan Perubahan</button>
        </div>
      </section>
    </form>
  </body>
</html>
