<?php

Class Functions{
	
	public function __construct() {
		try{
			
			//$this->pdo = new PDO('mysql:host=localhost;dbname=pr;', 'root');
			$this->pdo = new PDO('mysql:host=sql.gry.nazwa.pl;dbname=gry_7; port=3307', 'gry_7', 'JohnTravolta05');
			$this->pdo -> query ('SET NAMES utf8');
			$this->pdo -> query ('SET CHARACTER_SET utf8_unicode_ci');
					
		}
		catch(PDOException $e){
			echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
			die;
		}  
	}
	
}

function clear($string) {
	$string = trim($string);
	$string = htmlspecialchars($string);
	$string = stripslashes($string);
	//$string = mysql_real_escape_string($string);
return $string;
}

function islogged(){

	if(isset($_SESSION['email']) && $_SESSION['email']!='') return 1;	
	else return 0;

}


?>
