<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    <body>
        <div class="container">
            <form method="POST" action="Index.php">
            <center><img src="img\pkb.png" height="120px" width="120px"></center>
                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text"placeholder="Masukan username...">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password"placeholder="Masukan password...">
                <br>

                <button>Log In</button>
                
                <p> Belum punya akun?
                  <a href="Register.php">Register</a>
                </p>
            </form>
        </div>
    </body>
</html>