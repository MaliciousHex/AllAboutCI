<?php 
	
	class ProductsModel extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getProducts($limit=0){
			if($limit>0){
				$sql = "SELECT * FROM ms_shoes ms JOIN ms_shoes_image msi ON ms.shoes_id = msi.shoes_id ORDER BY ms.shoes_id DESC LIMIT " . $limit;
			}else{
				$sql = "SELECT * FROM ms_shoes ms JOIN ms_shoes_image msi ON ms.shoes_id = msi.shoes_id WHERE msi.maskot = 1 ORDER BY ms.shoes_id DESC ORDER BY ms.shoes_id DESC";
			}

			$query = $this->db->query($sql);
			return $query->row();
		}

		public function getProductsDetail($shoes_id){
			$sql = "SELECT * FROM ms_shoes ms JOIN ms_shoes_image msi ON ms.shoes_id = msi.shoes_id JOIN ms_brand mb ON ms.brand_id = mb.brand_id WHERE ms.shoes_id = " . $shoes_id . " AND msi.maskot=1";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function getTotalProducts(){
			$sql = "SELECT * FROM ms_shoes ";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		public function getProductsPage($start=0,$limit=0){
			if($limit>0){
				$sql = "SELECT * FROM ms_shoes ms JOIN ms_shoes_image msi ON ms.shoes_id = msi.shoes_id WHERE msi.maskot = 1 ORDER BY ms.shoes_id DESC LIMIT " . $start . "," . $limit;
				$query = $this->db->query($sql);
				return $query->result_array();
			}else{
				return NULL;
			}
		}

		public function getAnotherPicture($shoes_id){
			$sql = "SELECT * FROM ms_shoes_image WHERE maskot = 0 AND shoes_id = " . $shoes_id;
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getGambarProduct($shoes_id=0){
			$result = "";
			if($product_id>0){
				$sql = "SELECT image_name FROM ms_shoes_image WHERE shoes_id = " . $shoes_id;
				$query = $this->db->query($sql);
				$rows = $query->row();
				$result = $rows->image_name;
			}
			return $result;
		}

		public function getBrand(){
			$sql = "SELECT * FROM ms_brand";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getProductsBrand($brand_id=0){
			
				$sql = "SELECT * FROM ms_shoes ms JOIN ms_shoes_image msi ON ms.shoes_id = msi.shoes_id WHERE msi.maskot = 1 AND ms.brand_id = " . $brand_id . "  ORDER BY ms.shoes_id DESC ";
				$query = $this->db->query($sql);
				return $query->result_array();
			
		}
	}
 ?>