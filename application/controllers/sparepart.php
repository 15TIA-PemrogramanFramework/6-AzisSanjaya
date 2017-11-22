<?php 

/**
 * 
 */
 class sparepart extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('sparepart_Model');
 		
 	}
 	 	function index()
 	{
 		$data['sparepart']=$this->sparepart_Model->ambil_data();
 		$this->load->view('sparepart/sparepart_List',$data);
 	}
 	function tambah()
 	{
 		$data=array(
 			'nama_sparepart'=>set_value('nama_sparepart'),
 			'harga'=>set_value('harga'),
 			'id_sparepart'=>set_value('id_sparepart'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('sparepart/Tambah_Aksi'),
 		);
 		$this->load->view('sparepart/sparepart_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'nama_sparepart'=>$this->input->post('nama_sparepart'),
 			'harga'=>$this->input->post('harga'),
 		);
 		$this->sparepart_Model->tambah_data($data);
 		redirect(site_url('sparepart'));
 	}
 	function hapus($ID)
 	{
 		$this->sparepart_Model->hapus_data($ID);
 		redirect(site_url('sparepart'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->sparepart_Model->ambil_data_id($ID);
 		$data=array(
 			'nama_sparepart'=>set_value('nama_sparepart',$mhs->nama_sparepart),
 			'harga'=>set_value('harga',$mhs->harga),
 			'id_sparepart'=>set_value('id_sparepart',$mhs->id_sparepart),
 			'Button'=>'Edit',
 			'Action'=>site_url('sparepart/edit_aksi'),
 		);
 		$this->load->view('sparepart/sparepart_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'nama_sparepart'=>$this->input->post('nama_sparepart'),
 			'harga'=>$this->input->post('harga'),
 		);
 		$id_sparepart=$this->input->post('id_sparepart');
 		$this->sparepart_Model->edit_data($id_sparepart,$data);
 		redirect(site_url('sparepart'));
 	}

 }
 ?>