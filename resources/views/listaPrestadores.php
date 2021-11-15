<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
	include_once 'database_findpro.php';
	include_once 'getInfo.php';
	$database = new Database();
	$db = $database->getConnection();
	$items = new Informatica($db);
	$stmt = $items->getInfo();
	$itemCount = $stmt->rowCount();
	if($itemCount > 0){
	$prestadorArr = array();
  	$prestadorArr["body"] = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$e = array("id_prest" => $id_cli,"nome" => $nome,"telefone" => $telefone,"celular" => $celular,"mail" => $mail);
                        array_push($prestadorArr["body"], $e);
		}
  		echo json_encode($prestadorArr);
	} else{
		http_response_code(404);
		echo json_encode(array("mensagem" => "Nenhum prestador encontrado"));
	}
?>
