<?php
//	header("Access-Control-Allow-Origin: *");
//	header("Content-Type: application/json; charset=UTF-8");
//	header("Access-Control-Allow-Methods: POST");
//	header("Access-Control-Max-Age: 3600");
//	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include_once 'database_findpro.php';
	include_once 'cliente.php';
	$database = new Database();
	$db = $database->getConnection();
	$item = new Cliente($db);
//        $data = json_decode(file_get_contents("php://input"));
//        $item->nome = $data->nome;
//        $item->telefone = $data->telefone;
//        $item->celular = $data->celular;
//        $item->mail = $data->mail;
	$item->nome = $_POST['nomeCli'];
	$item->telefone = $_POST['telefoneCli'];
	$item->celular = $_POST['celularCli'];
	$item->mail = $_POST['emailCli'];
	if($item->cadastroCliente()){
		echo 'Cadastro realizado com sucesso!';
	} else{
		echo 'Nao foi possivel realizar o cadastro.';
	}
?>
