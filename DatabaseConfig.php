<meta charset="utf8">
<?php 
	class OracleDatabase{
		public $con = null;
		public $menuArray = array();
		public $rowNumber = 0;
		public $colNumber = 0;

		function createConnection(){

			try{
				$con = new PDO("mysql:host=localhost; dbname=bob-agent-system","root", "");
				$con->query("SET NAMES utf8");
				
				$this->con = $con;

				$this->dataArrayGen("SELECT * FROM menu");
			}
			catch(PDOException $e){
				echo $e;
			}
		}
		function dataArrayGen($sql){
			$size = 0;
			$count=0;
			$dataArrays= array();
			$connection = $this->con;
			foreach ($connection -> query($sql) as $row) {
				$this->setRowNumber($this->getRowNumber()+1);
							
				$size = sizeof($row);
				 				
			}
			foreach ($connection -> query($sql) as $row) {
				// echo "row number : ".$this->getRowNumber()."<br>";
				// echo "row number : ".$this->getColNumber()."<br>";
				for($k=0; $k<$this->getColNumber(); $k++){
					$dataArrays[$count][$k] = $row[$k];
					// echo "row: ".$count." col: ".$k."::   ".$dataArrays[$count][$k]."<br>";
				}
				$count++;

				$this->setMenuArray($dataArrays);

			}
		}
		function getMenuArray(){
			return $this->menuArray;
		}
		function setMenuArray($menuArray){
			$this->menuArray = $menuArray;
		}
		function getRowNumber(){
			return $this->rowNumber;
		}
		function setRowNumber($rowNumber){
			$this->rowNumber = $rowNumber;
		}
		function getColNumber(){
			return $this->colNumber;
		}
		function setColNumber($colNumber){
			$this->colNumber = $colNumber;
		}
	
	}
	$odb = new OracleDatabase();
	$odb->createConnection();
	// header("location: index.php");
?>