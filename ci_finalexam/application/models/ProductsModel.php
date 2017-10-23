<?php 
	
	class ProductsModel extends CI_Model{

		public function __construct(){
			parent::__construct();
		}

		public function getProducts($limit=0,$featured=0){
			if($limit>0 && $featured>0){
				$sql = "SELECT * FROM ms_tshirt WHERE featured = " . $featured . " ORDER BY tshirt_id DESC LIMIT " . $limit;
			}else if ($limit > 0 && $featured < 1){
				$sql = "SELECT * FROM ms_tshirt ORDER BY tshirt_id DESC LIMIT " . $limit;
			}else{
				$sql = "SELECT * FROM ms_tshirt ORDER BY tshirt_id DESC ";
			}

			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getBrand(){
			$sql = "SELECT * FROM ms_brand";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getProductsBrand($brand_id=0){
			
			$sql = "SELECT * FROM ms_tshirt WHERE brand_id = " . $brand_id . " ORDER BY tshirt_id DESC ";
			$query = $this->db->query($sql);
			return $query->result_array();
			
		}

		public function getBest(){
			$sql = "SELECT * FROM ms_tshirt WHERE best_seller=1 LIMIT 2";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getProductsDetail($tshirt_id){
			$sql = "SELECT * FROM ms_tshirt WHERE tshirt_id = " . $tshirt_id;
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function getTotalProducts(){
			$sql = "SELECT * FROM ms_tshirt ";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}
	}
 ?>