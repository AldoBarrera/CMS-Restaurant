<?php

class DBAbstractModel {


        private $db_host = DB_HOST;
		private $db_user = DB_USER;
		private $db_pass = DB_PASWORD;
		private $db_name = DB_DATA_BASE;
		public $modelName;
		public $links;
		
		protected function __construct()
		{
    	    $this->links=$this->GetConexion();
		}
    	
		protected function GetConexion($db_name=DB_DATA_BASE,$db_host=DB_HOST,$db_user = DB_USER,$db_pass = DB_PASWORD) {
			try { 
				$this->db_name=$db_name;
				$this->db_host=$db_host;
				$this->db_user=$db_user;
				$this->db_pass=$db_pass;
				$db = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset=utf8mb4', $this->db_user, $this->db_pass);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $db;        
			} catch ( Exception $e ) {
				echo $e->getMessage ();
				exit ();
			}       
    	}

		public function ExecuteQuery($sql)
		{
			$gsent = $this->links->prepare($sql);
			$gsent->execute();
			return $gsent;
		}
		public function GetTotalRows($data)
		{    			
			return $data->rowCount();
		} 
		
		public function GetTotalRowsFromQuery($sql)
		{
			return $this->GetTotalRows($this->ExecuteQuery($sql));
		}
		
		public function GetTotalRowsFromField($field,$value)
		{
			$sql="SELECT * FROM ".$this->modelName." where ".$field."='".$value."'"; 
			return $this->GetTotalRows($this->ExecuteQuery($sql));
		}
		 
		public function GetRow($tabla,$campo,$valor)
		{
		    $sql="SELECT * FROM ".$tabla." where ".$campo."='".$valor."'"; 
			return $this->ExecuteQuery($sql); 
        }	

		public function GetId($id)
		{
			$sql="SELECT * FROM ".$this->modelName." where id='".$id."'"; 
			$gsent = $this->ExecuteQuery($sql);
			return $gsent->fetch(PDO::FETCH_ASSOC);
        }	
		public function GetAll()
		{
			$sql="SELECT * FROM ".$this->modelName;
			$gsent = $this->ExecuteQuery($sql);

			return $gsent->fetchAll();
        }	
		
		function Insert($data=array())
		{
			
			$sql = "INSERT INTO ".$this->modelName." (";
			$i=0;
			foreach ($data as $key => $value) {
				$i++;
				if($key != "accion_event" &&  $key != "accion_view" &&  $key != "module" &&  $key != "page" ) {
					
					if ($i == count($data)-4)
						$sql .=$key;
					else
						$sql .=$key.",";
				}			
			}				
			$sql .=") VALUES (";
			$i=0;
			foreach ($data as $key => $value) {
				$i++;
				if($key != "accion_event" &&  $key != "accion_view" &&  $key != "module" &&  $key != "page" ) {
					
					if ($i == count($data)-4)
						$sql .="'".$value."'";
					else
						$sql .="'".$value."',";
				}
				
			}
			$sql .=")";
			$this->ExecuteQuery($sql);
			return $data;	     
        }
		
		function Update($data=array(),$id)
		{
			
			$sql = "UPDATE ".$this->modelName." SET ";
			$i=0;
			foreach ($data as $key => $value) {
				$i++;
				if($key != "accion_event" &&  $key != "accion_view" &&  $key != "module" &&  $key != "page" ) {
					
					if ($i == count($data))
						$sql .=$key."=".$value;
					else
						$sql .=$key."=".$value.",";
				}			
			}				
			$sql .=" where id=".$id;
			$this->ExecuteQuery($sql);
			return $data;	     
        }
		
		function GetSearch($whereClauseDictionary)
		{
			$whereClause = "";
			foreach($whereClauseDictionary as $key => $value) {
				$whereClause.=$key;
				$whereClause.="='";
				$whereClause.=$value;
				$whereClause.="'";
			}

			$sql="SELECT * FROM ".$this->modelName." where ".$whereClause; 
			$gsent = $this->ExecuteQuery($sql);	
			return $gsent->fetchAll(); 		
		}


}

?>