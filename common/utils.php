<?php
class Utils {
    public static function importCurrentFiles() {
		include("./module-".$_SESSION['module']."/models/".$_SESSION['page'].".php");
        require("./module-".$_SESSION['module']."/views/".$_SESSION['page'].".php");
    }
	public static function GetCurrentView($form) {
				
		return "./module-".$_SESSION['module']."/templates/".$form.".php";
    }
	
	public static function GetCurrentControler($form) {
				
		return "./module-".$_SESSION['module']."/templates/".$form.".php";    
    }
	
	public static function GetCurrentImagePath($id,$imageIndex) {
				
		return "./module-".$_SESSION['module']."/images/".$id."-image".$imageIndex.".jpg";
	}
	
	public static function CalculateStarts($quality,$start) 
	{		
	    $hasQuality = true;		
	    if ($quality < $start)
		 $hasQuality=false;
		return $hasQuality;
	}
	
	public static function Login($start) 
	{	
	    $_SESSION['startSelected']	= $start;

	}	
}
?>