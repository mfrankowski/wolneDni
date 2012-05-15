<?php

require "object.php";

class User {

	public function load_module() {
		switch($_GET['name']) {
			case 'register_company': $this->register_company(); break;
			case 'activate': $this->activate(); break;
			case 'login': $this->login(); break;
			case 'logout': $this->logout(); break;
			case 'panel': $this->panel(); break;
		}
	}	 

	
	public function register_company(){
		global $tpl, $functions;
		
		$values['status'] = 'przed';

		// nacisnieto rejestruj
		if(!$_SESSION['email']){
			if($_POST['action'] == 'Zarejestruj'){
		
				// czy nie sa puste
				if(!$_POST['firstname'] || !$_POST['lastname'] || !$_POST['company_name'] || !$_POST['address'] || !$_POST['nip'] || !$_POST['email'] || !$_POST['password']) $values['errors'] = 'Wszystkie pola są wymagane.';
				
				else{
					
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$company_name = $_POST['company_name'];
					$address = $_POST['address'];
					$nip = $_POST['nip'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					
					$hash = md5(time());
					$spr = $functions->pdo->query("SELECT count(*) FROM users WHERE nip LIKE '$nip' OR email LIKE '$email'");

					if($spr->fetchColumn() == 0){
						
							$password = sha1(md5($password));
							$functions -> pdo -> query("INSERT INTO users SET name = '$firstname', surname = '$lastname', company_name = '$company_name', address = '$address', nip = '$nip', email = '$email', password = '$password', type='firma', hash = '$hash'");
							
							$message = "Witaj!\n Aby dokończyć rejestrację w portalu Wolne Dni kliknij na poniższy link aktywacyjny:\nhttp://wolnedni.kowalsky.pl/index.php?module=user&name=activate&email=$email&hash=$hash\n\nWolneDni.pl\n";
							$headers = 'From: Wolne Dni <wolnedni@kowalsky.pl>' . "\r\n";
							
							//mail($email, "Rejestracja w portalu Wolne Dni", $message, $headers);
							$values['status'] = 'po';
							$values['msg'] = 'Rejestracja przebiegła pomyślnie. Sprawdź pocztę i aktywuj konto, aby móc z niego korzystać.';
					}
					
					else $values['errors'] = 'Użytkownik o takim adresie email lub numerze NIP już istnieje.';						
				}			
			}

			$tpl -> assign('msg', $values['msg']);	
			$tpl -> assign('status', $values['status']);	
			$tpl -> assign('errors', $values['errors']);	
			$tpl -> display('user_register.tpl');
		}
		else header("Location: index.php");
		
	}
	
	
	public function activate(){
		global $tpl, $functions;
		
		$email = $_GET['email'];
		$hash = $_GET['hash'];
			
		$spr = $functions->pdo->query("SELECT count(*), active FROM users WHERE hash = '$hash' AND email = '$email'");
		if($spr->fetchColumn() == 0) $values['errors'] = 'Podany email i klucz aktywacyjny nie zgadzają się.';
		else{
			
			$functions -> pdo ->query("UPDATE users SET active = 1 WHERE email = '$email'");
			$values['msg'] = 'Konto zostało aktywowane, proszę się zalogować.';
			
		}
		
		
		$tpl -> assign('msg', $values['msg']);	
		$tpl -> assign('errors', $values['errors']);
		$tpl -> display('user_register.tpl');	
	}
	
	public function login(){
		
		global $tpl, $functions;
		
		$values['status'] = 'przed';
		if(!$_SESSION['email']){
			if($_POST['action'] == 'Zaloguj'){
				
				if(!empty($_POST['email']) && !empty($_POST['password'])){
					
					$email = $_POST['email'];
					$password = sha1(md5($_POST['password']));	
					
					$spr = $functions->pdo->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
					$row = $spr->fetch(PDO::FETCH_ASSOC);
					// jesli znajdzie
					if($email == $row['email']){
						if($row['active'] == 0) $values['errors'] = 'Konto nie jest aktywne.';
						elseif($row['banned'] == 1) $values['errors'] = 'Konto zostało zablokowane.'; 
						else{
							$values['msg'] = 'Zostałeś zalogowany poprawnie, za chwilę zostaniesz przekierowany do panelu użytkownika.'; 
							$values['status'] = 'po';
							$_SESSION['email'] = $email;
							$_SESSION['type'] = 'firma';
							$_SESSION['user_id'] = $row['id'];
							header('Refresh: 2; url=index.php?module=user&name=panel');
							
						}
					}
					else $values['errors'] = 'Błędne dane logowania';
						
				}
				else $values['errors'] = 'Uzupełnij wszystkie pola logowania';
				
			} // koniec if post action
		}
		else header("Location: index.php");
		
		
		$tpl -> assign('msg', $values['msg']);	
		$tpl -> assign('status', $values['status']);	
		$tpl -> assign('errors', $values['errors']);
		$tpl -> display('user_login.tpl');
	}
	
	public function logout(){
		session_destroy();
		header("Location: index.php");
	}
	
	
	public function panel(){
		global $tpl, $functions;
	
		
		if($_SESSION['email']){
			if($_SESSION['type']=='firma'){
				
				$objects = new Object();
				$values['objects'] = $objects->objects($_SESSION['user_id']);
				
				//alternatywnie dla extends
				//$objects = Object::$this->objects($_SESSION['user_id']);
			
				$tpl->assign('objects', $values['objects']);
				$tpl->display('user_panel_f.tpl');	
			}
			elseif($_SESSION['type']=='user'){
				$tpl->display('user_panel_u.tpl');
			}
			
		}
		else header("Location: index.php");
		
	}
	
}

?>
