<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template_manajer/header.php';
		include_once 'template_manajer/navigasi.php';
		include_once 'template_manajer/sidebar.php';
		// include_once 'content.php';
		
	}

	public function end()
	{
		include 'template_manajer/footer.php';
	}
	
}


 ?>