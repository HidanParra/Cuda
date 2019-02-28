<?php  
require_once '_db.php';

if(isset($_POST["accion"])){		
	switch ($_POST["accion"]) {
		case 'login':
		return login($db);
		
		break;

		default:
		break;
	}
}
function login($db){	
	$user=$_POST["usuario"];
	$password=$_POST["password"];		

	if(!$db->select("usuarios","*",["correo_usr" => $user])){
		echo 2;
		return false;
	}elseif(
			!$db->select("usuarios","*",[
				"AND" => [
					"password_usr" => $password,
					"correo_usr" => $user,				
					"status_usr"=>1
				]
			])
		){
		echo 0;
		return false;
	}				
	echo 1;		
	return;
}
?>