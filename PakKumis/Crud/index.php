<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD Index</title>
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
    a {
          background-color: #001524;
          color: #F8F8FF;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
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



    <center><h1>Data Produk</h1><center>
    <center><a href="tambah_produk.php">+ &nbsp; Tambah Produk</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Dekripsi</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
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
          <td><?php echo $row['nama_produk']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?></td>
          <td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>


    <footer>
      <h2>Pak Kumis <br /> Barbershop</h2>
      <h4>Hubungi Kami</h4>
      <h4 class="media">Social Media</h4>
      <br />
      <div class="gambar">
        <center>
          <ul>
            <li><img src="gambar/wa.PNG" style="width: 2%" /><a>+6285156968495</a></li>
            <li><img src="gambar/gmail.PNG" style="width: 3%" /><a>pakumis@gmail.com</a></li>
            <li>
              <img src="gambar/map.PNG" style="width: 5%" /><a>Jl. Kartini Atas Balige, Balige III, <br />
               Balige KabupatenToba Samosir, <br />Sumatera Utara</a>
            </li>
          </ul>
        </center>
      </div>
      <div class="sosial">
        <img src="gambar/instagram.PNG" style="width: 3%" /> &nbsp;
        <img src="gambar/fb.PNG" style="width: 3%" />
      </div>
      <p>Copyright Team 4 PSW II Institut Teknologi Del 2022</p>
    </footer>
  </body>
</html>