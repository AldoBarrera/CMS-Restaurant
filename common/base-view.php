<?php

class BaseView
{
	function GetTemplate($form='get') 
	{	$file = Utils::GetCurrentView($form);
		$template = $file;
		return $template;
	}
	function ReturnView($view, $data) 
	{	    
		$html = $this->GetTemplate($view);
		include($html);
	}
	
}
?>
