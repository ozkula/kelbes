     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo base_url('main'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <!-- with nested -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-list-alt"></i> <span>Data Keluarga</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo base_url('keluarga/all');?>">Lihat Semua Data</a></li>
                  <li><a href="<?php echo base_url('keluarga/tambah') ?>"><i class="fa fa-plus"></i> Tambah Data Orang</a></li>
                  <li><a href="<?php echo base_url('keluarga/tambah_anak') ?>"><i class="fa fa-plus"></i> Tambah Data Anak</a></li>
                </ul>
              </li>
            <!-- end nested -->
            <li><a href="<?php echo base_url('main/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
