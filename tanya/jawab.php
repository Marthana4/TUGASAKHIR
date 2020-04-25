<?php
include '../koneksi.php';

$sql = "SELECT*FROM komentar ORDER BY nama";

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
    <h2 class="card-title"> <i class="fas fa-edit"></i>Komentar</h2>
  </div>
  <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr class="bg-info text-white">
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($pinjam as $p ) { ?>
        
        <tr>
          <th scope="row"><?= $no ?></th>
          <td> <a href="hapus.php?id=<?= $p['id']?>" class="badge badge-danger">Hapus</a></td>
          <td><?= $p['nama'] ?></td>
          <td><?= $p['email'] ?></td>
          <td><?= $p['pesan'] ?></td>
        </tr>
    <?php
      $no++;
    }
    ?>
  </tbody>
</table>
  </div>
</div>
<?php
include '../asset/aset/footer.php';
?>