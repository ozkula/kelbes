<div class="box">
  <table class="table table-bordered table-hover dataTable" id="postTable">
    <thead>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>No Hp</td>
        <td>No Telp</td>
        <td>Alamat</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; for ($i=0; $i <count($show_all_data) ; $i++) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $show_all_data[$i]['nama1']; ?></td>
          <td><?php echo $show_all_data[$i]['hp']; ?></td>
          <td><?php echo $show_all_data[$i]['telp']; ?></td>
          <td><?php echo $show_all_data[$i]['alamat']; ?></td>
          <td>
            <a href="<?php echo base_url(); ?>keluarga/edit/<?php echo $show_all_data[$i]['idkel'];?>" class="btn btn-block btn-primary btn-flat">Edit</a>
            <a href="<?php echo base_url(); ?>keluarga/delete/<?php echo $show_all_data[$i]['idkel'];?>" class="btn btn-block btn-danger btn-xs">Delete</a>
          </td>
        </tr>
      <?php $no++;} ?>
    </tbody>
  </table>
</div>