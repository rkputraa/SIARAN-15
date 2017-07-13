<?php 
require_once 'View.php';
/**
* 
*/
class OlahTransaksiUI extends View
{
		public function lihatFormTransaksi()
	{
		include_once 'controller/KasirControl.php';
		$bm = new KasirControl();
		$daftar_menu = $bm->getDaftarMenu();
		include_once 'pages/formtrans.php';
		$this->end();
	}
}
?>