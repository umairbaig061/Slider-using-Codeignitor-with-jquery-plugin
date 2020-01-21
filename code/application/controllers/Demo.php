<?php
class Demo extends CI_Controller{
	public function index(){
		$this->benchmark->mark('code_start');

// Some code happens here
			$this->load->view('demo');

$this->benchmark->mark('code_end');

echo $this->benchmark->elapsed_time('code_start', 'code_end');
 echo $this->benchmark->elapsed_time();

	}
}
?>