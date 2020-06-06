<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						<?= form_open(base_url('produk/edit/'. $produk->id_produk), 'class="form-horizontal"'); ?>
						<form action="<?= base_url('produk/tambah')?>" method="POST">
							<div class="form-group">
								<label for="name">Nama Produk : </label>
								<input type="text" value="<?= $produk->nama_produk?>" class="form-control" name="nama_produk" id="nama_produk">
							</div>

							<div class="form-group">
								<label for="nim">Harga Produk : </label>
								<input type="number" value="<?= $produk->harga_produk?>" class="form-control" name="harga_produk" id="harga_produk">
							</div>

							<div class="form-group">
								<label for="name">kategori : </label>
								<select class="form-control" id="id_kategori" name="id_kategori">
									<?php foreach ($kategori as $kat){ ?>
									<option value="<?= $kat->id_kategori?>" <?php if ($kat->id_kategori==$produk->id_kategori) { echo "selected"; } ?>>
										<?= $kat->nama_kategori?>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="name">Kasir : </label>
								<select class="form-control" id="id_kasir" name="id_kasir">
									<?php foreach ($kasir as $kas){ ?>
									<option value="<?= $kas->id_kasir?>" <?php if ($kas->id_kasir==$produk->id_kasir) { echo "selected"; } ?>>
										<?= $kas->nama_kasir?>
									<?php } ?>
								</select>
							</div>


							<button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
</div>	