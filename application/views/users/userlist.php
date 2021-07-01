<section class="content container-fluid">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Daftar Data Pengguna</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
				title="Collapse">
				<i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div style="margin-bottom: 20px;">
				<a href="<?php echo base_url('users/add'); ?>"><button type="button" class="btn btn-box btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Users</button></a>
				<!-- <a href="<?php echo base_url('users/siswaadd/'); ?>"><button type="button" class="btn btn-box btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Input Data Siswa</button></a> -->
				<!--  <a href="<?php echo base_url('users/useraddmulti'); ?>"><button type="button" class="btn btn-box btn-primary"><i class="fa fa-users"></i>&nbsp;&nbsp;Tambah Multiple</button></a> -->
			</div>
			<?php if(validation_errors()): ?>
			<div class="alert alert-danger" role="alert"><?php echo validation_errors('<p>', '</p>'); ?></div>
			<?php endif; ?>
			<?php if($message = $this->session->flashdata('message')): ?>
			<div class="alert alert-success" role="alert"><?php echo $message['message']; ?></div>
			<?php endif; ?>
			<div class="table-responsive">
				<table id="example1" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Level</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th>Alamat</th>
							<th>No Telp</th>
							<th>Active</th>
							<th>Last Login</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; foreach ($users as $row): ?>
						<tr>
							<td><?php echo ++$no; ?></td>
							<td><?php echo $row->username; ?></td>
							<td><?php echo $row->level; ?></td>
							<td><?php echo $row->nama_lengkap; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td><?php echo $row->no_telp; ?></td>
							<td><?php echo $row->active; ?></td>
							<td><?php echo $row->last_login; ?></td>
							<td>
								<a href="<?php echo base_url('users/edit/'. $row->id); ?>"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
								<!-- <a href="<?php echo base_url('users/useredit/'. $row->id); ?>"><button class="btn btn-success"><i class="fa fa-key"></i></button></a>  -->
								<a href="<?php echo base_url('users/delete/'. $row->id); ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
								<!-- <button class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row->id; ?>"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-success" data-toggle="modal" data-target="#changespassword<?php echo $row->id; ?>"><i class="fa fa-key"></i></button>
								<button class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $row->id; ?>"><i class="fa fa-trash"></i></button> -->

								<!-- <div class="btn-group">
									<button type="button" class="btn btn-info">Konfigurasi</button>
									<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a data-toggle="modal" data-target="#import<?php echo $row->id; ?>">Import Database</a></li>
									</ul>
								</div> -->
								<!--  <a href="<?php echo base_url('users/config/'. $row->id); ?>"><button class="btn btn-success"><i class="fa fa-cogs">&nbsp;Edit Config</i></button></a> -->
								<!--  <a href="#"><button class="btn btn-success"><i class="fa fa-cogs">&nbsp;Edit Config</i></button></a> -->
								<!--  <a href="<?php echo base_url('users/dropdb/'. $row->id); ?>"><button class="btn btn-danger"><i class="fa fa-database">&nbsp;Drop DB</i></button></a> -->
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
