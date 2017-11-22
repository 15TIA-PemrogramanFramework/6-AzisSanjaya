<?php 

/**
 * 
 */
 class pemilik extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('pemilik_Model');
 		
 	}
 	 	function index()
 	{
 		$data['pemilik']=$this->pemilik_Model->ambil_data();
 		$this->load->view('pemilik/pemilik_List',$data);
 	}
 	function tambah()
 	{
 		$data=array(
 			'nama_pemilik'=>set_value('nama_pemilik'),
 			'alamat_pemilik'=>set_value('alamat_pemilik'),
 			'nohp'=>set_value('nohp'),
 			'id_pemilik'=>set_value('id_pemilik'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('pemilik/Tambah_Aksi'),
 		);
 		$this->load->view('pemilik/pemilik_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'nama_pemilik'=>$this->input->post('nama_pemilik'),
 			'alamat_pemilik'=>$this->input->post('alamat_pemilik'),
 			'nohp'=>$this->input->post('nohp'),
 		);
 		$this->pemilik_Model->tambah_data($data);
 		redirect(site_url('pemilik'));
 	}
 	function hapus($ID)
 	{
 		$this->pemilik_Model->hapus_data($ID);
 		redirect(site_url('pemilik'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->pemilik_Model->ambil_data_id($ID);
 		$data=array(
 			'nama_pemilik'=>set_value('nama_pemilik',$mhs->nama_pemilik),
 			'alamat_pemilik'=>set_value('alamat_pemilik',$mhs->alamat_pemilik),
 			'nohp'=>set_value('nohp',$mhs->nohp),
 			'id_pemilik'=>set_value('id_pemilik',$mhs->id_pemilik),
 			'Button'=>'Edit',
 			'Action'=>site_url('pemilik/edit_aksi'),
 		);
 		$this->load->view('pemilik/pemilik_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'nama_pemilik'=>$this->input->post('nama_pemilik'),
 			'alamat_pemilik'=>$this->input->post('alamat_pemilik'),
 			'nohp'=>$this->input->post('nohp'),
 		);
 		$id_pemilik=$this->input->post('id_pemilik');
 		$this->pemilik_Model->edit_data($id_pemilik,$data);
 		redirect(site_url('pemilik'));
 	}

 }
 ?>