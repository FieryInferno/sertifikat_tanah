<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pengajuan extends CI_Controller {

	public function index()
	{
		$data['pengajuan']	= $this->ModelPengajuan->getByUser();
		$this->load->view('masyarakat/pengajuan', $data);
	}

	public function tambahPengajuanJualBeli()
	{
		$this->db->insert('pengajuan', [
			'id_masyarakat' => $this->session->id_user,
			'alamat'			  => '',
      'ktp'           => uploadFile('ktp'),
      'pbb'           => uploadFile('pbb'),
      'kk'            => uploadFile('kk'),
      'npwp'          => uploadFile('npwp'),
      'imb'           => uploadFile('imb'),
      'ajb'           => uploadFile('ajb'),
      'pph'           => uploadFile('pph'),
      'jenis'         => 'jual_beli'
		]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success">
        Berhasil tambah data
      </div>
    ');
    redirect('pengajuan');
	}

	public function tambahPengajuanHibahWaris()
	{
		$this->db->insert('pengajuan', [
			'id_masyarakat'           => $this->session->id_user,
			'alamat'			            => '',
      'ktp'                     => uploadFile('ktp'),
      'pbb'                     => uploadFile('pbb'),
      'kk'                      => uploadFile('kk'),
      'npwp'                    => uploadFile('npwp'),
      'pph'                     => uploadFile('pph'),
      'akta_hibah'              => uploadFile('akta_hibah'),
      'bukti_penguasaan_tanah'  => uploadFile('bukti_penguasaan_tanah'),
      'imb'                     => uploadFile('imb'),
      'skbb'                    => uploadFile('skbb'),
      'jenis'                   => 'hibah_waris'
		]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success">
        Berhasil tambah data
      </div>
    ');
    redirect('pengajuan');
	}

	public function uploadBukti()
	{
		$this->ModelPengajuan->uploadBukti();
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success">
        Berhasil upload bukti pembayaran
      </div>
    ');
    redirect('pengajuan');
	}

  public function tambah()
  {
		$this->load->view('masyarakat/tambahPengajuan');
  }
}
