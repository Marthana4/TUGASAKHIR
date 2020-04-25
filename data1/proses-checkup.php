<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
	$id			= $_POST['id'];
	$shu		= $_POST['shu'];
	$hari		= $_POST['hari'];
	$tanggal  	= $_POST['tanggal'];
	
	$query="UPDATE data SET  shu='$shu', hari='$hari', tanggal='$tanggal' WHERE id= $id";

	$res 	= mysqli_query($conn, $query);
	$count	= mysqli_affected_rows($conn);

	if($res > 0){
		header("Location: index.php");
	}else{
		header("Location: checkup.php");
	}
}