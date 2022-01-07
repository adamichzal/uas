<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="background-color:#c4c0c1; border:none" >
		<i class="fa fa-plus" ></i> Add New Content
	</button>
</p>
<?= form_open(base_url('admin/video'));
echo csrf_field();
?>
<div class="modal fade" id="modal-default">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Video</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="form-group row">
					<label class="col-3">Video Name</label>
					<div class="col-9">
						<input type="text" name="judul" class="form-control" placeholder="Nama video" value="<?= set_value('judul') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Link Video Youtube</label>
					<div class="col-9">
						<input type="text" name="video" class="form-control" placeholder="Link video" value="<?= set_value('video') ?>" required>
						<small class="text-secondary">Example: <span class="text-warning">https://www.youtube.com/watch?v=</span><strong class="text-danger">jVr6CYLhjQo</strong>. Take the color code <strong class="text-danger">Merah</strong></small>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Description</label>
					<div class="col-9">
						<textarea name="keterangan" class="form-control"><?= set_value('keterangan') ?></textarea>
					</div>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?= form_close(); ?>