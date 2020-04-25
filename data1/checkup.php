<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM data WHERE id = '$id' ");
$data = mysqli_fetch_assoc($query);

include '../asset/aset/header1.php';
?>



<div class="container">
	<div class="row mt-4">
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Check up</h5>
				<div class="card-body">
					<form method="post" action="proses-checkup.php">
					<input type="hidden" name="id" value="<?php echo $data["id"]; ?>"> 
						<div class="form-group">
							<label for="number">Hari ke - </label>
							<input class="form-control" type="number" name="hari">
						</div>
						<div class="form-group">
							<label for="number">Suhu saat ini</label>
							<input class="form-control" type="number" name="shu">
						</div>
						<div class="form-group">
							<label for="datepicker">Tanggal check up</label>
							<input type="date" class="form-control" name="tanggal">
						</div>
						<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include '../asset/aset/footer.php';
?>