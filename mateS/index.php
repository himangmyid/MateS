<?php 
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT telp_admin, email_admin, alamat_admin FROM tb_admin WHERE id_admin = 2");
    $a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>MateS</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="teal darken-2 lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">MateS</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="produk.php">Produk</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="produk.php">Produk</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>




    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <form action="produk.php">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="search" type="submit" id="search" name="search" class="autocomplete" required>
                                <label for=" search "></label>
                                <i class="material-icons ">close</i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>




    <!-- kategori -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
                <a href="produk.php?kat=<?php echo $k['kategori_id'] ?>">
                    <div class="col-5">
                        <img src="gbr/kategori.png" width="50px" style="margin-bottom:5px;">
                        <p>
                            <?php echo $k['kategori_nama'] ?>
                        </p>
                    </div>
                </a>
                <?php }}else{ ?>
                <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>


    <!--LIST PRODUK  -->

    <div class="container">
    <h3>Produk Terbaru</h3>
        <div class="row">
            <div class="box">

            <?php 
                $produk = mysqli_query($conn, "SELECT * FROM tb_produk WHERE produk_status = 1 ORDER BY produk_id DESC LIMIT 8");
                if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
            ?>
                    <a href="detail-produk.php?id=<?php echo $p['produk_id'] ?>">
                <div class="col s12 m4">
                   
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="produk/<?php echo $p['produk_gbr'] ?>">
                                <hr>
                                <a class="halfway-fab btn-floating teal darken-2 pulse" href="detail-produk.php?id=<?php echo $p['produk_id'] ?>"> <i class="material-icons">add_shopping_cart</i> </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title"><?php echo substr($p['produk_nama'], 0, 30) ?></span>

                            </div>
                            <div class="card-action">
                                <p class="harga">Rp.
                                    <?php echo number_format($p['produk_harga']) ?>
                                </p>
                            </div>
                        </div>
                   
                </div>
                </a>
                    <?php }}else{ ?>
                    <p>Produk tidak ada</p>
                    <?php } ?>
            </div>
        </div>
    </div>


    <footer class="page-footer black ">
        <div class="container">
            <div class="row ">
                <!--===== Footer =====-->
                <div class="footer">
                    <div class="container">
                        <h4>Alamat</h4>
                        <p>
                            <?php echo $a->alamat_admin ?>
                        </p>
                        <h4>Email</h4>
                        <p>
                            <?php echo $a->email_admin ?>
                        </p>
                        <h4>WhatsApp</h4>
                        <p>
                            <?php echo $a->telp_admin ?>
                        </p>
                    </div>
                    <div class="container"> <p> Copyright &copy; 2022 <a class="teal-text text-darken-2 " href="https://www.himang.my.id/">Himang.my.id</a></p></div>
                </div>
               
            </div>
        </div>
        
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
    <script src="js/materialize.js "></script>
    <script src="js/init.js "></script>

</body>

</html>