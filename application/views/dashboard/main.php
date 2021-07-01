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

    <?php if ($this->session->userdata('level') == 'administrator' || $this->session->userdata('level') == 'perawat'): ?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI UMUM</sup></h3>
              <p style="font-size: 30px"><?= $jumlahpoliumum ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
            </div>

            <a href="<?php echo base_url('Dashboard/poliumum');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px"> ANASTHESI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolianasthesi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polianasthesi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px"> FISIOTERAPI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolifisioterapi ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polifisioterapi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI KIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolikia; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polikia');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI NEUROLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolinefrologi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polinefrologi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">HEMODIALISA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolihemodialisa; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polihemodialisa');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">UROLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliurologi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poliurologi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI GIGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoligigi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poligigi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI MATA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolimata; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polimata');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI JANTUNG</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolijantung; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polijantung');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI KULIT</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolikulit ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polikulit');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI PARU</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliparu ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poliparu');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI THT</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolitht ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/politht');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI GIZI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoligizi ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poligizi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI SYARAF</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolisyaraf ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polisyaraf');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI PSIKOLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolipsikologi ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polipsikologi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI LANSIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolilansia ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polilansia');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI JIWA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolijiwa; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polijiwa');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI BEDAH</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolibedah; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polibedah');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI PENYAKIT DALAM</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolipenyakitdalam; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/polipenyakitdalam');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">RADIOLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliradiologi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poliradiologi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI ORTODONSIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliortodonsia; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poliortodonsia');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI ORTHOPEDI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliorthopedi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poliorthopedi');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">PERIODENTIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliperiodentia ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?php echo base_url('Dashboard/poliperiodentia');?>" class="small-box-footer">DETAIL <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php endif;?>

         <?php if ($this->session->userdata('level') == 'user'): ?>
         <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI UMUM</sup></h3>
              <p style="font-size: 30px"><?= $jumlahpoliumum ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
            </div>


          </div>
        </div>

         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px"> ANASTHESI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolianasthesi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px"> FISIOTERAPI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolifisioterapi ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI KIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolikia; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI NEFROLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolinefrologi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">HEMODIALISA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolihemodialisa; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">UROLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliurologi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI GIGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoligigi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI MATA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolimata; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI JANTUNG</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolijantung; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI KULIT</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolikulit ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI PARU</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliparu ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI THT</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolitht ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI GIZI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoligizi ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI SYARAF</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolisyaraf ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI PSIKOLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolipsikologi ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI LANSIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolilansia ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI JIWA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolijiwa; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI BEDAH</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolibedah; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI PENYAKIT DALAM</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpolipenyakitdalam; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">RADIOLOGI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliradiologi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI ORTODONSIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliortodonsia; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">POLI ORTHOPEDI</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliorthopedi; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>

          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <center><h3><sup style="font-size: 24px">PERIODENTIA</sup></h3>

              <p style="font-size: 30px"><?= $jumlahpoliperiodentia ; ?></p>
              <br>
              <h3><sup style="font-size: 24px">PASIEN</sup></h3>
            </div>

          </div>
        </div>

         <?php endif; ?>



                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  <!-- </div> -->
  <!-- /.content-wrapper -->
