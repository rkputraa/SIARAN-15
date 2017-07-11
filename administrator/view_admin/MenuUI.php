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

		include_once'pages/pesansukses.php';
		$this->end();
	}
	
}





 ?>
