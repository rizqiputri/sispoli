<section class="content container-fluid">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">PENDAFTARAN  PASIEN</h3>
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
							<label for="namabayi">Nama </label>
							<input id="namabayi" type="text" name="nama" class="form-control" placeholder="Nama Pasien">
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
            <div class="col-md-6 form-group">
							<label for="jeniskelamin">Jenis Kelamin</label>
							<select class="form-control" name="jeniskelamin">
								<option selected="selected" value="">pilih jenis kelamin</option>
								<option  value="L">Laki-Laki</option>
								<option  value="P">perempuan</option>
							</select>
						</div>
            <div class="col-md-6 form-group">
							<label for="tanggallahir">Tanggal Lahir</label>
							<input id="tanggallahir" type="date" name="tanggallahir" placeholder="Tanggal Lahir" class="form-control">
						</div>
            <div class="col-md-6 form-group">
							<label for="jamlahir">Alamat</label>
							<input id="alamat" type="text" name="alamat" placeholder="Alamat Pasien" class="form-control">
						</div>
						<div class="col-md-6 form-group">
							<label for="Kelurahan">Kelurahan</label>
							<input id="Kelurahan" type="text" name="kelurahan" class="form-control" placeholder="Kelurahan">
						</div>
            <div class="col-md-6 form-group">
							<label for="Kecamatan">Kecamatan</label>
							<input id="Kecamatan" type="text" name="kecamatan" placeholder="Kecamatan" class="form-control">
						</div>
            <div class="col-md-6 form-group">
							<label for="Kabupaten">Kabupaten</label>
							<input id="Kabupaten" type="text" name="kabupaten" placeholder="Kabupaten" class="form-control">
						</div>
            <div class="col-md-6 form-group">
							<label for="Provinsi">Provinsi</label>
							<input id="Provinsi" type="text" name="provinsi" placeholder="provinsi" class="form-control">
						</div>

						<div align="center" class="col-md-12">
							<input type="submit" style="" name="submit" class="btn btn-primary" value="Simpan">
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
