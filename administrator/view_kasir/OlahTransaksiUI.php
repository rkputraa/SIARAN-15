<?php 
require_once 'View.php';
/**
* 
*/
class OlahTransaksiUI extends View
{

	public function lihatFormTransaksi()
	{
		include_once 'pages/formtransaksi.php';
		$this->end();
	}
	
	public function lihatDaftarMenu()
	{
		include_once 'controller/KasirControl.php';
		$bm = new KasirControl();
		$list_menu = $bm->getDaftarMenu();
		
		$this->end();
	}


}
?>