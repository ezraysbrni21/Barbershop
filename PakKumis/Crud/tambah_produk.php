<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD Tambah</title>
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
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga_beli" required="" />
        </div>

        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>