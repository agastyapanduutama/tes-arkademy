
<div class="container">
<?php if ($this->session->flashdata('flash')): ?>
<div class="row-mt-3">
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data kasir <strong>Berhasil</strong><?php echo $this->session->flashdata('flash'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="row">
	<div class="col-md-6">
		<a href="<?= base_url('kasir/tambah');?>" class="btn btn-primary">Tambah Data</a>
	</div>
</div>

<table class="table">
	<thead>
		<th>No</th>
		<th>Nama Kasir</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php $no=1; foreach ($kasir as $kas): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $kas->nama_kasir?></td>
				<td>
					
					<a href="<?= base_url('kasir/edit/'.$kas->id_kasir)?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
					<a href="<?= base_url('kasir/hapus/'.$kas->id_kasir)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

