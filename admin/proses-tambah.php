<?php
include'../koneksi.php';

if(isset($_POST["simpan"])){
    $id     =$_POST["id"];
    $username   =$_POST["username"];
    $password    =$_POST["password"];

	$sql = "INSERT INTO login (username, password )
			VALUES ('$username', '$password')";

	$res = mysqli_query($conn, $sql);

	$count = mysqli_affected_rows($conn);

	if($count == 1)
	{
		header("Location: ../admin/index.php");
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