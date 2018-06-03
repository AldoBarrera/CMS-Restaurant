<?php class Page
{	
	public $route = "./module-restaurant/controllers/restaurant.php";
	function __construct($page,$module)
	{
		if($page != null && $module != null)
		{
			$this->route="./module-".$module."/controllers/".$page.".php";
		}		
	}
	
	function loadPage()
	{
		return $this->route;
	}
	
	function includeFiles()
	{
		return $this->route;
	}	
}?> 