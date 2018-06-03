<?php
require(PATH_UTILS.'utils.php');
require(PATH_UTILS.'base-controller.php');
require('./module-restaurant/models/restaurant.php');
Utils::importCurrentFiles();
class CommentController extends BaseController 
{       
 
		function __construct() {	

			$this->model = new CommentModel();
			$this->modelRestaurant = new RestaurantModel();
			$this->view = new CommentView();
			$this->data = $this->HelperData();
			$this->SetActions();
			$this->SelectAction();			

		}
		
		function Insert(){	

		    parent::Insert();
			
			$avgStarts = 0;
			$this->resultData["comments"] = $this->model->GetCommentsByRestaurantId($this->data['restaurant_id']);
			
			$this->resultData["totalComments"]=sizeof($this->resultData["comments"]);
			foreach ($this->resultData["comments"] as $comments)
			  $avgStarts = $avgStarts + intval($comments["quality"]);
			$this->resultData["totalComments"]=sizeof($this->resultData["comments"]);
			$this->resultData["stars"]=$avgStarts/(intval($this->resultData["totalComments"]));
			$dataToUpdate['quality'] = $this->resultData["stars"];
			$this->modelRestaurant->Update($dataToUpdate, $this->data['restaurant_id']);
		}
		
		
		
}
$manager=new CommentController();
?>