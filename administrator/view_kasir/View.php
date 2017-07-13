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
		include_once 'template_kasir/header.php';
		include_once 'template_kasir/navigasi.php';
		include_once 'template_kasir/sidebar.php';
		// include_once 'content.php';
		
	}

	public function end()
	{
		include 'template_kasir/footer.php';
	}
	
}


 ?>