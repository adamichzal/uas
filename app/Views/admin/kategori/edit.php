<?= form_open(base_url('admin/kategori/edit/' . $kategori['id_kategori']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Category Name</label>
	<div class="col-9">
		<input type="text" name="nama_kategori" class="form-control" placeholder="Category Name" value="<?= $kategori['nama_kategori'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Sequence</label>
	<div class="col-9">
		<input type="number" name="urutan" class="form-control" placeholder="Sequence" value="<?= $kategori['urutan'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
	</div>
</div>

<?= form_close(); ?>