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
		include_once 'template_gudang/header.php';
		include_once 'template_gudang/navigasi.php';
		include_once 'template_gudang/sidebar.php';
		// include_once 'content.php';
		
	}

	public function end()
	{
		include 'template_gudang/footer.php';
	}
	
}


 ?>