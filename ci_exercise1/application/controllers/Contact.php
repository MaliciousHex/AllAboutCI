<?php 
		
	class Contact extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("ProductsModel");

		}

		function index(){
			$data["content_page"] = "contact_layout";
			$data["catagories"] = $this->ProductsModel->getBrand();
			$this->load->view("index",$data);
		}

	}

 ?>