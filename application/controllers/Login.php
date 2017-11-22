<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('CekLogin_Model');
	}

	public function index()
	{
		
		
		if(!$this->input->post())
		{
			$this->load->view('login view');
		}
		else
		{
			$cek_login=$this->CekLogin_Model->cek_login($this->input->post('Username'),$this->input->post('Password'));	
			
			if(!empty($cek_login))
			{
				$this->session->set_userdata('Username',$cek_login->Username);
				$this->session->set_userdata('Jabatan',$cek_login->Jabatan);
				$this->session->set_userdata('logined',true);
				redirect('home');
			}
			else 
			{
				$this->session->set_flashdata('Gagal', '<div class="alert alert-danger text-center">Gagal Login</div>');
				redirect("login");
			}
		}       
	} 
	
	public function logout()
	{
		$this->session->unset_userdata('logined');
		$this->session->unset_userdata('Username_Customer');
		$this->session->unset_userdata('Username_Petugas');
		redirect("login");
		session_destroy();
		
	} 
}
