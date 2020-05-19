<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function laydulieu()
	{
		$this->load->model('Angular1_php_model');
		$dl = $this->Angular1_php_model->getData();
		$dl = json_encode($dl);
		echo $dl;
	}

	public function luudulieu()
	{
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$facebook = $this->input->post('facebook');
		$sodienthoai = $this->input->post('sodienthoai');
		$namsinh = $this->input->post('namsinh');

		$this->load->model('Angular1_php_model');
		echo $this->Angular1_php_model->updateByID($id,$ten,$facebook,$sodienthoai,$namsinh);
	}

}
