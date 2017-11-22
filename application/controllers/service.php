<?php 

/**
 * 
 */
 class service extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mobil_Model');
 		$this->load->model('sparepart_Model');
 		$this->load->model('service_Model');
 		
 	}
 	 	function index()
 	{
 		$data['service']=$this->service_Model->ambil_data();
 		$this->load->view('service/service_List',$data);
 	}
 	function tambah()
 	{
 		$data=array(
 			'id_service'=>set_value('id_service'),
 			'id_mobil'=>set_value('id_mobil'),
 			'id_sparepart'=>set_value('id_sparepart'),
 			'mobil' => $this->mobil_Model->ambil_data(),
 			'sparepart' => $this->sparepart_Model->ambil_data(),
 			'Button'=>'Tambah',
 			'Action'=>site_url('service/Tambah_Aksi'),
 		);
 		$this->load->view('service/service_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'id_mobil'=>$this->input->post('id_mobil'),
 			'id_sparepart'=>$this->input->post('id_sparepart'),
 			'tgl_masuk'=> tanggal(),
 		);
 		$this->service_Model->tambah_data($data);
 		redirect(site_url('service'));
 	}
 	function hapus($ID)
 	{
 		$this->service_Model->hapus_data($ID);
 		redirect(site_url('service'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->service_Model->ambil_data_id($ID);
 		$data=array(
 			'id_service'=>set_value('id_service',$mhs->id_service),
 			'id_mobil'=>set_value('id_mobil',$mhs->id_mobil),
 			'id_sparepart'=>set_value('id_sparepart',$mhs->id_sparepart),
 			'mobil' => $this->mobil_Model->ambil_data(),
 			'sparepart' => $this->sparepart_Model->ambil_data(),
 			'Button'=>'Edit',
 			'Action'=>site_url('service/edit_aksi'),
 		);
 		$this->load->view('service/service_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'id_mobil'=>$this->input->post('id_mobil'),
 			'id_sparepart'=>$this->input->post('id_sparepart'),
 		);
 		$id_service = $this->input->post('id_service');
 		$this->service_Model->edit_data($id_service,$data);
 		redirect(site_url('service'));
 	}

 }
 ?>