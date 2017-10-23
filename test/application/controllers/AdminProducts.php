<?php 
 class AdminProducts extends CI_Controller {
	 public function __construct() {
		parent::__construct();
		$this->load->model("ProductsModel"); 
	 }
	 
	 public function index() {
		$data["content_page"]="add_form";
		$this->load->view("admin/admin_index",$data);  
	 }
	 
	 
 }