<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class ModelPengajuan extends CI_Model {

	public function insert()
	{
		$this->db->insert('pengajuan', [
			'id_masyarakat'                   => $this->session->id_user,
			'alamat'			                    => $this->input->post('alamat'),
      'ktp'                             => uploadFile('ktp'),
      'berita_acara'                    => uploadFile('berita_acara'),
      'tanda_batas_tanah'               => uploadFile('tanda_batas_tanah'),
      'surat_keterangan_tidak_sengketa' => uploadFile('surat_keterangan_tidak_sengketa'),
		]);
	}

	public function getByUser()
	{
    $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
    $this->db->join('pengukuran', 'pengajuan.pengukuran = pengukuran.id_pengukuran', 'left');
		return $this->db->get_where('pengajuan', [
			'id_masyarakat'	=> $this->session->id_user
		])->result_array();
	}

    public function getAll()
    {
        $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
        return $this->db->get('pengajuan')->result_array();
    }

    public function verifikasiPembayaran($id_pengajuan)
    {
      $this->db->update('pengajuan', ['status'  => '1'], ['id_pengajuan'  => $id_pengajuan]);
    }

  public function uploadBukti()
  {
    $config['upload_path']    = './assets/';
    $config['allowed_types']  = 'pdf';

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('buktiPembayaran')) {
        $buktiPembayaran = ''; 
    } else {
        $buktiPembayaran = $this->upload->data('file_name');
    }

    $data['pemohon']  = $this->db->get_where('user', [
      'user_id' => $this->session->id_user
    ])->row_array();
    $stt  = $this->buatPDF('stt', $data);
    $sps  = $this->buatPDF('sps', $data);

    $this->db->where('id_pengajuan', $this->input->post('id_pengajuan'));
    $this->db->update('pengajuan', [
        'bukti_pembayaran'  => $buktiPembayaran,
        'status'            => '4',
        'stt'               => $stt,
        'sps'               => $sps
    ]);
  }

  public function buatPDF($jenis, $data)
  {
    ob_start();
      switch ($jenis) {
        case 'stt':
          $this->load->view('masyarakat/stt.php', $data);
          break;
        case 'sps':
          $this->load->view('masyarakat/sps.php', $data);
          break;
        case 'surat_ukur':
          $this->load->view('masyarakat/surat_ukur.php', $data);
          break;
        case 'sertifikat':
          $this->load->view('masyarakat/sertifikat.php', $data);
          break;
        
        default:
          # code...
          break;
      }
      $html = ob_get_contents();
    ob_end_clean();
    // ob_clean();
    $filename = uniqid();
    $options  = new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('legal', 'potrait');
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents('./assets/' . $filename . '.pdf', $output);
    return $filename . '.pdf';
  }

  public function getPengajuanPengukur()
  {
    $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
    return $this->db->get_where('pengajuan', ['status'  => '4'])->result_array();
  }

  public function insertPengukuran()
  {
    $this->db->select_max('nomor');
    $hasil  = $this->db->get('pengukuran')->row_array();
    if ($hasil['nomor']) $data['nomor'] = $hasil['nomor'] + 1;
    else $data['nomor'] = 1;
    $id_pengukuran    = uniqid();
    $this->db->insert('pengukuran', [
      'id_pengukuran' => $id_pengukuran,
      'no_jenis_hak'  => $this->input->post('no_jenis_hak'),
      'nib'           => $this->input->post('nib'),
      'keadaan_tanah' => $this->input->post('keadaan_tanah'),
      'batas'         => $this->input->post('batas'),
      'luas'          => $this->input->post('luas'),
      'nomor'         => $data['nomor']
    ]);
    $this->db->update('pengajuan', [
      'pengukuran' => $id_pengukuran,
      'status'     => '5'
    ], ['id_pengajuan' => $this->input->post('id_pengajuan')]);
  }

  public function buatSertifikat($id_pengajuan)
  {
    $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
    $this->db->join('pengukuran', 'pengajuan.pengukuran = pengukuran.id_pengukuran');
    $pemegang_hak   = $this->db->get_where('pengajuan', [
      'id_pengajuan'  => $id_pengajuan
    ])->row_array(); 

    $data['pemegang']       = $pemegang_hak['nama'];
    $data['kecamatan']      = $pemegang_hak['kecamatan'];
    $data['desa']           = $pemegang_hak['desa'];
    $data['tanggal_lahir']  = $pemegang_hak['tanggal_lahir'];
    $data['no_jenis_hak']   = $pemegang_hak['no_jenis_hak'];
    $data['nib']            = $pemegang_hak['nib'];
    $data['keadaan_tanah']  = $pemegang_hak['keadaan_tanah'];
    $data['batas']          = $pemegang_hak['batas'];
    $data['luas']           = $pemegang_hak['luas'];
    $data['nomor']          = $pemegang_hak['nomor'];
    $surat_ukur             = $this->buatPDF('surat_ukur', $data);
    $sertifikat             = $this->buatPDF('sertifikat', $data);
    $this->db->update('pengukuran', [
      'surat_ukur'  => $surat_ukur,
      'sertifikat'  => $sertifikat
    ], ['id_pengukuran' => $pemegang_hak['pengukuran']]);
    $this->db->update('pengajuan', ['status'  => '6'], ['id_pengajuan'  => $pemegang_hak['id_pengajuan']]);
  }
}
