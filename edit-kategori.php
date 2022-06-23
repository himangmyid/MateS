<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
}
    $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori WHERE kategori_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($kategori) == 0)
        echo '<script>window.location="data-kategori.php"</script>';

    $k = mysqli_fetch_object($kategori);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Edit Data Kategori</title>

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
            <h4>Edit Data Kategori</h4>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->kategori_nama ?>" required>
                    <input type="submit" name="submit" value="submit" class="btn">
                </form>
                    <?php
                    if(isset($_POST['submit'])){

                        $nama = ucwords($_POST['nama']);

                        $update = mysqli_query($conn, "UPDATE tb_kategori SET 
                                                kategori_nama = '".$nama."'  
                                                WHERE kategori_id = '".$k->kategori_id."' ");

                                                if($update){
                            echo '<script>alert("Edit Data Berhasil")</script>';
                            echo '<script>window.location="data-kategori.php"</script>';
                        }else{
                            echo 'gagal '.mysqli_error($conn);
                        }
                    }
                    ?>
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