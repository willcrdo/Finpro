<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include_once 'database_findpro.php';
	include_once 'cliente.php';
	$database = new Database();
	$db = $database->getConnection();
	$item = new Cliente($db);
	$item->id_cli = isset($_GET['id_cli']) ? $_GET['id_cli'] : die();
	$item->getCliente();
	if($item->nome != null){
		// cria um array
		$comp_arr = array("id_cli" => $item->id_cli, "nome" => $item->nome,"telefone" => $item->telefone, "celular" => $item->celular,"mail" => $item->mail);
		http_response_code(200);
		echo json_encode($comp_arr);
	} else{
		http_response_code(404);
		echo json_encode("Peca nao encontrada!!!");
	}
?>
