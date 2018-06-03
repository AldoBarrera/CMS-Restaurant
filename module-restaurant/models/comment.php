<?php
require_once(PATH_CONF.'config.php');
require_once(PATH_UTILS.'DB-abstract-model.php');

//require_once(PATH_CLASS.'Noticias_map.php');
class CommentModel extends DBAbstractModel 
{
	
			
		function __construct() 
		{	
			$this->links=$this->GetConexion();
			$this->modelName='comments';
		}	
		
		function GetCommentsByRestaurantId($id)
		{
			$sql="SELECT * FROM ".$this->modelName." where restaurant_id='".$id."'"; 
			$gsent = $this->ExecuteQuery($sql);
			return $gsent->fetchAll();
			
        }	
		
}



  

?>
