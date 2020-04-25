<?php
include '../koneksi.php';

$sql = "SELECT*FROM data ORDER BY nama";

$res = mysqli_query($conn, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
  $pinjam[] = $data;
}
include '../asset/aset/header.php';
   
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"> <i class="fas fa-edit"></i>Data ODP</h2>
  </div>
  <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Detail</th>
      <th scope="col">Nama</th>
      <th scope="col">Usia</th>
      <th scope="col">Alamat</th>
      <th scope="col">Suhu</th>
      <th scope="col">Tanggal terakhir check</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($pinjam as $p ) { ?>
        
        <tr>
          <th scope="row"><?= $no ?></th>
          <td><a href="detail.php?id=<?= $p['id']?>" class="badge badge-success">Detail</a></td>
          <td><?= $p['nama'] ?></td>
          <td><?= $p['usia'] ?></td>
          <td><?= $p['alamat'] ?></td>
          <td><?= $p['shu'] ?></td>
          <td><?= date('d F Y', strtotime($p['tanggal'])) ?></td>
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