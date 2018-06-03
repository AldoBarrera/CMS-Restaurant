<?php
require(PATH_UTILS.'utils.php');
require(PATH_UTILS.'base-controller.php');
Utils::importCurrentFiles();
class RestaurantController extends BaseController 
{       
 
		function __construct() {	
			$this->model = new RestaurantModel();
			$this->view = new RestaurantView();
			$this->data = $this->HelperData();
			$this->SetActions();
			$this->SelectAction();			
		}
		
		function Display(){		
		    parent::Display();

			$this->resultData["comments"] = $this->model->GetCommentsByRestaurantId($this->data['id']);
			$this->resultData["totalComments"]=sizeof($this->resultData["comments"]);
		}
		
		function DisplayCustom($accionEvent){
			switch ($accionEvent) 
			{					
				case 'SearchCategory': 
				   
		   			$this->displayByCategory();
					$this->view->ReturnView($this->accionView,$this->resultData);
				break;
				default:
				    $this->displayAll();
					$this->view->ReturnView($this->accionView,$this->resultData);
			}
		}
		
		function DisplayByCategory()
		{  
		   if (empty($this->data['category'])) 
		      $this->data['category']="pub";
		  
		   $whereClause = array();
		   $whereClause["category"] = $this->data['category'];
		   $this->resultData["modelData"] = $this->model->GetSearch($whereClause);
		   
		   $additionalData = array();
		   $additionalData["row_count"] = sizeof($this->resultData["modelData"]);
		   $additionalData["category"] = $this->data['category'];
		   $this->resultData["additionalData"] = $additionalData ;	  	  
		}		
}
$manager=new RestaurantController();
?>