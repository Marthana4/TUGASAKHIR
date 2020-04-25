<?php
include'../koneksi.php';

if(isset($_POST["simpan"])){
    $id     =$_POST["id"];
    $nama   =$_POST["nama"];
    $usia    =$_POST["usia"];
    $alamat  =$_POST["alamat"];
    $suhu    = $_POST["suhu"];
    $shu      = $_POST["shu"];
    $keluhan      = $_POST["keluhan"];
    $hari      = $_POST["hari"];
    $tgl      = $_POST["tgl"];
    $tanggal      = $_POST["tanggal"];

	$sql = "INSERT INTO data (nama, usia, alamat, suhu, shu, keluhan, hari, tgl, tanggal )
			VALUES ('$nama', '$usia', '$alamat', '$suhu', '$suhu', '$keluhan', 1, '$tgl', '$tgl')";

	$res = mysqli_query($conn, $sql);

	$count = mysqli_affected_rows($conn);

	if($count == 1)
	{
		header("Location: ../data1/index.php");
	}
	else
	{
		header("Location: tambah.php");
	}
} 
else 
{
	header("Location: tambah.php");	
}

?>