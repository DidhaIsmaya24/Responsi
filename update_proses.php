<?php
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: index.php") ;
	}
	include("koneksi.php") ;
	
	$noring = $_POST['nama'] ;
	$jenis = $_POST['cp'] ;
	$umur = $_POST['bahan'] ;
	
	$sql_update = "UPDATE `barang` SET `nama`='{$noring}',`cp`='{$jenis}',`bahan`='{$umur}' WHERE `nama`='{$noring}'" ;
	
	$query_update = mysqli_query($konek,$sql_update) ;
	
	if($query_update){
		echo '
		<script>
			alert("update daftar sukses");
			window.location = "index.php"
		</script>
		';
	
	}else{
		echo "Error: " . $sql_update . "<br>" . mysqli_error($konek);
	}
	
?>
