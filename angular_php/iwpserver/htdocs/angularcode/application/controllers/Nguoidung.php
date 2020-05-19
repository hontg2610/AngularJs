<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nguoidung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('dulieunguoidung');
	}

}

/* End of file Nguoidung.php */
/* Location: ./application/controllers/Nguoidung.php */