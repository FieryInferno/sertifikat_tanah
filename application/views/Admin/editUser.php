<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit User</h1>
    <div class="card shadow mb-4">
      <div class="card-body">
        <form method="post" action="<?= base_url('admin/user/edit/' . $user_id); ?>" enctype="multipart/form-data">
          <div class="form-group col-6">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
          </div>
          <div class="form-group col-6">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?= $username; ?>">
          </div>
          <div class="form-group col-6">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="<?= $password; ?>">
          </div>
          <div class="form-group col-6">
            <label>Role</label>
            <select name="role" id="role" class="form-control">
              <option value="admin" <?= $level == 'admin' ? 'selected' : '' ; ?>>admin</option>
              <option value="loket" <?= $level == 'loket' ? 'selected' : '' ; ?>>loket</option>
              <option value="pengukur" <?= $level == 'pengukur' ? 'selected' : '' ; ?>>pengukur</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
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