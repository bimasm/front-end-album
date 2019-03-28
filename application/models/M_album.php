<?php 
 
class M_album extends CI_Model{

	function add_album($nama_album,$keterangan,$owner){
		return $this->db->query("INSERT INTO `album`(`album_id`, `nama_album`, `keterangan`, `owner`) VALUES ('','$nama_album','$keterangan','$owner')");
	}
}