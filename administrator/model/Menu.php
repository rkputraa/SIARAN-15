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

public function getDataDetailMenu($id)
	{
		$query = $this->db->prepare("SELECT jenis_item.*, jenis_menu.* FROM jenis_item, jenis_menu WHERE jenis_item.id_jenis=jenis_menu.id_jenis and id_item=:id_item");
		$query->bindparam(":id_item",$id);
		$query -> execute();
		$data = $query->fetchAll();

		return $data;
	}

	public function setMenu($id_jenis,$nama_item,$harga)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO jenis_item(id_jenis,nama_item,harga) VALUES(:id_jenis, :nama_item, :harga)");
		   $stmt->bindparam(":id_jenis",$id_jenis);
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

	public function ambilDataMenu($id)
	{

try {
	$stmt = $this->db->prepare("SELECT * FROM jenis_item WHERE id_item=:id");
	$stmt->bindparam(":id",$id);
	$stmt->execute();
	$data = $stmt->fetch();
	return $data;
}
catch(PDOException $e) {
	echo $e->getMessage(); 
	return false;
}
	}

	public function updateDataMenu($id_item,$nama,$harga,$id_jenis)
	{
//mengambil data menu
try {
	$stmt = $this->db->prepare("UPDATE jenis_item SET nama_item=:nama_item, harga=:harga, id_jenis=:jenis_menu WHERE id_item=:id_item");
	$stmt->bindparam(":id_item",$id_item);
	$stmt->bindparam(":jenis_menu",$id_jenis);
	$stmt->bindparam(":harga",$harga);
	$stmt->bindparam(":nama_item",$nama);
	$stmt->execute();
	//echo "Congratulation, U Can change it Dude";
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
	}

	public function hapusMenu($id_item)
	{
		
		
		try {
			$stmt = $this->db->prepare("DELETE FROM jenis_item WHERE id_item=:id_item");
		   $stmt->bindparam(":id_item",$id_item);
			$stmt->execute();
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}
}


 ?>