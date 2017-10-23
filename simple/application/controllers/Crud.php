<?php 
	
	class Crud extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('m_data');
		}

		public function index(){
			$data['user'] = $this->m_data->tampil_data()->result();
			$this->load->view('v_tampil',$data);
		}

		public function tambah(){
			$this->load->view('v_input');
		}

		public function tambah_aksi(){
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
 
			$data = array(
						'nama' => $nama,
						'alamat' => $alamat,
						'pekerjaan' => $pekerjaan
					);

			$this->m_data->input_data($data,'user');
			redirect('crud/');
		}

		public function edit($id){
			$where = array('id' => $id);
			$data_edit = $this->m_data->edit_data($where,'user');
			$data['user'] = $data_edit->result();
			$this->load->view('v_edit',$data);
		}

		function update(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
 
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'pekerjaan' => $pekerjaan
			);
 
			$where = array(
				'id' => $id
			);
 
			$this->m_data->update_data($where,$data,'user');
			redirect('crud/');
		}

		function hapus($id){
			$where = array('id' => $id);
			$this->m_data->hapus_data($where,'user');
			redirect('crud/index');
		}

	}	

 ?>