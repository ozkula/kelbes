<!DOCTYPE html>
<html>
    <head>
      <?php $this->load->view('global/head'); ?>
    </head>
    <body>
    <?php $this->load->view('header_menu'); ?>
        <div class="container">
          <?php $this->load->view('about_content'); ?>
          <br>
        </div>
    </body>
    <?php $this->load->view('global/footer'); ?>
</html>