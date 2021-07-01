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
						<?php echo form_hidden('id', $pendaftaran->id);?>
					<!--	<label for="id">id</label>
					<input id="id" type="text" name="id" value="<?php echo $pendaftaran->id; ?>" class="form-control" placeholder="id" autocomplete="off"> -->
						<div class="col-md-6 form-group">
							<label for="nik">NIK</label>
							<input id="nik" type="text" name="nik" class="form-control" placeholder="NIK" value="<?php echo $pendaftaran->nik; ?>">
						</div>
            <div class="col-md-6 form-group">
							<label for="namabayi">Nama </label>
							<input id="namabayi" type="text" name="nama" class="form-control" placeholder="Nama Pasien" value="<?php echo $pendaftaran->nama; ?>">
						</div>
			<div class="col-md-6 form-group">
							<label for="poli">Pilih Poli </label>
							<select  name="poli" class="form-control" >

								 <option selected="selected" value="">pilih poli</option>
								 <option  value="umum" <?php if($pendaftaran->poli == "umum") echo "selected"; ?>>Poli Umum</option>
								 <option  value="gigi"<?php if($pendaftaran->poli == "gigi") echo "selected"; ?>>Poli Gigi</option>
								 <option  value="syaraf"<?php if($pendaftaran->poli == "syaraf") echo "selected"; ?>>Poli Syaraf</option>
								 <option  value="mata"<?php if($pendaftaran->poli == "mata") echo "selected"; ?>>Poli Mata</option>
								 <option  value="tht"<?php if($pendaftaran->poli == "tht") echo "selected"; ?>>Poli THT</option>
								 <option  value="jantung"<?php if($pendaftaran->poli == "jantung") echo "selected"; ?>>Poli Jantung</option>
								 <option  value="kia"<?php if($pendaftaran->poli == "kia") echo "selected"; ?>>Poli KIA</option>
								 <option  value="kulit"<?php if($pendaftaran->poli == "kulit") echo "selected"; ?>>Poli Kulit</option>
								 <option  value="anasthesi"<?php if($pendaftaran->poli == "anasthesi") echo "selected"; ?>>Poli Anasthesi</option>
 								 <option  value="fisioterapi"<?php if($pendaftaran->poli == "fisioterapi") echo "selected"; ?>>Poli Fisioterapi</option>
 								 <option  value="neurologi"<?php if($pendaftaran->poli == "neurologi") echo "selected"; ?>>Poli Neurologi</option>
 							 	 <option  value="hemodialisa"<?php if($pendaftaran->poli == "hemodialisa") echo "selected"; ?>>Poli Hemodialisa</option>
 								 <option  value="urologi"<?php if($pendaftaran->poli == "urologi") echo "selected"; ?>>Poli Urologi</option>
 								 <option  value="paru"<?php if($pendaftaran->poli == "paru") echo "selected"; ?>>Poli Paru</option>
 							 	 <option  value="gizi"<?php if($pendaftaran->poli == "gizi") echo "selected"; ?>>Poli Gizi</option>
 								 <option  value="syaraf"<?php if($pendaftaran->poli == "syaraf") echo "selected"; ?>>Poli Syaraf</option>
 								 <option  value="psikologi"<?php if($pendaftaran->poli == "psikologi") echo "selected"; ?>>Poli Psikologi</option>
 								 <option  value="lansia"<?php if($pendaftaran->poli == "lansia") echo "selected"; ?>>Poli Lansia</option>
 								 <option  value="jiwa"<?php if($pendaftaran->poli == "jiwa") echo "selected"; ?>>Poli Jiwa</option>
 								 <option  value="bedah"<?php if($pendaftaran->poli == "bedah") echo "selected"; ?>>Poli Bedah</option>
 								 <option  value="penyakitdalam"<?php if($pendaftaran->poli == "penyakitdalam") echo "selected"; ?>>Poli Penyakit Dalam</option>
 								 <option  value="radiologi"<?php if($pendaftaran->poli == "radiologi") echo "selected"; ?>>Poli Radiologi</option>
 								 <option  value="ortodonsia"<?php if($pendaftaran->poli == "ortodonsia") echo "selected"; ?>>Poli Ortodonsia</option>
 								 <option  value="orthopedi"<?php if($pendaftaran->poli == "orthopedi") echo "selected"; ?>>Poli Orthopedi</option>
 								 <option  value="periodentia"<?php if($pendaftaran->poli == "periodentia") echo "selected"; ?>>Poli Periodentia</option>

							</select>

						</div>
            <div class="col-md-6 form-group">
							<label for="jeniskelamin">Jenis Kelamin</label>
							<select class="form-control" name="jeniskelamin">
								<option selected="selected" value="">pilih jenis kelamin</option>
								<option  value="L" <?php if($pendaftaran->jenis_kelamin == "L") echo "selected"; ?>>Laki-Laki</option>
								<option  value="P" <?php if($pendaftaran->jenis_kelamin == "P") echo "selected"; ?>>perempuan</option>
							</select>
						</div>
            <div class="col-md-6 form-group">
							<label for="tanggallahir">Tanggal Lahir</label>
							<input id="tanggallahir" type="date" name="tanggallahir" placeholder="Tanggal Lahir" class="form-control" value="<?php echo $pendaftaran->tanggal_lahir; ?>">
						</div>
            <div class="col-md-6 form-group">
							<label for="jamlahir">Alamat</label>
							<input id="alamat" type="text" name="alamat" placeholder="Alamat Pasien" class="form-control" value="<?php echo $pendaftaran->alamat; ?>">
						</div>
						<div class="col-md-6 form-group">
							<label for="Kelurahan">Kelurahan</label>
							<input id="Kelurahan" type="text" name="kelurahan" placeholder="Kelurahan" class="form-control" value="<?php echo $pendaftaran->kelurahan; ?>">
						</div>
            <div class="col-md-6 form-group">
							<label for="Kecamatan">Kecamatan</label>
							<input id="Kecamatan" type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" value="<?php echo $pendaftaran->kecamatan; ?>">
						</div>
            <div class="col-md-6 form-group">
							<label for="Kabupaten">Kabupaten</label>
							<input id="Kabupaten" type="text" name="kabupaten" placeholder="Kabupaten" class="form-control" value="<?php echo $pendaftaran->kabupaten; ?>">
						</div>
            <div class="col-md-6 form-group">
							<label for="Provinsi">Provinsi</label>
							<input id="Provinsi" type="text" name="provinsi" placeholder="provinsi" class="form-control" value="<?php echo $pendaftaran->provinsi; ?>">
						</div>

						<div align="center" class="col-md-12">
							<input type="submit" style="" name="update" class="btn btn-primary" value="Simpan">
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
