<?php 

/**
 * 
 */
 class mobil extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mobil_Model');
 		$this->load->model('pemilik_Model');
 		
 	}
 	 	function index()
 	{
 		$data['mobil']=$this->mobil_Model->ambil_data();
 		$this->load->view('mobil/mobil_List',$data);
 	}
 	function tambah()
 	{
 		$data=array(
 			'id_pemilik'=>set_value('id_pemilik'),
 			'merek'=>set_value('merek'),
 			'noplat'=>set_value('noplat'),
 			'id_mobil'=>set_value('id_mobil'),
 			'pemilik' => $this->pemilik_Model->ambil_data(),
 			'Button'=>'Tambah',
 			'Action'=>site_url('mobil/Tambah_Aksi'),
 		);
 		$this->load->view('mobil/mobil_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'id_pemilik'=>$this->input->post('id_pemilik'),
 			'merek'=>$this->input->post('merek'),
 			'noplat'=>$this->input->post('noplat'),
 		);
 		$this->mobil_Model->tambah_data($data);
 		redirect(site_url('mobil'));
 	}
 	function hapus($ID)
 	{
 		$this->mobil_Model->hapus_data($ID);
 		redirect(site_url('mobil'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->mobil_Model->ambil_data_id($ID);
 		$data=array(
 			'id_pemilik'=>set_value('id_pemilik',$mhs->id_pemilik),
 			'merek'=>set_value('merek',$mhs->merek),
 			'noplat'=>set_value('noplat',$mhs->noplat),
 			'id_mobil'=>set_value('id_mobil',$mhs->id_mobil),
 			'pemilik' => $this->pemilik_Model->ambil_data(),
 			'Button'=>'Edit',
 			'Action'=>site_url('mobil/edit_aksi'),
 		);
 		$this->load->view('mobil/mobil_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'id_pemilik'=>$this->input->post('id_pemilik'),
 			'merek'=>$this->input->post('merek'),
 			'noplat'=>$this->input->post('noplat'),
 		);
 		$id_mobil=$this->input->post('id_mobil');
 		$this->mobil_Model->edit_data($id_mobil,$data);
 		redirect(site_url('mobil'));
 	}

 }
 ?>