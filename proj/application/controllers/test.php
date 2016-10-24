<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends Front_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sina_m');
	}
	// function index()
	// {
	// 	$this->db->where('id','500148');	
	// 	$result = $this->db->get('user',1,0)->row_array();
	// 	$this->load->model('interface_m');
	// 	$this->interface_m->sendmessage($result['mobile'],6);	
	// }
	function index(){
		// $start = '20161006100001';
		// $end = '20161010100002';
		// echo 'hha';
		 $uid = '500143';
		$return = $this->sina_m->show_member_infos_sina($uid);
		var_dump($return);
	}
}