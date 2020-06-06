
<div class="container">
<?php if ($this->session->flashdata('flash')): ?>
<div class="row-mt-3">
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data produk <strong>Berhasil</strong><?php echo $this->session->flashdata('flash'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="row">
	<div class="col-md-6">
		<a href="<?= base_url('produk/tambah');?>" class="btn btn-primary">Tambah Data</a>
	</div>
</div>

<table class="table">
	<thead>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Kategori</th>
		<th>Kasir</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php $no=1; foreach ($produk as $pro): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $pro->nama_produk?></td>
				<td><?= $pro->harga_produk?></td>
				<td><?= $pro->nama_kategori?></td>
				<td><?= $pro->nama_kasir?></td>
				<td>
					
					<a href="<?= base_url('produk/edit/'.$pro->id_produk)?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
					<a href="<?= base_url('produk/hapus/'.$pro->id_produk)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

