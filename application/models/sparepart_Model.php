<?php 

/**
 * 
 */
 class sparepart_Model extends CI_Model
 {
 	public $nama_table = 'sparepart';
 	public $id = 'id_sparepart';
 	public $order = 'ASC';
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	function ambil_data(){
 		$this->db->order_by($this->id,$this->order);
 		return $this->db->get($this->nama_table)->result();
 	}
 	function tambah_data($data){
 		return $this->db->insert($this->nama_table, $data);
 	}
 	function hapus_data($id_sparepart){
 		$this->db->where($this->id,$id_sparepart);
 		$this->db->delete($this->nama_table);
 	}
 	function edit_data($id_sparepart,$data){
 		$this->db->where($this->id,$id_sparepart);
 		$this->db->update($this->nama_table, $data);
 	}
 	function ambil_data_id($id_sparepart){
 		$this->db->where($this->id,$id_sparepart);
 		return $this->db->get($this->nama_table)->row();
 	}
 	
 } ?>