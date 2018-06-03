<?php
require_once(PATH_CONF.'config.php');
require_once(PATH_UTILS.'DB-abstract-model.php');

//require_once(PATH_CLASS.'Noticias_map.php');
class RestaurantModel extends DBAbstractModel 
{
	
			
		function __construct() 
		{	
			$this->links=$this->GetConexion();
			$this->modelName='restaurants';
		}
		
		function GetCommentsByRestaurantId($id)
		{
			$sql="SELECT * FROM comments where restaurant_id='".$id."'"; 
			$gsent = $this->ExecuteQuery($sql);
			return $gsent->fetchAll();
			
        }	
		
		
		function GetAvgStars($id)
		{
			$sql="SELECT ROUND(avg(comments.quality),0) as stars FROM comments INNER JOIN restaurants on comments.restaurant_id = restaurants.id where restaurants.id='".$id."'"; 
			$result= $this->ExecuteQuery($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				return $row;		
             }
			
        }	
		
 
		
		
		
		function updateStars($quality)
		{
			 $sql = "Update ".$this->tabla." set quality ='".$quality."'";
			 $this->ExecuteQuery($sql);
		}
		
}



  

?>
