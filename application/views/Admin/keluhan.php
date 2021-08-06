<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Keluhan</h1>
      <div class="card shadow mb-4">
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Keluhan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($keluhan as $key) { ?>
                    <tr>
                      <td><?= $key['isi_keluhan']; ?></td>
                      <td>
                        <?php
                          if ($key['status'] == 'verifikasi') {
                            echo "Sudah diverifikasi";
                          } else { ?>
                            <a href="<?= base_url('admin/verifikasiKeluhan/' . $key['id_keluhan']); ?>">Verifikasi</a>
                          <?php }
                        ?>
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