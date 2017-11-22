<?php 

/**
 * 
 */
 class user extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('User_Model');
 		
 	}
 	 	function index()
 	{
 		$data['user']=$this->User_Model->ambil_data();
 		$this->load->view('user/user_List',$data);
 	}
 	function tambah()
 	{
 		$data=array(
 			'Nama'=>set_value('Nama'),
 			'Username'=>set_value('Username'),
 			'Password'=>set_value('Password'),
 			'Jabatan'=>set_value('Jabatan'),
 			'Button'=>'Tambah',
 			'Action'=>site_url('user/Tambah_Aksi'),
 		);
 		$this->load->view('user/user_Form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'Nama'=>$this->input->post('Nama'),
 			'Username'=>$this->input->post('Username'),
 			'Password'=>$this->input->post('Password'),
 			'Jabatan'=>$this->input->post('Jabatan'),
 		);
 		$this->User_Model->tambah_data($data);
 		redirect(site_url('user'));
 	}
 	function hapus($ID)
 	{
 		$this->User_Model->hapus_data($ID);
 		redirect(site_url('user'));
 	}
 	function edit($ID)
 	{
 		$mhs=$this->user_Model->ambil_data_id($ID);
 		$data=array(
 			'Nama'=>set_value('Nama',$mhs->Nama),
 			'Username'=>set_value('Username',$mhs->Username),
 			'Password'=>set_value('Password',$mhs->Password),
 			'Button'=>'Edit',
 			'Action'=>site_url('user/edit_aksi'),
 		);
 		$this->load->view('user/user_Form',$data);
 	}
 	function edit_aksi()
 	{
 		$data=array(
 			'Nama'=>$this->input->post('Nama'),
 			'Username'=>$this->input->post('Username'),
 			'Password'=>$this->input->post('Password'),
 			
 		);
 		$Username=$this->input->post('Username');
 		$this->User_Model->edit_data($Username,$data);
 		redirect(site_url('user'));
 	}

 }
 ?>