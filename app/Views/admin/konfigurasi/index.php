<?= form_open(base_url('admin/konfigurasi'));
echo csrf_field();
?>

<h4>Basic Information</h4>
<hr>
<div class="form-group row">
	<label class="col-3">Web Name</label>
	<div class="col-9">
		<input type="text" name="namaweb" class="form-control" value="<?= $konfigurasi['namaweb'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Web Nickname</label>
	<div class="col-9">
		<input type="text" name="singkatan" class="form-control" value="<?= $konfigurasi['singkatan'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Web Tagline</label>
	<div class="col-9">
		<input type="text" name="tagline" class="form-control" value="<?= $konfigurasi['tagline'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Web Address</label>
	<div class="col-9">
		<input type="text" name="website" class="form-control" value="<?= $konfigurasi['website'] ?>">
	</div>
</div>

<h4>Web Profile Information</h4>
<hr>
<div class="form-group row">
	<label class="col-3">About Website</label>
	<div class="col-9">
		<textarea name="tentang" class="form-control konten" rows="5"><?= $konfigurasi['tentang'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Short Description</label>
	<div class="col-9">
		<textarea name="deskripsi" class="form-control"><?= $konfigurasi['deskripsi'] ?></textarea>
	</div>
</div>

<h4>Contact and Address</h4>
<hr>

<div class="form-group row">
	<label class="col-3">Official Email</label>
	<div class="col-9">
		<input type="text" name="email" class="form-control" value="<?= $konfigurasi['email'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Secondary Email</label>
	<div class="col-9">
		<input type="text" name="email_cadangan" class="form-control" value="<?= $konfigurasi['email_cadangan'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Telephone</label>
	<div class="col-9">
		<input type="text" name="telepon" class="form-control" value="<?= $konfigurasi['telepon'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Mobile</label>
	<div class="col-9">
		<input type="text" name="hp" class="form-control" value="<?= $konfigurasi['hp'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Address</label>
	<div class="col-9">
		<textarea name="alamat" class="form-control summernote"><?= $konfigurasi['alamat'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Google Map</label>
	<div class="col-9">
		<textarea name="google_map" class="form-control"><?= $konfigurasi['google_map'] ?></textarea>
	</div>
</div>

<h4>Social Media</h4>
<hr>

<div class="form-group row">
	<label class="col-3">Facebook <i class="fab fa-facebook"></i></label>
	<div class="col-3">
		<input type="text" name="nama_facebook" class="form-control" value="<?= $konfigurasi['nama_facebook'] ?>">
		<small class="text-secondary">Account</small>
	</div>
	<div class="col-6">
		<input type="text" name="facebook" class="form-control" value="<?= $konfigurasi['facebook'] ?>">
		<small class="text-secondary">Link Account</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Twitter <i class="fab fa-twitter"></i></label>
	<div class="col-3">
		<input type="text" name="nama_twitter" class="form-control" value="<?= $konfigurasi['nama_twitter'] ?>">
		<small class="text-secondary">Account</small>
	</div>
	<div class="col-6">
		<input type="text" name="twitter" class="form-control" value="<?= $konfigurasi['twitter'] ?>">
		<small class="text-secondary">Link Account</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Instagram <i class="fab fa-instagram"></i></label>
	<div class="col-3">
		<input type="text" name="nama_instagram" class="form-control" value="<?= $konfigurasi['nama_instagram'] ?>">
		<small class="text-secondary">Account</small>
	</div>
	<div class="col-6">
		<input type="text" name="instagram" class="form-control" value="<?= $konfigurasi['instagram'] ?>">
		<small class="text-secondary">Link Account</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Youtube <i class="fab fa-youtube"></i></label>
	<div class="col-3">
		<input type="text" name="nama_youtube" class="form-control" value="<?= $konfigurasi['nama_youtube'] ?>">
		<small class="text-secondary">Account</small>
	</div>
	<div class="col-6">
		<input type="text" name="youtube" class="form-control" value="<?= $konfigurasi['youtube'] ?>">
		<small class="text-secondary">Link Account</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
	</div>
</div>

<?= form_close(); ?>