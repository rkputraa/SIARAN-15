<?php 
/**
* 
*/
include_once 'Model.php';
class DaftarMenu extends Model
{
	public $id_item;
	public $nama_item;
	public function getDaftarMenu()
	{
		$query = $this->db->prepare("SELECT * FROM jenis_item");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
}
?>