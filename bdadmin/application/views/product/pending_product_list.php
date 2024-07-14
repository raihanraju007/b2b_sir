<section class="content-header">
	<h1>
		Product
		<small>List</small>
	</h1>
</section>
<style type="text/css">
	#smitable tr th,
	td {
		padding: 5px 7px;
	}
</style>

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

			<!-- <div class="pull-right">
            <button class="btn btn-primary" id="wordadd" data-toggle="modal" data-target="#addEditWord">Add Category</button>
          </div>
          <br /> <br /> -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="usergrouptable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Category</th>
								<th>Company</th>
								<!-- <th>Status</th> -->
								<th>Price</th>
								<th>Model</th>
								<th>C.Date</th>
								<th>Img</th>
								<th>Action</th>
							</tr>
						</thead>


						<?php foreach ($list as $key => $v) { ?>
							<tr>
								<td><?= $key + 1; ?></td>
								<td>
									<?= $v['product_name']; ?>

									<button data-toggle="modal" data-target="#addEditWord" type="button" onclick="similar_product('<?= $v['product_name']; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i></button>

								</td>
								<td><?= $v['category_name']; ?></td>
								<td><?= $v['company_name']; ?></td>
								<!-- <td><?= $v['status']; ?></td> -->
								<td><?= $v['price']; ?></td>
								<td><?= $v['model_no']; ?></td>
								<td><?= date('Y-m-d', strtotime($v['created_at'])); ?></td>
								<td>
									<img width="100" src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>">
								</td>
								<td>
									<a href="<?php echo site_url(('details/') . $v['id']) ?>" style="border-radius: 10px;" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
									&nbsp;&nbsp;
									<a href="<?php echo site_url('product/edit/' . $v['id']) ?>" style="border-radius: 10px;" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a>
									&nbsp;&nbsp;
									<a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo site_url('product/delete_pending_product/' . $v['id']) ?>" style="border-radius: 10px;" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>

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
				<h4 class="modal-title" id="formtitle">Compnay List</h4>
			</div>


			<div class="modal-body">
				<table border="1" id="smitable" style="width: 100%; border-collapse: collapse;">
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Status</th>
					</tr>
					<tbody id="simi_com"></tbody>
				</table>


			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>




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

		$("#product").addClass('active');
		$("#pplist").addClass('active');

	});

	$("#wordadd").click(function() {
		$("#submit").text('Submit');
		$("#formtitle").text('Add Category');

		$("#id").val('0');

		$("#category_order").val('');
		$("#link_prefix").val('');
		$("#category_name").val('');
		$("#description").text('');
		$('#status option').removeAttr("selected");
	});

	function similar_product(name) {

		// alert(name);

		var dataString = 'name=' + name;

		$.ajax({
			type: "POST",
			url: '<?= site_url('product/get_similar_product/'); ?>',
			data: dataString,
			success: function(response) {

				var obj = jQuery.parseJSON(response);

				$("#simi_com").empty();

				$.each(obj, function(index, value) {
					var sl = parseFloat(index + 1);
					var comname = value.product_name;
					var pstatus = value.pstatus;
					var tr = '<tr><td>' + sl + '</td><td>' + comname + '</td><td>' + pstatus + '</td></tr>';

					$('#simi_com').append(tr);
				});

			}
		});

	}
</script>