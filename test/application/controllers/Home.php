<?php 
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("ProductsModel");

		}

		function index(){
			$data["content_page"] = "home_content";
			$data["products_data"] = $this->ProductsModel->getProducts(6);
			$this->load->view("index",$data);
		}

	}
 ?>