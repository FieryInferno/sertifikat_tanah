<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah User</h1>
    <div class="card shadow mb-4">
      <div class="card-body">
        <form method="post" action="<?= base_url(); ?>admin/user/tambah" enctype="multipart/form-data">
          <div class="form-group col-6">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Role</label>
            <select name="role" id="role" class="form-control">
              <option>Pilih Role</option>
              <option value="admin">admin</option>
              <option value="loket">loket</option>
              <option value="pengukur">pengukur</option>
              <option value="kepala_desa">Kepala Desa</option>
            </select>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">Tambah</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin akan menambah data?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2019</span>
      </div>
    </div>
  </footer>
</div>
<?php $this->load->view('template/footer'); ?>