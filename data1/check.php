<?php

include '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM data WHERE id = '$id' ");

include '../asset/aset/header1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID</title>
</head>
<body>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card">
            <div class="card-header bg-primary">
            <?php while($data = mysqli_fetch_assoc($query)):?>
            <center><h2 class="card-title text-white"><?= $data['id']?></h2></center>
            </div>
            <div class="card-body">

                <table class="table">

                    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>"> 
                    <tr>
                        <td>Check Up Hari ke-</td>
                        <td><?= $data['hari']?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?= $data['nama']?></td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td><?= $data['usia']?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $data['alamat']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pertama Check up</td>
                        <td><?= $data['tgl']?></td>
                    </tr>
                    <tr>
                        <td>Suhu Awal (dlm derajat)</td>
                        <td><?= $data['suhu']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Terakhir Check up</td>
                        <td><?= $data['tanggal']?></td>
                    </tr>
                    <tr>
                        <td>Suhu Akhir(dlm derajat)</td>
                        <td><?= $data['shu']?></td>
                    </tr>
                    <tr>
                        <td>Keluhan</td>
                        <td><?= $data['keluhan']?></td>
                    </tr>
                              

                </table>
            </div>
            <a href="checkup.php?id=<?= $data['id']?>" class="badge badge-info" style="float:right;">Check up</a>
            <a href="../data1/index.php" class="badge badge-success" style="float:right;">Kembali</a>
        </div>
        <?php
                   endwhile;
                 ?>  
</body>
</html>
<?php
include '../asset/aset/footer.php';
?>