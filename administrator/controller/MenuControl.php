<?php 
/**
* 
*/
include_once 'Controller.php';
class MenuControl extends Controller
{
	
	public function getDaftarJenisMenu()
	{
		include_once 'model/JenisMenu.php';
		$jm  = new JenisMenu();
		$daftar_jenismenu = $jm->getDaftarJenisMenu();
		return $daftar_jenismenu;
	}
	public function setMenu()
	{
		include_once 'model/Menu.php';
		$mmenu = new Menu();
		$id_jenis = $_POST['jenismenu'];
		$id_item = $_POST['id_item'];
		$nama = $_POST['nama_item'];
		$harga = $_POST['harga'];
		$pesan = $mmenu->setMenu($id_jenis,$id_item,$nama,$harga);
		return $pesan;
	}

}
 ?>