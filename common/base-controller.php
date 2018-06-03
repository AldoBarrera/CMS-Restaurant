<?php
require_once(PATH_UTILS.'base-view.php');
class BaseController
{       public $accionEvent;
		public $data;
		public $resultData;
		public $model;
		public $view ;
		
		
		function SetActions(){
			if (empty($this->data['accion_event']))
				$this->accionEvent='displayAll';
			else
				$this->accionEvent=$this->data['accion_event'];

			if (empty($this->data['accion_view']))
				$this->accionView='list';
			else
				$this->accionView=$this->data['accion_view'];			
		}
		function SelectAction(){		
			switch ($this->accionEvent) 
			{					
				case 'displayProfile': 
				   
		   			$this->Display();
					$this->view->ReturnView($this->accionView,$this->resultData);
				break;
				case 'displayAll': 
		   			$this->DisplayAll();					
					$this->view->ReturnView($this->accionView,$this->resultData);
				break;					
				case 'insert': 
				    try 
						{
							$this->Insert($this->data);					
							$this->view->ReturnView($this->accionView,$this->resultData);
						} 
						catch (PDOException $e) 
						{
                            echo $e->errorInfo[1];
							exit;
						}
		   			
				break;				
				default:
				    $this->DisplayCustom($this->accionEvent);
			}
		}
		
		function DisplayCustom($accionEvent){
			$this->displayAll();
			$this->view->ReturnView($this->accionView,$this->resultData);
		}
		
		function Insert(){		
			$this->resultData = $this->model->insert($this->data);	
		}
		
		function Display(){		
			$this->resultData = $this->model->GetId($this->data['id']);
		}
		
		function DisplayAll(){		
			$this->resultData=$this->model->GetAll();   
		}
		
		function HelperData() 
		{
			$user_data = array();
			$str = '';
			if($_POST) {	
				foreach ($_POST as $key => $value){		   
					$user_data[$key] = $value;
				}
			} 
			if($_GET) {
	        	foreach ($_GET as $key => $value){		   
					$user_data[$key] = $value;
				}				 
			}
	    	return $user_data;
        }
}

?>