<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						<?= form_open(base_url('kasir/edit/'. $kasir->id_kasir), 'class="form-horizontal"'); ?>
						<form action="<?= base_url('kasir/tambah')?>" method="POST">
							<div class="form-group">
								<label for="name">Nama kasir : </label>
								<input type="text" value="<?= $kasir->nama_kasir?>" class="form-control" name="nama_kasir" id="nama_kasir">
							</div>


							<button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
</div>	