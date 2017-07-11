<?php 

include_once 'Model.php';
class Menu extends Model
{

	public $id_jenis;
	public $id_item;
	public $nama_item;
	public $harga;

	public function getDataMenu()
	{
		$query = $this->db->prepare("SELECT * FROM jenis_item ");
		$query -> execute();
		$data = $query->fetchAll();

		return $data;
	}

	public function setMenu($id_jenis,$id_item,$nama_item,$harga)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO (id_jenis,id_item,nama_item,harga) VALUES(:id_jenis, :id_item, :nama_item, :harga)");
		   $stmt->bindparam(":id_jenis",$id_jenis);
		   $stmt->bindparam(":id_item",$id_item);
		   $stmt->bindparam(":nama_item",$nama_item);
		   $stmt->bindparam(":harga",$harga);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
}


 ?>