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
		$daftar_menu = $men->getDaftarMenu();
		return $daftar_menu;
	}
}
?>