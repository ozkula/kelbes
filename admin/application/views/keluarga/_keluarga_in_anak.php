              <form method="post" action = "<?php echo base_url('keluarga/tambah_anak_run');?>">
              <div class="row">
                  <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="form-group"><label>Ortu</label><select class="form-control" name="idparent" id="idparent">
                          <?php for ($i=0; $i <count($parent) ; $i++) { ?>
                           <option value="<?php echo $parent[$i]['idkel'] ?>"><?php echo $parent[$i]['nama1'] ?></option>
                          <?php } ?>
                          
                        </select></div>
                        <div class="form-group"><input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="Nama Anak" required></div>
                        <div class="form-group"><input type="text" class="form-control" id="tempat_lahir_anak" name="tempat_lahir_anak" placeholder="Tempat Lahir" required></div>
                        <div class="form-group"><div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="tgl_lahir_anak" name="tgl_lahir_anak" data-inputmask="'alias': 'dd/mm/yyyy'" placeholder="Tanggal Lahir" data-mask required/>
                      </div><!-- /.input group --></div>

              <button type="submit" class="btn btn-block btn-primary">Tambah Data</button>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box box-danger">
                      <div class="box-body">
                        <table class="table table-bordered table-hover dataTable" id="postTable">
                          <thead>
                            <tr>
                              <td>No</td>
                              <td>Nama Ortu</td>
                              <td>Nama Anak</td>
                              <td>Tgl Lahir</td>
                              <td>Action</td>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1; for ($i=0; $i <count($anak) ; $i++) { ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $anak[$i]['idparent']; ?></td>
                                <td><?php echo $anak[$i]['nama']; ?></td>
                                <td><?php echo $anak[$i]['tgl_lahir']; ?></td>
                                <td>
                                  <a href="<?php echo base_url(); ?>keluarga/edit/<?php echo $anak[$i]['idanak'];?>" class="btn btn-block btn-primary btn-flat">Edit</a>
                                  <a href="<?php echo base_url(); ?>keluarga/delete/<?php echo $anak[$i]['idanak'];?>" class="btn btn-block btn-danger btn-xs">Delete</a>
                                </td>
                              </tr>
                            <?php $no++;} ?>
                          </tbody>
                        </table>
                      </div>
                </div>
              </form>