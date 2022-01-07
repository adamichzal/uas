<?php include 'tambah.php'; ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th style="text-align:center; width="5%">No</th>
			<th style="text-align:center; width="25%">Name</th>
			<th style="text-align:center; width="25%">Value</th>
			<th style="text-align:center; width="25%">Sequence</th>
			<th style="text-align:center; width="25%">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($kategori as $kategori) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $kategori['nama_kategori'] ?></td>
			<td><?= $kategori['slug_kategori'] ?></td>
			<td><?= $kategori['urutan'] ?></td>
			<td>
				<a href="<?= base_url('admin/kategori/edit/' . $kategori['id_kategori']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/kategori/delete/' . $kategori['id_kategori']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>