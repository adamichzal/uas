<p>
	<a href="<?= base_url('admin/berita/tambah') ?>" class="btn btn-success" style="background-color:#c4c0c1; border:none">
		<i class="fa fa-plus"></i> Add New Content
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th style="text-align:center; width="5%">No</th>
			<th style="text-align:center; width="8%">Image</th>
			<th style="text-align:center; width="40%">Title</th>
			<th style="text-align:center; width="15%">Category </th>
			<th style="text-align:center; width="15%">Author</th>
			<th style="text-align:center; width="15%">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($berita as $berita) { ?>
		<tr>
			<td><?= $no ?></td>
			<td>
				<?php if ($berita['gambar'] === '') {
    echo '-';
} else { ?>
					<img src="<?= base_url('assets/upload/image/thumbs/' . $berita['gambar']) ?>" class="img img-thumbnail">
				<?php } ?>
			</td>
			<td><a href="<?= base_url('admin/berita/edit/' . $berita['id_berita']) ?>">
					<?= $berita['judul_berita'] ?>
				</a>
				<small>
					<br><i class="fa fa-eye"></i> Hits: <?= $berita['hits'] ?>
					<br><i class="fa fa-home"></i> Icon: <i class="<?= $berita['icon'] ?>"></i> <?= $berita['icon'] ?>
					<br><i class="fa fa-calendar-check"></i> Publish: <?= tanggal_bulan_menit($berita['tanggal_publish']) ?>
					<br><i class="fa fa-calendar"></i> Updated: <?= tanggal_bulan_menit($berita['tanggal']) ?>
				</small>
			</td>
			<td><small>
				<i class="fa fa-tags"></i> <a href="<?= base_url('admin/berita/kategori/' . $berita['id_kategori']) ?>">
					<?= $berita['nama_kategori'] ?>
				</a>
				<br><i class="fa fa-home"></i> <a href="<?= base_url('admin/berita/jenis_berita/' . $berita['jenis_berita']) ?>">
					<?= $berita['jenis_berita'] ?>
				</a>
			</small>
			</td>

			<td><small>
					<i class="fa fa-user"></i> <a href="<?= base_url('admin/berita/author/' . $berita['id_user']) ?>">
						<?= $berita['nama'] ?>
					</a>
					<br>
					<i class="fa fa-check"></i> <a href="<?= base_url('admin/berita/status_berita/' . $berita['status_berita']) ?>">
					<?= $berita['status_berita'] ?>
				</a>
				</small>
			</td>
			<td>
				<a href="<?= base_url('berita/read/' . $berita['slug_berita']) ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i> </a>
				<a href="<?= base_url('admin/berita/edit/' . $berita['id_berita']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/berita/delete/' . $berita['id_berita']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>