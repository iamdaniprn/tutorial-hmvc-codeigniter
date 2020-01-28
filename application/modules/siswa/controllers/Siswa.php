<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

 	public function __construct()
	{
      	parent::__construct();
      	$this->load->model('m_siswa');
	}

	public function index()
	{
		$data['data_siswa'] = $this->m_siswa->data_siswa();
		$this->load->view('siswa', $data);
	}
}
