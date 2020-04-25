<?php
include'../koneksi.php';

if(isset($_POST["pesan"])){
    $id     =$_POST["id"];
    $nama   =$_POST["nama"];
    $email    =$_POST["email"];
    $pesan  =$_POST["pesan"];

  $sql = "INSERT INTO komentar (nama, email, pesan )
      VALUES ('$nama', '$email', '$pesan' )";

  $res = mysqli_query($conn, $sql);

  $count = mysqli_affected_rows($conn);

  if($count == 1)
  {
    header("Location: ../tanya/tanya.php");
  }
  else
  {
    header("Location: tanya/tanya.php");
  }
} 
else 
{
  header("Location: tanya/tanya.php"); 
}

?>