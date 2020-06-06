<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						
						<form action="<?= base_url('produk/tambah')?>" method="POST">
							<div class="form-group">
								<label for="name">Nama Produk : </label>
								<input type="text" class="form-control" name="nama_produk" id="nama_produk">
							</div>

							<div class="form-group">
								<label for="nim">Harga Produk : </label>
								<input type="number" class="form-control" name="harga_produk" id="harga_produk">
							</div>

							<div class="form-group">
								<label for="name">kategori : </label>
								<select class="form-control" id="id_kategori" name="id_kategori">
									<?php foreach($kategori as $kat): ?>
									<option value="<?=$kat->id_kategori; ?>"><?php echo $kat->nama_kategori; ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group">
								<label for="name">Kasir : </label>
								<select class="form-control" id="id_kasir" name="id_kasir">
									<?php foreach($kasir as $kas): ?>
									<option value="<?=$kas->id_kasir; ?>"><?php echo $kas->nama_kasir; ?></option>
									<?php endforeach; ?>
								</select>
							</div>


							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>	