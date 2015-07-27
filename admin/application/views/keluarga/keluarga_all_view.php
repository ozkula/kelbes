<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('global/head'); ?>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <?php $this->load->view('global/headermenu'); ?>
      <?php $this->load->view('global/sidebar'); ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>List Data</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Keluarga</a></li>
            <li class="active">Semua keluarga</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php $this->load->view('keluarga/_keluarga_all') ?>
        </section>
      </div>
    </div>
      <?php $this->load->view('global/footer'); ?>
  </body>
</html>