<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
}
$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '".$_SESSION['id']."' ");
$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Profil</title>

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
            <h4>Profil</h4>
            <div class="box">
            <form action="" method="POST" >
                   <div class="input-field col s12">
          <input id="nama" type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->nama_admin ?>"  required>
            <label for="nama">Nama Lengkap</label>
        </div>

        <div class="input-field col s12">
          <input id="user" type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
            <label for="user">Username</label>
        </div>

        <div class="input-field col s12">
          <input id="hp" type="text" name="hp" placeholder="No Handphone" class="input-control" value="<?php echo $d->telp_admin ?>" required>
            <label for="hp">No. Handphone</label>
        </div>

        <div class="input-field col s12">
          <input id="email" type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->email_admin ?>" required>
            <label for="email">Email</label>
        </div>

        <div class="input-field col s12">
          <input id="alamat" type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->alamat_admin ?>" required>
            <label for="alamat">Alamat</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Ubah Profil
                 </button>
         </form>
         <?php
                if(isset($_POST['submit'])){

                    $nama   = ucwords($_POST['nama']);
                    $user   = $_POST['user'];
                    $hp     = $_POST['hp'];
                    $email  = $_POST['email'];
                    $alamat = ucwords($_POST['alamat']);

                    $update = mysqli_query($conn, "UPDATE tb_admin SET 
                                nama_admin = '". $nama."',
                                username = '". $user."',
                                telp_admin = '". $hp."',
                                email_admin = '". $email."',
                                alamat_admin = '". $alamat."'
                                WHERE id_admin ='".$d->id_admin."' ");

                                if($update){
                                    echo '<script>alert("Ubah data Berhasil")</script>';
                                    echo '<script>window.location="profil.php"</script>';
                                }else{
                                    'Gagal Update Profil '.mysqli_error($conn);
                                }
                }
                ?>
            </div>
        </div>
    </div>

<div class="container">
    <div class="section">
        <h4>Ubah Password</h4>
    <div class="box">
                <form action="" method="POST">
                    <input type="password" name="pass1" placeholder="Password Baru" class="input-control"  required>
                    <input type="password" name="pass2" placeholder=" Konfirmasi Password Baru" class="input-control"  required>
                    <button class="btn waves-effect waves-light" type="submit" name="ubah_password">Ubah Password
                 </button>
                </form>
                <?php
                if(isset($_POST['ubah_password'])){

                    $pass1    = $_POST['pass1'];
                    $pass2    = $_POST['pass2'];

                    if($pass2 !=$pass1){
                        echo '<script>alert("Konfirmasi Password Baru tidak Sesuai")</script>';
                    }else{

                        $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
                                password = '".MD5($pass1)."'
                                WHERE id_admin ='".$d->id_admin."' ");
                        if($u_pass){
                            echo '<script>alert("Ubah data Berhasil")</script>';
                            echo '<script>window.location="profil.php"</script>';
                        }else{
                            'Gagal Update Profil '.mysqli_error($conn);
                        }
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