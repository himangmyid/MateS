<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Data Kategori</title>

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
        <h4>Data Produk</h4>
            <div class="box">
            <a class="waves-effect waves-light btn" href="tambah-produk.php">Tambah Data</a>
               
                <table border="1" cellspacing="0" class="highlight">
                    <thead>
                        <tr>
                            <th width="60px" >No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                           
                            <th>Gambar</th>
                            <th>Status</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $produk = mysqli_query($conn, "SELECT * FROM tb_produk LEFT JOIN tb_kategori USING (kategori_id)  ORDER BY produk_id DESC");
                        if(mysqli_num_rows($produk) > 0){
                        while($row = mysqli_fetch_array($produk)){
                        ?>
                    <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['kategori_nama'] ?></td>
                            <td><?php echo $row['produk_nama'] ?></td>
                            <td>Rp. <?php echo number_format($row['produk_harga'])  ?></td>
                           
                            <td> <a href="produk/<?php echo $row['produk_gbr'] ?> " target="_blank"> <img src="produk/<?php echo $row['produk_gbr'] ?>" width="50px"></a> </td>
                            <td><?php echo ($row['produk_status'] ==0 )?'Tidak Aktif': 'Aktif';  ?></td>

                            <td><a href="edit-produk.php?id=<?php echo $row['produk_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['produk_id'] ?>" onclick="return confirm ('Apakah Sudah Yakin Hapus')">Hapus</a></td>
                        </tr>
                    <?php }}else{ ?>
                    <tr>
                        <td colspan="8">Tidak Ada Data Produk</td>
                    </tr>
                    <?php
                        }
                        ?>
                    </tbody>
                </table>
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