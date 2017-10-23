<?php 
		
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("ProductsModel");

		}

		function index(){
			$data["content_page"] = "home_layout";
			$data["products_data"]=$this->ProductsModel->getProductsPage(0,3);
			$data["catagories"]=$this->ProductsModel->getBrand();
			$this->load->view("index",$data);
		}

	}

 ?>