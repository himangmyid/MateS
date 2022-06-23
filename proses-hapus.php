<?php
	include 'db.php';

	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_kategori WHERE kategori_id = '".$_GET['idk']."' ");
		echo '<script>window.location="data-kategori.php"</script>';
	}

	if(isset($_GET['idp'])){
		$produk = mysqli_query($conn, "SELECT produk_gbr FROM tb_produk WHERE produk_id = '".$_GET['idp']."' ");
		$p = mysqli_fetch_object($produk);

		unlink('./produk/'.$p->produk_gbr);

		$delete = mysqli_query($conn, "DELETE FROM tb_produk WHERE produk_id = '".$_GET['idp']."' ");
		echo '<script>window.location="data-produk.php"</script>';
	}

?>