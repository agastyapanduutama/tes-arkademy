
<div class="container">
<?php if ($this->session->flashdata('flash')): ?>
<div class="row-mt-3">
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data kategori <strong>Berhasil</strong><?php echo $this->session->flashdata('flash'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="row">
	<div class="col-md-6">
		<a href="<?= base_url('kategori/tambah');?>" class="btn btn-primary">Tambah Data</a>
	</div>
</div>

<table class="table">
	<thead>
		<th>No</th>
		<th>Nama kategori</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php $no=1; foreach ($kategori as $kas): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $kas->nama_kategori?></td>
				<td>
					
					<a href="<?= base_url('kategori/edit/'.$kas->id_kategori)?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
					<a href="<?= base_url('kategori/hapus/'.$kas->id_kategori)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

