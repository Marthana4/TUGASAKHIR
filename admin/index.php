<?php
include '../koneksi.php';

$sql = "SELECT*FROM login ORDER BY username";

$res = mysqli_query($conn, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
  $pinjam[] = $data;
}
include '../asset/aset/header1.php';
   
?> 

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header" >
    <h2 class="card-title"> <i class="fas fa-edit"></i>Admin</h2>
  </div>
  <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr class="bg-success text-white">
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($pinjam as $p ) { ?>
        
        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $p['username'] ?></td>
          <td><?= $p['password'] ?></td>
        </tr>
    <?php
      $no++;
    }
    ?>
  </tbody>
</table>

 <center>
  <a href="tambah.php" class="badge badge-dark">Tambah</a></center> 
  </div>
</div>
<?php
include '../asset/aset/footer.php';
?>