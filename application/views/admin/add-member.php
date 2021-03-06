<?php include 'admin-templates/header.php' ?>
<?php include 'admin-templates/sidebar.php' ?>

<!-- Content Wrapper. Contains Page Content -->
<div class="content-wrapper">
	<!-- Stupid Content Header -->
	<div class="content-header">
		<h1>Add Member</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
			<li><a href="#">Add</a></li>
			<li>Member</li>
		</ol>
	</div>

	<!-- Main Content -->
	<section class="content">
		<div class="box box-info">
			<div class="box-body">
				<?= form_open(base_url() . 'member/addmembers') ?>
				<h5>Personal Information</h5>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group <?= (form_error('firstname')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="firstname">First Name:</label>
							<input type="text" class="form-control" name="firstname" placeholder="Enter first name" required autofocus="true" value="<?=set_value('firstname')?>">
							<span class="glyphicon form-control-feedback <?= (form_error('firstname')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
							<?= form_error('firstname', '<span class="help-block">', '</span>')?>
						</div>
						<div class="form-group <?= (form_error('lastname')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="lastname">Last Name:</label>
							<input type="text" class="form-control" name="lastname" placeholder="Enter last name" required value="<?= set_value('lastname')?>">
							<span class="glyphicon form-control-feedback <?= (form_error('lastname')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
							<?= form_error('lastname', '<span class="help-block">', '</span>')?>
						</div>
						<div class="form-group <?= (form_error('contact')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="contact">Contact Number:</label>
							<input type="text" class="form-control" name="contact" placeholder="Enter contact number" value="<?= set_value('contact') ?>">
							<?= form_error('contact', '<span class="help-block">', '</span>') ?>
							<span class="glyphicon form-control-feedback <?= (form_error('contact')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group <?= (form_error('curr-addr')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="curr-addr">Current Address:</label>
							<input type="text" class="form-control" name="curr-addr" placeholder="Enter current address" value="<?= set_value('curr-addr')?>">
							<span class="glyphicon form-control-feedback <?= (form_error('curr-addr')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
							<?= form_error('curr-addr', '<span class="help-block">', '</span>')?>
						</div>
						<div class="form-group <?= (form_error('p-addr')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="p-addr">Permanent Address:</label>
							<input type="text" class="form-control" name="p-addr" placeholder="Enter permanent address" value="<?= set_value('p-addr') ?>">
							<span class="glyphicon form-control-feedback <?= (form_error('p-addr')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
							<?= form_error('p-addr', '<span class="help-block">', '</span>') ?>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label><input type="checkbox" name="atty" value="yes"> PLEASE CHECK IF HE IS AN ATTORNEY</label>
							</div>
						</div>
					</div>
				</div>
				<h5>Work Information</h5>
				<hr>
				<div class="row" id="work-stuff">
					<div class="col-lg-4 col-sm-12">
						<div class="form-group">
							<label for="work-place">Work Place</label>
							<input type="text" class="form-control" name="work-place[]" placeholder="Enter work place">
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<div class="form-group">
							<label for="wp">Work Position:</label>
							<input type="text" class="form-control" name="work-position[]" placeholder="Enter work position">
						</div>
					</div>
					<div class="col-lg-3 col-sm-12">
						<div class="form-group">
							<label for="years">Number of Years</label>
							<input type="text" class="form-control" name="years-working[]" placeholder="Enter number of years working">
						</div>
					</div>
					<div class="col-lg-1 col-sm-12">
						<div class="form-group ">
							<i class="fa fa-plus" id="add-button" style="font-size: 50px; cursor: pointer" ></i>
						</div>
					</div>
				</div>
				<h5>Other Information</h5>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group <?= (form_error('slave-name')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="slave-name">Baptismal Name:</label>
							<input type="text" class="form-control" name="slave-name" placeholder="Enter slavename" value="<?= set_value('slave-name') ?>" required>
							<span class="glyphicon form-control-feedback <?= (form_error('username')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
							<?= form_error('slave-name', '<span class="help-block">', '</span>')?>
						</div>
						<div class="form-group <?= (form_error('username')) ? 'has-error' : 'has-success' ?> has-feedback">
							<label for="username">Username:</label>
							<input type="text" class="form-control" name="username" placeholder="Enter username" value="<?= set_value('username') ?>" required>
							<span class="glyphicon form-control-feedback <?= (form_error('username')) ? 'glyphicon-remove' : 'glyphicon-ok' ?>"></span>
							<?= form_error('username', '<span class="help-block">', '</span>')?>
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" class="form-control" name="password" placeholder="Enter password">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="batch">Select batch:</label>
							<select class="form-control" name="batch" id="batch" required>
								<option value="">Select a batch</option>
							</select>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label><input type="checkbox" name="batchpres" value="yes"> PLEASE CHECK IF HE IS THE BATCH PRESIDENT</label>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-info btn-md"><i class="fa fa-check"></i> Submit</button>
				<?= form_close(); ?>
			</div>
		</div>
	</section>
</div>
<?php include 'admin-templates/footer.php' ?>
</div>

<script src="<?php echo base_url() ?>adminlte/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>adminlte/dist/plugins/select2/select2.full.js"></script>
<script src="<?php echo base_url() ?>adminlte/dist/js/app.js"></script>
<script src="<?php echo base_url() ?>js/fetchChapters.js"></script>
<script src="<?php echo base_url()?>js/addFields.js"></script>
<script>
	$(document).ready(function() {
		$('#batch').select2();
		$('.sidebar li:nth-child(7)').addClass('active');
		$('.sidebar li:nth-child(7) .treeview-menu li:nth-child(1)').addClass('active');
	});
</script>
</body>
</html>