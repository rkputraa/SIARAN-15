<?php 

/**
* 
*/

include_once 'Model.php';
class Supplier extends Model
{
	public $id_supplier;
	public $nama_supplier;
	public $alamat;
	public $telepon;
	public $id_user;
	
	public function setSupplier ($id_supplier,$nama_supplier,$alamat,$telepon,$id_user){
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO supplier(id_supplier,nama_supplier,alamat,telepon,id_user) VALUES(:id_supplier, :nama_supplier, :alamat, :telepon, :id_user)");
		   $stmt->bindparam(":id_supplier",$id_supplier);
		   $stmt->bindparam(":nama_supplier",$nama_supplier);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":telepon",$telepon);
		   $stmt->bindparam(":id_user",$id_user);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	public function ambilSupplier()
	{
		$query = $this->db->prepare("SELECT * FROM supplier");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}
	public function ambilSupplierSpesifik($id)
	{
	try
	{
		$stmt = $this->db->prepare("SELECT * FROM supplier WHERE id_supplier=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}
	catch (PDOException $e){
		echo $e->getMessege();
	}
	}
	public function ubahSupplier($id_supplier,$nama_supplier,$alamat,$telepon)
	{
		
		
		try {
			$stmt = $this->db->prepare("UPDATE supplier SET id_supplier=:id_supplier, nama_supplier=:nama_supplier, alamat=:alamat, telepon=:telepon WHERE id_supplier=:id_supplier");
		   $stmt->bindparam(":id_supplier",$id_supplier);
		   $stmt->bindparam(":nama_supplier",$nama_supplier);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":telepon",$telepon);
			$stmt->execute();
			echo "Supplier berhasil di update!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}
	public function hapusSupplier($id_supplier)
	{
		
		
		try {
			$stmt = $this->db->prepare("DELETE FROM supplier WHERE id_supplier=:id_supplier");
		   $stmt->bindparam(":id_supplier",$id_supplier);
			$stmt->execute();
			echo "Berhasil diDelete";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}
}
?>