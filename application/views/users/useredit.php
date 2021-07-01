<section class="content-header">
	<h1>
	User Profile
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">User profile</li>
	</ol>
</section>
<section class="content">
	<div class="row" style="margin-top: 40px;">
		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url(); ?>assets/adminlte/dist/img/avatar04.png" alt="User profile picture" style="width: 100%; height: 200px;">
					<h3 class="profile-username text-center"><?php echo $user->username; ?></h3>
					
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="nav-tabs-custom" style="height: cover; margin-bottom: 30px;">
				<!-- <ul class="nav nav-tabs">
						<li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
						<li><a href="#timeline" data-toggle="tab">Timeline</a></li>
						<li class="active"><a href="#settings" data-toggle="tab">Profile</a></li>
						<li><a href="#timeline" data-toggle="tab">Timeline</a></li>
				</ul> -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Profile</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Change Password</a></li>
					<!--    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
					<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<form action="" method="POST">
							<?php if(validation_errors()): ?>
								<div class="alert alert-danger" role="alert"><?php echo validation_errors('<p>', '</p>'); ?></div>
					          
					          <?php endif; ?>
					          <?php if($message = $this->session->flashdata('message')): ?>
					          	<div class="alert alert-success" role="alert"><?php echo $message['message']; ?></div>
					          <?php endif; ?>
							<div class="" style="margin-bottom: 5px;">
								<label for="username">Username</label>
								<input id="username" type="text" readonly name="username" value="<?php echo $user->username; ?>" class="form-control" placeholder="Username">
							</div>
							<div class="" style="margin-bottom: 5px;">
								<label for="namalengkap">Nama Lengkap</label>
								<input id="namalengkap" type="text" name="namalengkap" value="<?php echo $user->nama_lengkap; ?>" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="" style="margin-bottom: 5px;">
								<label for="email">Email Address</label>
								<input id="email" type="email" name="email" value="<?php echo $user->email; ?>" class="form-control" placeholder="Email Address">
							</div>
							<div class="" style="margin-bottom: 5px;">
								<label for="alamat">Alamat</label>
			                	<textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $user->alamat; ?></textarea>
							</div>
							<div class="" style="margin-bottom: 5px;">
								<label for="nohp" class="control-label">No HP</label>
				                <input type="number" class="form-control" value="<?php echo $user->notelp; ?>" id="notelp" name="notelp" placeholder="">
							</div>
							<div class="" style="margin-bottom: 5px;">
								<label for="active">Pilih Status</label>
								<select name="active" id="active" class="form-control">
									<option value="1" <?php if($user->active == '1') echo "selected"; ?> >Aktif</option>
									<option value="0" <?php if($user->active == '0') echo "selected"; ?> >Non Aktif</option>
								</select>
							</div>
							<!-- <div class="" style="margin-bottom: 5px;">
								<label for="file" class="control-label">Logo</label>
				                <input type="file" class="form-control" id="file" name="file" placeholder="">
							</div> -->
							<div class="" style="margin-bottom: 5px; text-align: center;">
								<input type="submit" style="margin-top: 20px; margin-bottom: 20px;" name="update-profile" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<form action="" method="POST">
							<?php echo form_hidden('idusers', $user->id); ?>
						<div class="" style="margin-bottom: 5px;">
							<label for="password">New Password</label>
							<input id="newpassword" type="text" name="newpassword" class="form-control" placeholder="Password">
						</div>
						<div class="" style="margin-bottom: 5px; text-align: center;">
							<input type="submit" style="margin-top: 20px; margin-bottom: 20px;" name="update-password" class="btn btn-primary" value="Simpan">
						</div>
						</form>
					</div>
					<!--  <div role="tabpanel" class="tab-pane" id="messages">c</div>
					<div role="tabpanel" class="tab-pane" id="settings">d</div> -->
				</div>
				<!-- <div class="tab-pane" id="timeline">
						tes
				</div>
				<div class="tab-pane" id="settings">
						qw
						<form action="" method="POST" style="margin-bottom: 30px;">
								<div class="col-md-6 form-group">
										<label for="username">Username</label>
										<input id="username" type="text" name="username" class="form-control" placeholder="Username">
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
								<div class="col-md-6 form-group">
										<label for="active">Pilih Status</label>
										<select name="active" id="active" class="form-control">
												<option disabled selected>Pilih Status</option>
												<option value="1">Aktif</option>
												<option value="0">Non Aktif</option>
										</select>
								</div>
						</form>
				</div> -->
			</div>
		</div>
	</div>
</section>
<script>
	$('#myTabs a').click(function (e) {
e.preventDefault()
$(this).tab('show')
})
</script>