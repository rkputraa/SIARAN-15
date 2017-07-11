<?php 
/**
* 
*/
include_once 'Controller.php';
class SiaranManager extends Controller
{
	public function setSupplier()
	{
		include_once 'model/Supplier.php';
		$msupplier = new Supplier();
		$id_supplier = $_POST['id_supplier'];
		$nama_supplier = $_POST['nama_supplier'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		$id_user = $_POST['id_user'];
		$pesan = $msupplier->setSupplier($id_supplier,$nama_supplier,$alamat,$telepon,$id_user);
		return $pesan;
	}
	public function getDataUntukPerubahan()
	{
		$id= $_GET['id'];
		include_once 'model/Supplier.php';
		$mb= new Supplier();
		$data['berita']=$mb->ambilSupplierSpesifik($id);
		return $data;
	}
}
?>