<?php 
class Work extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('common/head');

		$this->load->view('common/foot');
	}
}