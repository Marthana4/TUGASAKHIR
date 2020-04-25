<?php
include '../asset/aset/header1.php';  
?> 
<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<h3><i class="far fa-user-plus"></i> Tambah Data</h3>
				</div>
				<div class="card-body">
					<form action="proses-tambah.php" method="post">
						<div class="form-group">
                    		<input type="text" class="form-control" name="nama" placeholder="Nama">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="usia" placeholder="Usia">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="alamat" placeholder="Alamat">
                		</div>
                		<div class="form-group">
                    		<input type="date" class="form-control" name="tgl" placeholder="Tanggal">
                		</div>
                		<div class="form-group">
                    		<input type="number" class="form-control" name="suhu" placeholder="Suhu">
                		</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="keluhan" placeholder="Keluhan">
                        </div>
                		<button type="submit" class="btn btn-dark" name="simpan">Simpan</button>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include '../asset/aset/footer.php';  
?> 