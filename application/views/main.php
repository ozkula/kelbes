<!DOCTYPE html>
<html>
    <head>
      <?php $this->load->view('global/head'); ?>
    </head>
    <body>
    <?php $this->load->view('main_head'); ?>
        <div class="container">
          <?php $this->load->view('main_content'); ?>
        </div>
    </body>
    <?php $this->load->view('global/footer'); ?>
</html>