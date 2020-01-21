<?php
class Slide extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->view('header');

	}
	public function index(){
	$this->load->view('slide');	
  
    /* $this->footer();*/
	}
	public function footer(){
		/*$this->load->view('footer');*/
	}
}
?>