<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD Informasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="css/navbar.css"/>
    <script src="js/navbar.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

    <style type="text/css">
      * {
        font-family: "Arial";
        
      }
      html,body {
        min-height: 100%;
        background-color: #15616D;
      }
      h1 {
        text-transform: uppercase;
        color: #ff7d00;
        margin-top: 55px;
        margin-bottom: 44px;
      }
    table {
      border: solid 2px #000000;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #F0F8FF;
        border: solid 2px #000000;
        color: #336B6B;
        padding: 10px;
        text-align: center;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        background-color: #F0F8FF;
        border: solid 2px #000000;
        color: #000000;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
        
    }




    @media (min-width: 568px) {
        .name-item,
        .contact-item {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }
        .contact-item .item {
          width: calc(50% - 8px);
        }
        .name-item input {
          width: calc(50% - 20px);
        }
        .contact-item input {
          width: calc(100% - 12px);
        }
      }
    </style>
  </head>
  <body>
<header>
    <nav>
        <div class="logo">
            <img src="images/logo.jpeg" alt="image" height="80px" width="180px"/>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Appointment</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="#">Layanan</a></li>
            <li class="active"><a data-toggle="tab" href="#products">Produk</a></li>
            <li><a href="#">Notifikasi</a></li>
            <li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["barbersho"])) { echo count($_SESSION["testing"]); } else { echo '0';} ?> </span></a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>

    <script src="navbar.js"></script>

    <center><h1>Data Informasi</h1><center>
    <center><button ><a href="tambah_produk.php">+ &nbsp; Tambah Informasi</a></button><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Job</th>
          <th>Deskripsi</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM informasi ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo substr($row['jobdesc'], 0, 20); ?></td>
          <td>Rp <?php echo number_format($row['gaji'],0,',','.'); ?></td>
          <td style="text-align: center;"><img src="images/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td>
              <button><a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a></button> |
              <button ><a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></button>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>


    <footer class="footer">
        <div class="footer-left">
            <h3>Pak Kumis <br>Barbershop</h3>
        </div>
        <div class="footer-center">
      <p>
                <span style="font-size:18px"><b>Hubungi Kami</b></span>
            </p>
      <div>
                <img src="images/wa.png" class="fa fa-phone" height="30px" width="30px"></i>
                <p>+6285156968495</p>
            </div>
            <div>
                <img src="images/gmail.png" class="fa fa-envelope" height="40px" width="40px"></i>
                <p><a href="#">pakumis@gmail.com</a></p>
            </div>
            <div>
                <img src="images/map.png" class="fa fa-map-marker" height="80px" width="80px"></i>
                <p><span>Balige</span>Jl. Kartini Atas Balige, Kabupaten Toba, Sumatera Utara</p>
            </div>  
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>Social Media</span>
            </p>
            <div class="footer-media">
        <a href="#"><img src="images/ig.png" class="fa fa-instagram" height="30px" width="30px"></i></a>
                <a href="#"><img src="images/fb.png" class="fa fa-facebook" height="30px" width="30px"></i></a>
            </div>
        </div>
    <center><p class="footer-copyright">Copyright Team 4 PSW II Institut Teknologi Del 2022</p></center>
    </footer>
  </body>
</html>