<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengukur extends CI_Controller {
  
	public function index()
	{
		$this->load->view('pengukur/dashboard');
	}

  public function pengajuan()
  {
    if ($this->input->post()) {
      $this->ModelPengajuan->insertPengukuran();
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil input pengukuran
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('pengukur/pengajuan.html');
    }
    $data['pengajuan']  = $this->ModelPengajuan->getPengajuanPengukur();
		$this->load->view('pengukur/pengajuan', $data);
  }
}
