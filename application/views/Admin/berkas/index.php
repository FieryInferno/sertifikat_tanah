<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
?>
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Tabel berkas</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>nomor telepon</th>
                <th>alamat</th>
                
              </tr>
            </thead>
            
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
<?php
$this->load->view('template/footer');
?>