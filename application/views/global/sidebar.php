     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <!-- with nested -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-list-alt"></i> <span>Post</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo base_url('post/all');?>">All Post</a></li>
                  <li><a href="<?php echo base_url('post/new') ?>"><i class="fa fa-plus"></i> Write New</a></li>
                </ul>
              </li>
            <!-- end nested -->
            <!-- with nested -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-book"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo base_url('article/all');?>">All Post</a></li>
                  <li><a href="<?php echo base_url('article/new') ?>"><i class="fa fa-plus"></i> Write New</a></li>
                </ul>
              </li>
            <!-- end nested -->
            <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-tags"></i> Categories</a></li>
            <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-fire"></i> About</a></li>
            <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
