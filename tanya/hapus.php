<?php
include '../koneksi.php';
$id = $_GET["id"];

$query = "DELETE FROM komentar WHERE id = '$id' ";
$data = mysqli_query($conn, $query);

if(!$data){
    die ("Gagal menghapus data: ".mysqli_errno($conn)." - ".mysqli_error($conn));

}else{
    echo "<script>alert('Data berhasil dihapus.');window.location = 'jawab.php';</script>";
}
?>