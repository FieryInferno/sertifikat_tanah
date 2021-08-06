<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

	public function index()
	{
		$this->load->view('masyarakat/dashboard');
	}

  public function dataMasyarakat()
  {
    $data = $this->db->get_where('user', ['user_id' => $this->session->id_user])->row_array();
		$this->load->view('masyarakat/dataMasyarakat', $data);
  }

  public function uploadData()
  {
		$config['upload_path']    = './assets/';
    $config['allowed_types']  = 'pdf';
    
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('sppt')) {
      $sppt = '';
    } else {
      $sppt = $this->upload->data('file_name');
    }
    if ( ! $this->upload->do_upload('ktp')) {
      $ktp = '';	
    } else {
      $ktp = $this->upload->data('file_name');
    }
    if ( ! $this->upload->do_upload('npwp')) {
      $npwp = '';	
    } else {
      $npwp = $this->upload->data('file_name');
    }
    if ( ! $this->upload->do_upload('ajb')) {
      $ajb = '';	
    } else {
      $ajb = $this->upload->data('file_name');
    }
    if ( ! $this->upload->do_upload('kk')) {
      $kk = '';	
    } else {
      $kk = $this->upload->data('file_name');
    }

    $this->db->update('user', [
      'sppt'  => $sppt,
      'ktp'   => $ktp,
      'npwp'  => $npwp,
      'ajb'   => $ajb,
      'kk'    => $kk,
    ], ['user_id' => $this->session->id_user]);

    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil input data.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('masyarakat/data_masyarakat');
  }

  public function editData()
  {
		$config['upload_path']    = './assets/';
    $config['allowed_types']  = 'pdf';
    
    $this->upload->initialize($config);

    if ($_FILES['sppt']['name'] == '') {
      $sppt = $this->input->post('sppt_lama');
    } else {
      if (!$this->upload->do_upload('sppt')) {
        $sppt = $this->input->post('sppt_lama');
      } else {
        $sppt = $this->upload->data('file_name');
      }
      file_exists('assets/' . $this->input->post('sppt_lama')) ? unlink('assets/' . $this->input->post('sppt_lama')) : '';
    }
    if ($_FILES['ktp']['name'] == '') {
      $ktp = $this->input->post('ktp_lama');
    } else {
      if (!$this->upload->do_upload('ktp')) {
        $ktp = $this->input->post('ktp_lama');
      } else {
        $ktp = $this->upload->data('file_name');
      }
      file_exists('assets/' . $this->input->post('ktp_lama')) ? unlink('assets/' . $this->input->post('ktp_lama')) : '';
    }
    if ($_FILES['npwp']['name'] == '') {
      $npwp = $this->input->post('npwp_lama');
    } else {
      if (!$this->upload->do_upload('npwp')) {
        $npwp = $this->input->post('npwp_lama');
      } else {
        $npwp = $this->upload->data('file_name');
      }
      file_exists('assets/' . $this->input->post('npwp_lama')) ? unlink('assets/' . $this->input->post('npwp_lama')) : '';
    }
    if ($_FILES['ajb']['name'] == '') {
      $ajb = $this->input->post('ajb_lama');
    } else {
      if (!$this->upload->do_upload('ajb')) {
        $ajb = $this->input->post('ajb_lama');
      } else {
        $ajb = $this->upload->data('file_name');
      }
      file_exists('assets/' . $this->input->post('ajb_lama')) ? unlink('assets/' . $this->input->post('ajb_lama')) : '';
    }
    if ($_FILES['kk']['name'] == '') {
      $kk = $this->input->post('kk_lama');
    } else {
      if (!$this->upload->do_upload('kk')) {
        $kk = $this->input->post('kk_lama');
      } else {
        $kk = $this->upload->data('file_name');
      }
      file_exists('assets/' . $this->input->post('kk_lama')) ? unlink('assets/' . $this->input->post('kk_lama')) : '';
    }

    $this->db->update('user', [
      'sppt'  => $sppt,
      'ktp'   => $ktp,
      'npwp'  => $npwp,
      'ajb'   => $ajb,
      'kk'    => $kk,
    ], ['user_id' => $this->session->id_user]);

    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil edit data.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('masyarakat/data_masyarakat');
  }

  public function hapusData()
  {
    $this->db->update('user', [
      'sppt'  => NULL,
      'ktp'   => NULL,
      'npwp'  => NULL,
      'ajb'   => NULL,
      'kk'    => NULL,
    ], ['user_id' => $this->session->id_user]);

    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil hapus data.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('masyarakat/data_masyarakat');
  }

  public function uploadUntukAdmin()
  {
    $this->db->update('pengajuan', [
      'kartu_keluarga'                        => uploadFile('kartu_keluarga'),
      'npwp'                                  => uploadFile('npwp'),
      'izin_mendirikan_bangunan'              => uploadFile('izin_mendirikan_bangunan'),
      'ajb'                                   => uploadFile('ajb'),
      'pph'                                   => uploadFile('pph'),
      'bphtb'                                 => uploadFile('bphtb'),
      'akta_hibah'                            => uploadFile('akta_hibah'),
      'bukti_penguasaan_tanah'                => uploadFile('bukti_penguasaan_tanah'),
      'pbb'                                   => uploadFile('pbb'),
      'surat_keterangan_belum_bersertifikat'  => uploadFile('surat_keterangan_belum_bersertifikat'),
      'surat_keterangan_riwayat_tanah'        => uploadFile('surat_keterangan_riwayat_tanah'),
      'status'                                => '4'
    ], ['id_pengajuan'  => $this->input->post('id_pengajuan')]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil upload data.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('masyarakat/pengajuan.html');
  }

  public function keluhan()
  {
    if ($this->input->post()) {
      $this->db->insert('keluhan', [
        'user_id' => $this->session->id_user,
        'isi_keluhan' => $this->input->post('keluhan')
      ]);
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil simpan data.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('masyarakat/keluhan');
    }
    $data['keluhan']  = $this->db->get_where('keluhan', ['user_id' => $this->session->id_user])->result_array();
		$this->load->view('masyarakat/keluhan', $data);
  }
}