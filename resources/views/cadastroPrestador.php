<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include_once 'database_findpro.php';
	include_once 'prestador.php';
	$database = new Database();
	$db = $database->getConnection();
	$item = new Prestador($db);
	$data = json_decode(file_get_contents("php://input"));
	echo $data;
	$item->nome = $data->nome;
	$item->telefone = $data->telefone;
	$item->celular = $data->celular;
	$item->mail = $data->mail;
	$item->desc_serv = $data->desc_serv;
        $item->id_categoria = $data->id_categoria;
	if($item->cadastroPrestador()){
		echo 'Prestador cadastrado com sucesso!';
	} else{
		echo 'Nao foi possivel realizar o cadastro.';
	}
?>
