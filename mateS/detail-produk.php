<?php 
	error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT telp_admin, email_admin, alamat_admin FROM tb_admin WHERE id_admin = 2");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM tb_produk WHERE produk_id = '".$_GET['id']."'  ");
    $p = mysqli_fetch_object($produk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title> Produk - MateS </title>

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
                                <input type="search" type="submit" id="search" name="search" class="autocomplete" value="<?php echo $_GET['search'] ?>" >
                                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                                <label for=" search "></label>
                                <i class="material-icons ">close</i>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>




  

    <!--Detai PRODUK  -->

    <div class="section">
		<div class="container">
			 <h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img class="materialboxed" src="produk/<?php echo $p->produk_gbr  ?>" width="100%">
                   
				</div>
				<div class="col-2">
					<h4><?php echo $p->produk_nama ?> </h4>
                    <div class="divider"></div>
					<h4 class="har">Rp. <?php echo number_format($p->produk_harga)  ?> </h4>
					<p>Deskripsi : <br>
						<?php echo $p->produk_desk ?>
					</p>
					
                    <button class="btn waves-effect waves-light" type="submit" name="submit "><a href="https://api.Whatsapp.com/send?phone=<?php echo $a->telp_admin ?>&text=Hai kak saya tertarik dengan produk anda" target="_blank">Hubungi Via WhatsApp </a>
                 </button>
				</div>
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
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });</script>

</body>

</html>