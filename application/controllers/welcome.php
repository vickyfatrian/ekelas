<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


  function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}


	public function index()
	{
			$data['dynamiccontent'] = 'home';
		$this->load->view('testemplate/testemplate1',$data);
	}
}

