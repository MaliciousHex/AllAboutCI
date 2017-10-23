<?php 
		
	class Products extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("ProductsModel");

		}

		public function index(){
			$data["content_page"] = "catalogue_layout";
			$data["categories"] = $this->ProductsModel->getBrand();
			$data["products_data"]=$this->ProductsModel->getProducts(12,0);
			$data["bestseller"]=$this->ProductsModel->getBest();
			$this->load->view("index",$data);
		}

		public function productsBrand($brand_id){
			$data["content_page"] = "catalogue_layout";
			$data["categories"] = $this->ProductsModel->getBrand();
			$data["products_data"]=$this->ProductsModel->getProductsBrand($brand_id);
			$data["bestseller"]=$this->ProductsModel->getBest();
			$this->load->view("index",$data);
		}

		public function productDetail($tshirt_id){
			$data["content_page"] = "detail_layout";
			$data["product_data"] = $this->ProductsModel->getProductsDetail($tshirt_id);
			$data["categories"] = $this->ProductsModel->getBrand();
			$data["bestseller"]=$this->ProductsModel->getBest();
			$this->load->view("index",$data);
		}

	

	}

 ?>