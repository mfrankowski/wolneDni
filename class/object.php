<?php

class Object {

	public function load_module() {
		switch($_GET['name']) {
			case 'add': $this->add_object(); break;

		}
	}	 

	
	public function add_object(){
		global $tpl, $functions;
		
		$values['status'] = 'przed';
		$values['categories'] = $this->categories();
		
		if($_SESSION['type'] == 'firma'){
		
			if($_POST['action'] == 'Dodaj'){
				
				$name = $_POST['name'];
				$street = $_POST['street'];
				$city = $_POST['city'];
				$postal = $_POST['postal'];
				$description = $_POST['description'];
				$category = $_POST['category'];
				$coords_h = $_POST['coords_h'];
				$coords_v = $_POST['coords_v'];
				
				$functions->pdo->query("INSERT INTO offers SET user_id = ".$_SESSION['user_id'].", name = '$name', street = '$street', city = '$city', postal = '$postal', description = '$description', active = 1, banned = 0, category_id = $category");
				$values['status'] = 'po';
				$values['msg'] = 'Dodano obiekt.';
				
			}

			$tpl -> assign('categories', $values['categories']);
			$tpl -> assign('msg', $values['msg']);	
			$tpl -> assign('status', $values['status']);	
			$tpl -> assign('errors', $values['errors']);	
			$tpl -> display('object_add.tpl');	
		}
	}
	
	
	public function categories(){
		global $tpl, $functions;
		
		$stmt = $functions->pdo->query("SELECT * FROM categories WHERE active = 1");
		foreach($stmt as $row){
			$cat[] = array(
							'id' => $row['id'],
							'name' => $row['name']
					);
		}
		return $cat;
	}
	
	
	public function objects($user_id){
		global $tpl, $functions;
		
		$stmt = $functions->pdo->query("SELECT * FROM offers WHERE banned = 0 and user_id = $user_id");
		
		foreach($stmt as $row){
			$objects[] = array(
							'id' => $row['id'],
							'name' => $row['name'],
							'street' => $row['street'],
							'city' => $row['city'],
							'postal' => $row['postal'],
							'description' => $row['description']
					);
		}
		return $objects;
	}

	
}

?>
