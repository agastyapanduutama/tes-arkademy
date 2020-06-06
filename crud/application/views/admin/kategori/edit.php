<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						<?= form_open(base_url('kategori/edit/'. $kategori->id_kategori), 'class="form-horizontal"'); ?>
						<form action="<?= base_url('kategori/tambah')?>" method="POST">
							<div class="form-group">
								<label for="name">Nama kategori : </label>
								<input type="text" value="<?= $kategori->nama_kategori?>" class="form-control" name="nama_kategori" id="nama_kategori">
							</div>


							<button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
</div>	