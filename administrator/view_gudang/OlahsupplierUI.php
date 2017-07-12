<?php 
require_once "View.php";

/**
* 
*/
class OlahsupplierUI extends View
{
	public function tampilFormSupplier()
	{
		include_once 'pages/formtbhsup.php';
		$this->end();
	}

	public function inputSupplier()
	{
		include_once 'controller/SiaranManager.php';
		$bm = new SiaranManager();
		$pesan = $bm->setSupplier();
		include_once 'pages/pesansukses.php';
		$this->end();
	}
	public function tampilSupplier()
	{
		include_once 'model/Supplier.php';
		$sup = new Supplier();
		$isi_sup = $sup->ambilSupplier();
		include_once 'pages/listsupplier.php';
		$this->end();
	}
	public function tampilFormEdit()
	{
		include_once 'controller/SiaranManager.php';
		$bm = new SiaranManager();
		$data = $bm->getDataUntukPerubahan();
		include_once 'pages/formeditsupplier.php';
		$this->end();
	}
	public function aksiUbahSupplier()
	{
		include_once 'controller/SiaranManager.php';
		$bm= new SiaranManager();
		$bm->ubahSupplier();
		// include_once 'pages/pesansukses.php';
		$this->end();
	}
}

 ?>