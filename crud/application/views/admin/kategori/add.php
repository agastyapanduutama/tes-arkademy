<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						
						<form action="<?= base_url('kategori/tambah')?>" method="POST">
							<div class="form-group">
								<label for="name">Nama kategori : </label>
								<input type="text" class="form-control" name="nama_kategori" id="nama_kategori">
							</div>
							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>	