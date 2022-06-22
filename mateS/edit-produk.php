<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
        $produk = mysqli_query($conn, "SELECT * FROM tb_produk WHERE produk_id = '".$_GET['id']."' ");
		if(mysqli_num_rows($produk) == 0)
        echo '<script>window.location="data-produk.php"</script>';
        $p = mysqli_fetch_object($produk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Edit Produk</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
  

   	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Edit Data Produk</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
                    
  
    <select  name="kategori" required>
      <option value="" >Pilih Kategori</option>
      
                        <?php 
							$kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id DESC");
							while($r = mysqli_fetch_array($kategori)){
						?>
						<option value="<?php echo $r['kategori_id'] ?>" <?php echo ($r['kategori_id'] == $p->kategori_id)? 'selected':''; ?>><?php echo $r['kategori_nama'] ?></option>
						<?php } ?>
      
    </select>
    <label>Pilih Kategori</label>
    <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value="<?php echo $p->produk_nama ?>" required>
					<input type="text" name="harga" class="input-control" placeholder="Harga Produk" value="<?php echo $p->produk_harga ?>" required>

					<img src="produk/<?php echo $p->produk_gbr ?>" width="100px">
					<input type="hidden" name="foto" value="<?php echo $p->produk_gbr ?>">
					
                    
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" multiple name="gambar" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
    <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo $p->produk_desk ?></textarea><br>
    <select class="input-control" name="status">
						<option value="">--STATUS--</option>
						<option value="1" <?php echo ($p->produk_status == 1)? 'selected':''; ?>>Aktif</option>
						<option value="0" <?php echo ($p->produk_status == 0)? 'selected':''; ?>>Tidak Aktif</option>
					</select>					
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                 </button>
                 
				</form>
				<?php 
					if(isset($_POST['submit'])){

						// data inputan dari form
						$kategori 	= $_POST['kategori'];
						$nama 		= $_POST['nama'];
						$harga 		= $_POST['harga'];
						$deskripsi 	= $_POST['deskripsi'];
						$status 	= $_POST['status'];
						$foto 	 	= $_POST['foto'];

						// data gambar yang baru
						$filename = $_FILES['gambar']['name'];
						$tmp_name = $_FILES['gambar']['tmp_name'];



						// jika admin ganti gambar
						if($filename != ''){
							$type1 = explode('.', $filename);
							$type2 = $type1[1];

							$newname = 'produk'.time().'.'.$type2;

							// menampung data format file yang diizinkan
							$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

							// validasi format file
							if(!in_array($type2, $tipe_diizinkan)){
								// jika format file tidak ada di dalam tipe diizinkan
								echo '<script>alert("Format file tidak diizinkan")</scrtip>';

							}else{
								unlink('./produk/'.$foto);
								move_uploaded_file($tmp_name, './produk/'.$newname);
								$namagambar = $newname;
							}

						}else{
							// jika admin tidak ganti gambar
							$namagambar = $foto;

						}

						// query update data produk
						$update = mysqli_query($conn, "UPDATE tb_produk SET 
												kategori_id = '".$kategori."',
												produk_nama = '".$nama."',
												produk_harga = '".$harga."',
												produk_desk = '".$deskripsi."',
												produk_gbr = '".$namagambar."',
												produk_status = '".$status."'
												WHERE produk_id = '".$p->produk_id."'	");
						if($update){
							echo '<script>alert("Ubah data berhasil")</script>';
							echo '<script>window.location="data-produk.php"</script>';
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
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
    </script>
    

</body>

</html>