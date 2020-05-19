<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Angular1_php_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getData()
	{
		$this->db->select('*');
		$dl = $this->db->get('nguoidung');		
		$dl = $dl->result_array();
		return $dl;
	}

	public function updateByID($id,$ten,$facebook,$sodienthoai,$namsinh)
	{
		$dl = array(
			'id' => $id,
			'ten' => $ten,
			'facebook' => $facebook,
			'sodienthoai' => $sodienthoai,
			'namsinh' => $namsinh
		);
		$this->db->where('id', $id);
		$this->db->update('nguoidung', $dl);
		if($this->db->affected_rows()>0){
			echo "thanhcong";
		}
		else{
			echo "thatbai";
		}

	}
}

/* End of file angular1_php_model.php */
/* Location: ./application/models/angular1_php_model.php */