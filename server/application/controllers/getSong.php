<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GetSong extends CI_Controller 
{
	public function index()
	{
		$data = array();
		
		$model = $this->load->model('party_model');
		$data['title'] = 'Democratize the play queue';

		$view = "getsong";
		$this->load->view('templates/header', $data);
		$this->load->view($view);
		$this->load->view('templates/footer', $data);
	}

}

/* End of file getSong.php */
/* Location: ./application/controllers/getSong.php */
?>