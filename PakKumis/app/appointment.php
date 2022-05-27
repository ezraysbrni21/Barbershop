<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Appointment</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="css/navbar.css"/>
    <script src="js/navbar.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    
    <style>
      html,body {
        min-height: 100%;
        background-color: #15616D;
      }

      body, div, form, input, textarea, p {
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #000000;
        line-height: 22px;
      }

      h1 {
        position: absolute;
        margin: 0;
        font-size: 32px;
        color: #fff;
        z-index: 2;
      }

      .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 20px;
      }

      form {
        width: 100%;
        padding: 20px;
        border-radius: 6px;
        background: #ff7d00;
        box-shadow: 0 0 10px 0 #cc0052;
        margin-top: 36px;
      }

      .banner {
        position: relative;
        height: 210px;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .banner::after {
        content: '';
        background-color: rgba(0, 0, 0, 0.4);
        position: absolute;
        width: 100%;
        height: 100%;
      }

      input, textarea {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      input {
        width: calc(100% - 10px);
        padding: 5px;
      }

      textarea {
        width: calc(100% - 12px);
        padding: 5px;
      }

      .item:hover
      p, input:hover::placeholder {
        color: #cc0052;
      }

      .item input:hover,
      .item textarea:hover {
        border: 1px solid transparent;
        box-shadow: 0 0 6px 0 #cc0052;
        color: #cc0052;
      }

      .item {
        position: relative;
        margin: 10px 0;
      }

      .btn-block {
        margin-top: 10px;
        text-align: center;
      }

      button {
        width: 150px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #cc0052;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
      }

      button:hover {
        background: #ff0066;
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
            <img src="images/pkb.jpeg" alt="image" height="80px" width="180px"/>
        </div>
        <ul>
        <li><a href="../Home/Home.php">Home</a></li>
            <li><a href="../PakKumis/app/appointment.php">Appointment</a></li>
            <li><a href="../Informasi/informasi.php">Informasi</a></li>
            <li><a href="../Layanan/Layanan.php">Layanan</a></li>
            <li><a href="../produkcart/multi_tab_shopping_cart.php">Produk</a></li>
            <li><a href="../PakKumis/notifikasi/index.php">Notifikasi</a></li>
            <li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["barbershop"])) { echo count($_SESSION["barbershop"]); } else { echo '0';}?></span></a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>




    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Form</h1>
        </div>
        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="name" placeholder="First" />
            <input type="text" name="name" placeholder="Last" />
          </div>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Email</p>
            <input type="text" name="name" />
          </div>
          <div class="item">
            <p>Tanggal & Waktu</p>
            <input type="text" name="name" />
          </div>
        </div>
        <div class="item">
          <p>Layanan</p>
          <input type="text" name="name" />
        </div>

        <div class="btn-block">
          <button type="submit" href="../PakKumis/konfirmasi/index.php">APPLY</button>
        </div>
      </form>
    </div>

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