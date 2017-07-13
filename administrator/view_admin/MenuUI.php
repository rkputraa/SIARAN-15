<?php 

require_once	'View.php';


class MenuUI extends View
{

	public function tampilMenu()
	{
		include_once 'model/Menu.php';

		$mn = new Menu();

		$isi_menu = $mn->getDataMenu();

		include_once 'pages/listmenu.php';
		$this->end();
	}

	public function tampilDetailMenu()
	{
		
		include_once 'model/Menu.php';

		$mn = new Menu();

		$isi_detailmenu = $mn->getDataDetailMenu($_GET['id']);

		include_once 'pages/detailmenu.php';
		$this->end();
	}

	public function tampilFormMenu()
	{
		 include_once 'controller/MenuControl.php';

		 $mm = new MenuControl();

		 $daftar_jenismenu = $mm->getDaftarJenisMenu();

		 include_once 'pages/formmenu.php';
		 $this->end();

	}
	public function insertMenu()
	{
		include_once 'controller/MenuControl.php';

		$mm = new MenuControl();
		$pesan = $mm->setMenu();

		include_once'pages/pesansuksesmenu.php';
		$this->end();
	}
	
	public function tampilFormEdit()
	{
		include_once 'controller/MenuControl.php';

		$mm = new MenuControl();
		$data = $mm->getDataUntukPerubahan();
		$data_menu = $data['jenis_item'];
		$data_jenismenu = $data['jenis_menu'];
		include_once 'pages/formeditmenu.php';
		$this->end();

	}

	public function editDataMenu()
	{
		include_once 'controller/MenuControl.php';

		$mm = new MenuControl();
		$mm->updateDataMenu();
		include_once 'pages/pesansuksesmenu.php';
		$this->end();
	}

	public function aksiHapusMenu()
	{
		include_once 'controller/MenuControl.php';
		$bm= new MenuControl();
		$bm->hapusMenu();
		include_once 'pages/pesansukses.php';
		$this->end();
	}


}





 ?>
