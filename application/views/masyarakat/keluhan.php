<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Keluhan</h1>
      <div class="card shadow mb-4">
        <div class="card-body">
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Keluhan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('masyarakat/keluhan'); ?>" method="post">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="">Keluhan</label>
                    <textarea name="keluhan" id="keluhan" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
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
                          }
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