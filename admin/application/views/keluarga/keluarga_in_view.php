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
          <h1>Harus Diisi Dulu</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Keluarga</a></li>
            <li class="active">Tambah Keluarga</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <?php $this->load->view('keluarga/_keluarga_in') ?>
        </section>
      </div>
    </div>
      <?php $this->load->view('global/footer'); ?>
       <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("[data-mask]").inputmask();
      });
    </script>
     <script type="text/javascript">
      $(function () {
        $('#postTable').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    
      </script>
  </body>
</html>