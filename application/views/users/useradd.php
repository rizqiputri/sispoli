<section class="content container-fluid">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Users</h3>
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
							<label for="username">Username</label>
							<input id="username" type="text" name="username" class="form-control" placeholder="Username">
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
								<option value="perawat">Perawat</option>
								<option value="user">User</option>
								<!-- <option value="pimpinan">Pimpinan</option> -->
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
						<div class="col-md-6 form-group">
							<label for="namalengkap">Nama Lengkap</label>
							<input id="namalengkap" type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap">
						</div>
						<div class="col-md-6 form-group">
							<label for="email">Email Address</label>
							<input id="email" type="email" name="email" class="form-control" placeholder="Email Address">
						</div>
						<div class="col-md-6 form-group">
							<label for="alamat">Alamat</label>
							<input id="alamat" type="text" name="alamat" class="form-control" placeholder="Address">
						</div>
						<div class="col-md-6 form-group">
							<label for="notelp">No Telp</label>
							<input id="notelp" type="number" name="notelp" class="form-control" placeholder="Phone Number">
						</div>
						<div align="center">
							<input type="submit" style="margin-top: 20px; margin-bottom: 20px;" name="submit" class="btn btn-primary" value="Simpan">
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
