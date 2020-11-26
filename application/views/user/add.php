<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Tambah User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php
        echo form_open_multipart('user/add', 'role="form" class="form-horizontal"');
        ?>

        <div class="box-body">

          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Lengkap</label>

            <div class="col-sm-9">
              <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>

            <div class="col-sm-9">
              <input type="text" name="username" class="form-control" placeholder="Masukan Username">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>

            <div class="col-sm-9">
              <input type="password" name="password" class="form-control" placeholder="Masukan Password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Level User</label>

            <div class="col-sm-5">
              <?php
              echo cmb_dinamis('level_user', 'tbl_level_user', 'nama_level', 'id_level_user');
              ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Foto</label>

            <div class="col-sm-5">
              <input type="file" name="userfile">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label"></label>

            <div class="col-sm-1">
              <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>

            <div class="col-sm-1">
              <?php
              echo anchor('user', 'Kembali', array('class' => 'btn btn-danger btn-flat'));
              ?>
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>