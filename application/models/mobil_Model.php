<?php 

/**
 * 
 */
 class mobil_Model extends CI_Model
 {
 	public $nama_table = 'mobil';
 	public $id = 'id_mobil';
 	public $order = 'ASC';
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	function ambil_data(){
 		$this->db->distinct();
 		$this->db->select('m.id_mobil , m.id_pemilik, m.merek, m.noplat, p.nama_pemilik ');
 		$this->db->from('mobil m');
 		$this->db->join('pemilik p', 'p.id_pemilik = m.id_pemilik');
 		return $this->db->get($this->nama_table)->result();
 	}
 	function tambah_data($data){
 		return $this->db->insert($this->nama_table, $data);
 	}
 	function hapus_data($id_mobil){
 		$this->db->where($this->id,$id_mobil);
 		$this->db->delete($this->nama_table);
 	}
 	function edit_data($id_mobil,$data){
 		$this->db->where($this->id,$id_mobil);
 		$this->db->update($this->nama_table, $data);
 	}
 	function ambil_data_id($id_mobil){
 		$this->db->where($this->id,$id_mobil);
 		return $this->db->get($this->nama_table)->row();
 	}
 	
 } ?>