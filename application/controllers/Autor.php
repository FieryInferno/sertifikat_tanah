<?php 
class Autor extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->level) {
      switch ($this->session->level) {
        case 'admin':
          redirect('admin.html');
          break;
        case 'loket':
          redirect('loket');
          break;
        case 'pengukur':
          redirect('pengukur.html');
          break;
        case 'masyarakat':
          redirect('masyarakat');
          break;
        
        default:
          # code...
          break;
      }
    }
  }

	public function daftar(){
		$this->load->view('daftar/daftar');
		
	}
	public function Login_pengguna(){
		$this->load->view('Login');
		
	}
	public function dashboard(){
		
	
		$this->load->view('dashboard_admin');
	}

	public function loginPengguna() {
    $this->form_validation->set_rules('username','Nama pengguna','trim|required');
    $this->form_validation->set_rules('password','Kata sandi','trim|required');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('login'); 
    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $monitor  = $this->db->get_where('user', [
        'username'  => $username,
        'password'  => $password
      ])->row_array();
      if ($monitor) {
        $this->session->set_userdata([
          'id_user'   => $monitor['user_id'],
          'nama'      => $monitor['nama'],
          'username'  => $monitor['username'],
          'level'     => $monitor['level']
        ]);
        switch ($monitor['level']) {
          case 'admin':
            redirect('admin.html');
            break;
          case 'loket':
            redirect('loket');
            break;
          case 'pengukur':
            redirect('pengukur.html');
            break;
          case 'masyarakat':
            redirect('masyarakat');
            break;
          case 'kepala_desa':
            redirect('kepala_desa');
            break;
            
          default:
            # code...
            break;
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum terdaftar!!!</div>');
        redirect('login.html');
      }
    }
  }
}
?>