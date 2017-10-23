<?php 

	class faqs extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data["content_page"]= "faqs_content";
			$this->load->view("index",$data);
		}
	}
 ?>