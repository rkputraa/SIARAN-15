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
		include_once 'template_admin/header.php';
		include_once 'template_admin/navigasi.php';
		include_once 'template_admin/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template_admin/footer.php';
	}
	
}


 ?>