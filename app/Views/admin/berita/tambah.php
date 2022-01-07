<form action="<?= base_url('admin/berita/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">Title </label>
	<div class="col-md-10">
		<input type="text" name="judul_berita" class="form-control" value="<?= set_value('judul_berita') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Image</label>
	<div class="col-md-10">
		<input type="file" name="gambar" class="form-control" value="<?= set_value('gambar') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Category, Type &amp; Status</label>
	<div class="col-md-2">
		<select name="id_kategori" class="form-control">
			<?php foreach ($kategori as $kategori) { ?>
			<option value="<?= $kategori['id_kategori'] ?>">
				<?= $kategori['nama_kategori'] ?>
			</option>
			<?php } ?>
		</select>
		<small class="text-secondary">Category</small>
	</div>
	<div class="col-md-2">
		<select name="jenis_berita" class="form-control">
			<option value="Berita">Berita</option>
			<option value="Layanan">Layanan</option>
			<option value="Profil">Profil</option>
		</select>
		<small class="text-secondary">Type</small>
	</div>
	<div class="col-md-2">
		<select name="status_berita" class="form-control">
			<option value="Publish">Publish</option>
			<option value="Draft">Draft</option>
		</select>
		<small class="text-secondary">Publication Status</small>
	</div>
	<div class="col-md-2">
		<input type="text" name="icon" class="form-control" value="<?= set_value('icon') ?>">
		<small class="text-secondary">Icon <a href="https://fontawesome.com/icons" target="_blank">Fontawsome</a></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Publication Date & Time</label>
	<div class="col-md-4">
		<input type="text" name="tanggal_publish" class="form-control tanggal" value="<?php if (isset($_POST['tanggal_publis'])) {
    echo set_value('tanggal_publish');
} else {
    echo date('d-m-Y');
} ?>">
		<small class="text-secondary">Format <strong>dd-mm-yyyy</strong>. <br> Example: <?= date('d-m-Y') ?></small>
	</div>
	<div class="col-md-2">
		<input type="text" name="jam" class="form-control jam" value="<?php if (isset($_POST['jam'])) {
    echo set_value('jam');
} else {
    echo date('H:i:s');
} ?>">
		<small class="text-secondary">Format <strong>HH:MM:SS</strong>. <br> FExample: <?= date('H:i:s') ?></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Summary</label>
	<div class="col-md-10">
		<textarea name="ringkasan" class="form-control"><?= set_value('ringkasan') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Contents</label>
	<div class="col-md-10">
		<textarea name="isi" class="form-control konten"><?= set_value('isi') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
	</div>
</div>

<?= form_close(); ?>