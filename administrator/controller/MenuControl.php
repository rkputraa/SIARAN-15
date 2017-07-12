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
		$id_jenis = $_POST['id_jenis'];
		$nama = $_POST['nama_item'];
		$harga = $_POST['harga'];
		$pesan = $mmenu->setMenu($id_jenis,$nama,$harga);
		return $pesan;
	}
	public function getDataUntukPerubahan()
	{
		$id = $_GET['id'];
		include_once 'model/Menu.php';
		include_once 'model/JenisMenu.php';
		$mbm = new Menu();
		$jm = new JenisMenu();
		$data['jenis_item'] = $mbm->ambilDataMenu($id);
		$data['jenis_menu'] = $jm->getDaftarJenisMenu();
		return $data;
	}

	public function updateDataMenu()
	{
		include_once 'model/Menu.php';
		$mbm = new Menu();
		$id_item = $_GET['id'];
		$nama = $_POST['nama_item'];
		$harga = $_POST['harga'];
		$id_jenis = $_POST['id_jenis'];
		$mbm -> updateDataMenu($id_item,$nama,$harga,$id_jenis);
		return $true;
	}

	public function hapusMenu()
	{
		include_once 'model/Menu.php';
		$mb= new Menu();
		$id_item = $_GET['id'];
		$mb->hapusMenu($id_item);
		
		return true;
	}


}

 ?>