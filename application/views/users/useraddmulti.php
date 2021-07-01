<section class="content container-fluid">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Data Users</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
					title="Collapse">
					<i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert"><?php echo validation_errors('<p>', '</p>'); ?></div>
					<?php endif; ?>
					<?php if($message = $this->session->flashdata('message')): ?>
						<div class="alert alert-success" role="alert"><?php echo $message['message']; ?></div>
			        <?php endif; ?>
				<div class="row">
					<form action="" method="post">
						<div class="col-md-6 form-group">
							<label for="userprefix">Username Prefix</label>
							<input id="userprefix" type="text" name="userprefix" class="form-control" placeholder="User Prefix">
						</div>
						<div class="col-md-6 form-group">
							<label for="usernumber">Jumlah</label>
							<input id="usernumber" type="text" name="usernumber" class="form-control" placeholder="Jumlah User">
						</div>
						<div class="col-md-6 form-group">
							<label for="passwordtype">Password Type</label>
							<select name="passwordtype" id="passwordtype" class="form-control">
								<option disabled selected>Pilih Type Password</option>
								<option value="random">Random</option>
								<option value="fixed">Fixed</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="password">Password</label>
							<input id="password" type="text" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="col-md-6 form-group">
							<label for="level">Level</label>
							<select name="level" id="level" class="form-control">
								<option disabled selected>Pilih Level</option>
								<option value="administrator">Administrator</option>
								<option value="client">Client</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="active">Pilih Status</label>
							<select name="active" id="active" class="form-control">
								<option disabled selected>Pilih Status</option>
								<option value="1">Aktif</option>
								<option value="0">Non Aktif</option>
							</select>
						</div>
						<div align="center">
							<input type="submit" style="margin-top: 20px; margin-bottom: 20px;" name="submit" class="btn btn-primary" value="Simpan">
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
