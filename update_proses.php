<?php
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: index.php") ;
	}
	include("koneksi.php") ;
	
	$noring = $_POST['type'] ;
	$jenis = $_POST['merek'] ;
	$umur = $_POST['tahun'] ;
	
	$sql_update = "UPDATE `mobil` SET `type`='{$noring}',`merek`='{$jenis}',`tahun`='{$umur}' WHERE `tahun`='{$noring}'" ;
	
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
