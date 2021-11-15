<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
	include_once 'database_findpro.php';
	include_once 'cliente.php';
	$database = new Database();
	$db = $database->getConnection();
	$items = new Cliente($db);
	$stmt = $items->getClientes();
	$itemCount = $stmt->rowCount();
	if($itemCount > 0){
	$clienteArr = array();
  	$clienteArr["body"] = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$e = array("id_cli" => $id_cli,"nome" => $nome,"telefone" => $telefone,"celular" => $celular,"mail" => $mail);
                        array_push($clienteArr["body"], $e);
		}
  		echo json_encode($clienteArr);
	} else{
		http_response_code(404);
		echo json_encode(array("memssagem" => "Nenhum registro encontrado!!!"));
	}
?>
