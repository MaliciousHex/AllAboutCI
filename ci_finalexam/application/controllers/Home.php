<?php 
	
	class Home extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("ProductsModel");

		}

		public function index(){
			$data["content_page"] = "home_layout";
			$data["products_data"] = $this->ProductsModel->getProducts(9,1);
			$data["categories"]=$this->ProductsModel->getBrand();
			$data["bestseller"]=$this->ProductsModel->getBest();
			$this->load->view("index",$data);
		}

	}
 ?>