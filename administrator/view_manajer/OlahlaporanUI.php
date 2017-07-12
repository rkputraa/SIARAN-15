<?php 
require_once "View.php";

/**
* 
*/
class OlahlaporanUI extends View
{

	public function tampilLaporan()
	{
		include_once 'model/Pesanan.php';
		$lap = new Pesanan();
		$isi_lap = $lap->getDataLaporan();
		include_once 'pages/listlaporan.php';
		$this->end();
	}
}

 ?>