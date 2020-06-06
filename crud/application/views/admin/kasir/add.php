<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						
						<form action="<?= base_url('kasir/tambah')?>" method="POST">
							<div class="form-group">
								<label for="name">Nama Kasir : </label>
								<input type="text" class="form-control" name="nama_kasir" id="nama_kasir">
							</div>
							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>	