<?php 
/**
 * 
 */
 class CekLogin_Model extends CI_Model
 {
 	
 	public $nama_table = 'login';
 	function __construct()
 	{
 		parent::__construct();

 	}
 	function cek_login($username,$password){
 		$this->db->where('Username', $username);
 		$this->db->where('Password', $password);
 		return $this->db->get($this->nama_table)->row(); 	
 	}
 	
 } ?>