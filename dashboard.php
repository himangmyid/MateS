<?php
    session_start();

    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
        <title>Dashboard</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    </head>

    <body>
        <!--===== HEADER =====-->
        <nav class="teal darken-2 lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Dashboard</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="data-kategori.php">Data Kategori</a></li>
                    <li><a href="data-produk.php">Data Produk</a></li>
                    <li><a href="keluar.php">Keluar</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="data-kategori.php">Data Kategori</a></li>
                    <li><a href="data-produk.php">Data Produk</a></li>
                    <li><a href="keluar.php">Keluar</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>



        <!--===== KONTEN =====-->
        <div class="section">
            <div class="container">
                <h3>Dashboard</h3>
                <div class="box">
                    <P>Selamat Datang
                        <?php echo $_SESSION['a_global']->nama_admin ?> di Toko Online</P>
                </div>
            </div>
        </div>
        <!--===== FOOTER =====-->

        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 <a class="teal-text text-darken-2 " href="https://www.himang.my.id/">Himang.my.id</a></small>
            </div>
        </footer>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
        <script src="js/materialize.js "></script>
        <script src="js/init.js "></script>
    </body>

    </html>