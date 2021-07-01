<!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>ANTRIAN POLI</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

 <!-- ./col -->
        <!-- <div class="col-lg-12" > -->
          <!-- small box -->
          <div class="large-box bg-green" style="height: 500px;">
            <form method="post"><input type="submit" name="reset" value="Reset" class="btn btn-danger pull-right" ></form>
            <div class="inner">
              <center>
              <br>
              <br>
              <br>
                <sup style="font-size: 50px">POLI ANASTHESI</sup>
                <h3><p style="font-size: 200px;"><?php echo $jumlahpolianasthesi; ?> </p>
                <p>PASIEN</p>
              </h3>
              </br>
                
            </div>
<center>
<form method="post">
  <input type="submit" name="next" value="Submit" class="btn btn-primary">
  <a href="<?php echo base_url('Pendaftaranpasien/index/anasthesi'); ?>" class="btn btn-info" role="button">Lihat Pasien</a>



</form>
            </div>

          </div>
        </div>
</center>>
