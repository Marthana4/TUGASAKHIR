<?php 
  session_start();
  require('../koneksi.php');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = mysqli_query($conn, " SELECT id FROM login WHERE username='$username' ");
  $count = mysqli_num_rows($query);
  if($count > 0){
    $queryId = mysqli_query($conn, "SELECT id FROM login WHERE username='$username' AND password='$password' ");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Password Salah.");
          window.location = "../login/login.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id'] = $arrayId['id'];
      if(isset($_SESSION['id'])){
        echo '
        <script>
          alert("Login Sukses");
          window.location = "../home1.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("username tidak terdaftar.");
        window.location = "../login/login.php"
      </script>
    ';
  }
?>