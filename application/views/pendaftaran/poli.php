<section class="content container-fluid">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">PENDAFTARAN  POLI TUJUAN</h3>
				<div class="box-tools pull-rPght">
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
							<label for="nik">NIK</label>
							<input id="nik" type="text" name="nik" class="form-control" placeholder="NIK"  >
						</div>

			<div class="col-md-6 form-group">
							<label for="poli">Pilih Poli </label>
							<select  name="poli" class="form-control" >
								<?php
									foreach ($pendaftaran as $row)
								{
							echo "<option value='$pendaftaran->poli'>$pendaftaran->poli</option>";
								}
								?>
								 <option selected="selected" value="">pilih poli</option>
								<option  value="umum" >Poli Umum</option>
								<option  value="gigi">Poli Gigi</option>
								<option  value="syaraf">Poli Syaraf</option>
								<option  value="mata">Poli Mata</option>
								<option  value="tht">Poli THT</option>
								<option  value="jantung">Poli Jantung</option>
								<option  value="kia">Poli KIA</option>
									<option  value="kulit">Poli Kulit</option>
									<option  value="anasthesi">Poli Anasthesi</option>
									<option  value="fisioterapi">Poli Fisioterapi</option>
									<option  value="neurologi">Poli Neurologi</option>
									<option  value="hemodialisa">Poli Hemodialisa</option>
									<option  value="urologi">Poli Urologi</option>
									<option  value="paru">Poli Paru</option>
									<option  value="gizi">Poli Gizi</option>
									<option  value="syaraf">Poli Syaraf</option>
									<option  value="psikologi">Poli Psikologi</option>
									<option  value="lansia">Poli Lansia</option>
									<option  value="jiwa">Poli Jiwa</option>
									<option  value="bedah">Poli Bedah</option>
									<option  value="penyakitdalam">Poli Penyakit Dalam</option>
									<option  value="radiologi">Poli Radiologi</option>
									<option  value="ortodonsia">Poli Ortodonsia</option>
									<option  value="orthopedi">Poli Orthopedi</option>
									<option  value="periodentia">Poli Periodentia</option>

							</select>

						</div>


						<div align="center" class="col-md-12">
							<input type="submit" style="" name="submit" class="btn btn-primary" value="Simpan">
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
