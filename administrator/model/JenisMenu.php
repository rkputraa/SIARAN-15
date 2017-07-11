<?php 

/**
* 
*/

include_once 'Model.php';
class JenisMenu extends Model
{

		public $id_jenis;
		public $nama_jenis;
	
	public function getDaftarJenisMenu()
	{
		$query = $this->db->prepare("SELECT * FROM jenis_menu");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>