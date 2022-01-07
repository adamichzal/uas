<form action="<?= base_url('admin/galeri/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">Name</label>
	<div class="col-md-10">
		<input type="text" name="judul_galeri" class="form-control" value="<?= set_value('judul_galeri') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Image</label>
	<div class="col-md-10">
		<input type="file" name="gambar" class="form-control" value="<?= set_value('gambar') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Category, Types &amp; Status</label>
	<div class="col-md-3">
		<select name="id_kategori_galeri" class="form-control">
			<?php foreach ($kategori_galeri as $kategori_galeri) { ?>
			<option value="<?= $kategori_galeri['id_kategori_galeri'] ?>">
				<?= $kategori_galeri['nama_kategori_galeri'] ?>
			</option>
			<?php } ?>
		</select>
		<small class="text-secondary">Category</small>
	</div>
	<div class="col-md-3">
		<select name="jenis_galeri" class="form-control">
			<option value="Galeri">Galeri</option>
			<option value="Homepage">Homepage Slider</option>
		</select>
		<small class="text-secondary">Type</small>
	</div>
	<div class="col-md-3">
		<select name="status_text" class="form-control">
			<option value="Ya">Aktif</option>
			<option value="Tidak">Tidak Aktif</option>
		</select>
		<small class="text-secondary">Status</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Isi Galeri</label>
	<div class="col-md-10">
		<textarea name="isi" class="form-control konten"><?= set_value('isi') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Link/URL for Banner</label>
	<div class="col-md-10">
		<input type="text" name="website" class="form-control" value="<?= set_value('website') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?= form_close(); ?>