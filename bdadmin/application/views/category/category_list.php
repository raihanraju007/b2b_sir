<section class="content-header">
	<h1>
		Category
		<small>List</small>
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12 col-xs-12">

			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php elseif ($this->session->flashdata('error')) : ?>
				<div class="alert alert-error alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php endif; ?>

			<div class="pull-right">
				<button class="btn btn-primary" id="wordadd" data-toggle="modal" data-target="#addEditWord">Add Category</button>
			</div>
			<br /> <br />

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="usergrouptable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Category Name</th>
								<th>Link Prefix</th>
								<th>Sub Category</th>
								<th>Status</th>
								<th>Order</th>
								<th>Img</th>
								<th>Action</th>
							</tr>
						</thead>

						<?php foreach ($categorylist as $key => $v) { ?>
							<tr>
								<td><?= $key + 1; ?></td>
								<td><?= $v['category_name']; ?></td>
								<td><?= $v['link_prefix']; ?></td>
								<td>
									<a href="<?php echo site_url('sub_category/index/' . $v['id']) ?>" style="border-radius: 10px;" class="btn btn-success"> List </a>
								</td>
								<td><?= $v['status']; ?></td>
								<td><?= $v['category_order']; ?></td>
								<td>
									<img width="100" src="https://b2bitem.com/upload/category/<?= $v['cat_img']; ?>">
								</td>

								<td>
									<button type="button" class="btn btn-danger" onclick="editWord(<?= $v['id']; ?>)" data-toggle="modal" data-target="#addEditWord"><i class="fa fa-pencil"></i></button>
								</td>
							</tr>
						<?php } ?>

					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- col-md-12 -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->

<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addEditWord">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="formtitle">Add Category</h4>
			</div>

			<form role="form" action="<?php echo site_url('category/AddEditFromCategory') ?>" method="post" id="createFlatForm" enctype="multipart/form-data">
				<div class="modal-body">
					<input required type="hidden" name="id" id="id" value="0">

					<div class="form-group">
						<label for="name">Category Name</label>
						<input required type="text" class="form-control" id="category_name" name="category_name" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="name">Category Icon</label>
						<input required type="text" class="form-control" id="icon" name="icon" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="name">Link Prefix</label>
						<input required type="text" class="form-control" id="link_prefix" name="link_prefix" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="name">Short Description</label>
						<textarea class="form-control" id="short_description" name="short_description"></textarea>
					</div>

					<div class="form-group">
						<label for="name">Description</label>
						<textarea class="form-control" rows="15" id="description" name="description"></textarea>
					</div>

					<div class="form-group">
						<label for="name">Order</label>
						<input required type="number" class="form-control" id="category_order" name="category_order" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="flatOwnerIfdfD">Status</label><br>
						<select required class="form-control" id="status" name="status">
							<option value="">----Select----</option>
							<option value="Active">Active</option>
							<option value="Inactive">Inactive</option>
						</select>
					</div>

					<div class="form-group">
						<label for="flatOwnerIfdfD">Category Picture</label><br>
						<input type="file" name="catIimg" class="form-control">
					</div>

					<label style="font-size: 16px;">Is Feature Category
						<input id="is_feature_cat" style="margin-left: 10px;" type="checkbox" name="is_feature_cat" value="1" class="form-check-input business-type-length"></label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="submit">Save</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$(document).ready(function() {
		manageTable = $('#usergrouptable').DataTable({
			'pageLength': 50,
			'lengthMenu': [50, 100, 150, 200],
			'order': []
		});

		$("#category").addClass('active');
	});

	$("#wordadd").click(function() {
		$("#submit").text('Submit');
		$("#formtitle").text('Add Category');

		$("#id").val('0');

		$("#category_order").val('');
		$("#icon").val('');
		$("#link_prefix").val('');
		$("#category_name").val('');
		$("#short_description").text('');
		$("#description").text('');
		$('#status option').removeAttr("selected");
		$('#is_feature_cat').prop('checked', false);
	});

	function editWord(id) {
		$("#submit").text('Update');
		$("#formtitle").text('Edit Category');

		$.ajax({
			type: "POST",
			url: "<?php echo $site_url; ?>category/get_category_info",
			data: "id=" + id,
			dataType: 'json',
			success: function(res) {
				$("#id").val(res.id);
				$("#category_order").val(res.category_order);
				$("#icon").val(res.icon);
				$("#link_prefix").val(res.link_prefix);
				$("#category_name").val(res.category_name);
				$("#short_description").text(res.short_description);
				$("#description").text(res.description);
				$("#status option[value='" + res.status + "']").prop('selected', 'selected');
				$('#is_feature_cat').prop('checked', res.is_feature_cat == 1);
			}
		});
	}

	$('#createFlatForm').on('submit', function() {
		if ($('#is_feature_cat').is(':checked')) {
			$('#is_feature_cat').val(1);
		} else {
			$('#is_feature_cat').val(0);
			$('#is_feature_cat').prop('checked', true);
		}
	});
</script>
