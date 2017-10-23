<?php 
		
	class Faqs extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("ProductsModel");

		}

		function index(){
			$data["content_page"] = "faqs_layout";
			$data["catagories"] = $this->ProductsModel->getBrand();
			$this->load->view("index",$data);
		}

	}

 ?>