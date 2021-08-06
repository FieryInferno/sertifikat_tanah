<?php
	function uploadFile($jenis)
	{
    $_FILES['file']['name']     = $_FILES[$jenis]['name'];
    $_FILES['file']['type']     = $_FILES[$jenis]['type'];
    $_FILES['file']['tmp_name'] = $_FILES[$jenis]['tmp_name'];
    $_FILES['file']['error']    = $_FILES[$jenis]['error'];
    $_FILES['file']['size']     = $_FILES[$jenis]['size'];
    $config ['upload_path']     = './assets';
    $config ['allowed_types']   = 'pdf';
		
		// if ($scanktp !== ''){
		$ci = get_instance();
		$ci->load->library('upload');
		$ci->upload->initialize($config);
		if (!$ci->upload->do_upload('file')) {
			echo $ci->upload->display_errors();
			die();
		}else {
			return $ci->upload->data('file_name');
		}
		// }
	}
?>