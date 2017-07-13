<?php 
/**
* 
*/
include_once 'Controller.php';
class KasirControl extends Controller
{

	public function getDaftarMenu()
	{
		include_once 'model/DaftarMenu.php';
		$men  = new DaftarMenu();
		$list_menu = $men->getDaftarMenu();
		return $list_menu;
	}

	public function ()
	{
		include_once 'model/JenisMenu.php';
		$jm  = new JenisMenu();
		$daftar_jenismenu = $jm->getDaftarJenisMenu();
		return $daftar_jenismenu;
	}
}
?>