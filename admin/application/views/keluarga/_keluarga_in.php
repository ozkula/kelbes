              <form method="post" action = "<?php echo base_url('keluarga/tambah_baru');?>">
              <div class="row">
                  <div class="col-md-6">
                    <div class="box box-primary">
                      <div class="box-body">
                      <div class="form-group"><input type="text" class="form-control" id="nama1" name="nama1" placeholder="Nama Suami / Istri" required></div>
                      <div class="form-group"><input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required></div>
                      <div class="form-group"><div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" data-inputmask="'alias': 'dd/mm/yyyy'" placeholder="Tanggal Lahir" data-mask required/>
                    </div><!-- /.input group --></div>
                      <div class="form-group"><textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Rumah" required></textarea></div>
                      <div class="form-group"><input type="text" class="form-control" id="hp" name="hp" placeholder="No HP" required></div>
                      <div class="form-group"><input type="text" class="form-control" id="telp" name="telp" placeholder="No Telp"></div>
                      <div class="form-group"><input type="text" class="form-control" id="email" name="email" placeholder="Email"></div>
                      <div class="form-group"><input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required></div>
                      <div class="form-group"><textarea class="form-control" id="alamat_kerja" name="alamat_kerja" placeholder="Alamat Kerja" ></textarea></div>
                      <div class="form-group"><input type="text" class="form-control" id="telp_kerja" name="telp_kerja" placeholder="Telp Kerja"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box box-danger">
                      <div class="box-body">
                      <div class="form-group"><input type="text" class="form-control" id="nama2" name="nama2" placeholder="Nama Suami / Istri" required></div>
                      <div class="form-group"><input type="text" class="form-control" id="tempat_lahir2" name="tempat_lahir2" placeholder="Tempat Lahir" required></div>
                      <div class="form-group"><div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" id="tgl_lahir2" name="tgl_lahir2" data-inputmask="'alias': 'dd/mm/yyyy'" placeholder="Tanggal Lahir" data-mask required/>
                    </div><!-- /.input group --></div>
                      <div class="form-group"><input type="text" class="form-control" id="hp2" name="hp2" placeholder="No HP" required></div>
                      <div class="form-group"><input type="text" class="form-control" id="pekerjaan2" name="pekerjaan2" placeholder="Pekerjaan"></div>
                      <div class="form-group"><textarea class="form-control" id="alamat_kerja2" name="alamat_kerja2" placeholder="Alamat Kerja"></textarea></div>
                      <div class="form-group"><input type="text" class="form-control" id="telp_kerja2" name="telp_kerja2" placeholder="Telp Kerja"></div>
                      </div>
                    </div>
                      <div class="form-group"><label>Foto Keluarga</label><input type="file" name="userfile[]" id="userfile"></div>
                  </div>
                </div>
              <button type="submit" class="btn btn-block btn-primary">Tambah Data</button>
              </form>