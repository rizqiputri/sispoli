  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/template/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>SISPOLI - <?php echo  $this->session->userdata('level'); ?></p>
          <a href="<?php echo base_url(); ?>"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div> -->
<!--       </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php if ($this->session->userdata('level') == 'administrator'): ?>

      <ul class="sidebar-menu" data-widget="tree" style="margin-top:20px;">
        <li class="header">MENU</li>
          <li><a href="<?php echo base_url(); ?>"><i class="fa fa-book"></i> <span>Dashboard POLI</span></a></li>
          <li><a href="<?php echo base_url('Pendaftaranpasien/index/poli'); ?>"><i class="fa fa-circle-o"></i>DATA PENDAFTAR POLI</a></li>
        <li class="treeview">

          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>

                <li class="treeview">
            </i>
            </span>
          </a>


            <li class="header">PASIEN</li>
            <li><a href="<?php echo base_url('Pendaftaranpasien'); ?>"><i class="fa fa-circle-o"></i>DATA PASIEN</a></li>
            <li><a href="<?php echo base_url('Pendaftaranpasien/add'); ?>"><i class="fa fa-edit"></i>Pendaftaran pasien baru</a></li>
            <li><a href="<?php echo base_url('Pendaftaranpasien/daftarpoli'); ?>"><i class="fa fa-edit"></i>Pendaftaran Poli</a></li>

           <!--  <li><a href="<?php echo base_url(); ?>assets/template/pages/forms/general.html"><i class="fa fa-circle-o"></i>List Pasien</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/forms/general.html"><i class="fa fa-circle-o"></i>kritik dan saran</a></li> -->
          </ul>
        </li>


        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMIN</li>
         <li><a href="<?php echo base_url('users'); ?>"><i class="fa fa-users"></i> <span>Tambah user</span></a></li>
          <?php endif;?>

          <?php if ($this->session->userdata('level') == 'perawat'): ?>

    <ul class="sidebar-menu" data-widget="tree" style="margin-top:20px;">
      <li class="header">MENU</li>
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-book"></i> <span>Dashboard POLI</span></a></li>
      <li class="treeview">

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
      </li>

              <li class="treeview">
          </i>
          </span>
        </a>


         <!--  <li><a href="<?php echo base_url(); ?>assets/template/pages/forms/general.html"><i class="fa fa-circle-o"></i>List Pasien</a></li>
          <li><a href="<?php echo base_url(); ?>assets/template/pages/forms/general.html"><i class="fa fa-circle-o"></i>kritik dan saran</a></li> -->
        </ul>
      </li>


      <ul class="sidebar-menu" data-widget="tree">

        <?php endif;?>
      <!--   <li class="treeview">
          <a href="<?php echo base_url(); ?>assets/template/">
            <i class="fa fa-pie-chart"></i>
            <span>GRAFIK PASIEN </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/template/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        -->


            <?php if ($this->session->userdata('level') == 'user'): ?>

                <ul class="sidebar-menu" data-widget="tree" style="margin-top:20px;">
        <li class="header">MENU</li>
          <li><a href="<?php echo base_url(); ?>"><i class="fa fa-book"></i> <span>Dashboard POLI</span></a></li>
        <li class="treeview">

          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>

                <li class="treeview">
            </i>
            </span>
          </a>

            <!-- <li><a href="<?php echo base_url('Pendaftaranpasien/add'); ?>"><i class="fa fa-edit"></i> form pendaftaran</a></li>
            <li><a href="<?php echo base_url('Pendaftaranpasien'); ?>"></i> PENDAFTARAN PASIEN</a></li>

            <li><a href="<?php echo base_url('Pendaftaranpasien'); ?>"></i> Pasien poli umum</a></li> -->
           <!--  <li><a href="<?php echo base_url(); ?>assets/template/pages/forms/general.html"><i class="fa fa-circle-o"></i>List Pasien</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/forms/general.html"><i class="fa fa-circle-o"></i>kritik dan saran</a></li> -->
          </ul>
        </li>
            <?php endif; ?>


          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/template/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>


          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="<?php echo base_url(); ?>assets/template/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>

      </ul>
    </section>
  </aside>
