<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Permohonan Pengajuan Sertifikat</h1>
      <div class="card shadow mb-4">
        <div class="card-header">
          <a href="<?= base_url(); ?>admin/user/tambah" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($user as $key) { ?>
                    <tr>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['username']; ?></td>
                      <td><?= $key['level']; ?></td>
                      <td>
                        <a href="<?= base_url('admin/user/edit/' . $key['user_id']); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('admin/user/hapus/' . $key['user_id']); ?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
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