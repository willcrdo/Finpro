<?php
	class Cliente{
		// Conexao
		private $conn;
		// Tabela
		private $db_cli = "clientes";
		// Colunas da base de dados
		public $id_cli;
		public $nome;
		public $telefone;
		public $celular;
		public $mail;
		// Conexao com a base de dados
		public function __construct($db){$this->conn = $db;}
		// Lista todas as pecas
		public function getClientes(){
			$sqlQuery = "SELECT id_cli, nome, telefone, celular, mail FROM " . $this->db_cli . "";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();
			return $stmt;
		}
		// Cadastra Cliente
		public function cadastroCliente(){
			$sqlQuery = "INSERT INTO ". $this->db_cli ." SET nome = :nome, telefone = :telefone, celular = :celular, mail = :mail";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();

			// Limpa conteudo
			$this->nome=htmlspecialchars(strip_tags($this->nome));
			$this->telefone=htmlspecialchars(strip_tags($this->telefone));
			$this->celular=htmlspecialchars(strip_tags($this->celular));
			$this->mail=htmlspecialchars(strip_tags($this->mail));

			// Obtem o dado
//                        $stmt->bindParam(":nome", $this->nome,":telefone", $this->telefone,":celular", $this->celular,":mail", $this->mail);
                        $stmt->bindParam(":nome", $this->nome);
                        $stmt->bindParam(":telefone", $this->telefone);
                        $stmt->bindParam(":celular", $this->celular);
			$stmt->bindParam(":mail", $this->mail);
			if($stmt->execute()){
				return true;
			}
				return false;
		}

		// Atualiza a base de dados
		public function getCliente(){
			$sqlQuery = "SELECT id_cli, nome, telefone, celular, mail FROM ". $this->db_cli ." WHERE id_cli = ? LIMIT 0,1";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bindParam(1, $this->id_cli);
			$stmt->execute();
			$dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
			$this->nome = $dataRow['nome'];
			$this->telefone = $dataRow['telefone'];
			$this->celular = $dataRow['celular'];
			$this->mail = $dataRow['mail'];
		}

		 // Atualiza telefone
                public function updateTelefone(){
                        $sqlQuery = "UPDATE ". $this->db_cli ." SET telefone = :telefone WHERE id_cli = :id_cli";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $this->telefone=htmlspecialchars(strip_tags($this->telefone));
                        $this->id_cli=htmlspecialchars(strip_tags($this->id_cli));

                        // Obtem os dados
                        $stmt->bindParam(":telefone", $this->telefone);
                        $stmt->bindParam(":id_cli", $this->id_cli);
                        if($stmt->execute()){
                                return true;
                        }
                                return false;
                }

		// Atualiza celular
		public function updateCelular(){
			$sqlQuery = "UPDATE ". $this->db_cli ." SET celular = :celular WHERE id_cli = :id_cli";
			$stmt = $this->conn->prepare($sqlQuery);
			$this->celular=htmlspecialchars(strip_tags($this->celular));
			$this->id_cli=htmlspecialchars(strip_tags($this->id_cli));

			// Obtem os dados
			$stmt->bindParam(":celular", $this->celular);
			$stmt->bindParam(":id_cli", $this->id_cli);
			if($stmt->execute()){
				return true;
			}
				return false;
		}

		 // Atualiza email
                public function updateMail(){
                        $sqlQuery = "UPDATE ". $this->db_cli ." SET mail = :mail WHERE id_cli = :id_cli";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $this->mail=htmlspecialchars(strip_tags($this->mail));
                        $this->id_cli=htmlspecialchars(strip_tags($this->id_cli));

                        // Obtem os dados
                        $stmt->bindParam(":mail", $this->mail);
                        $stmt->bindParam(":id_cli", $this->id_cli);
                        if($stmt->execute()){
                                return true;
                        }
                                return false;
                }


		// Apaga Cliente
		function deleteCliente(){
			$sqlQuery = "DELETE FROM " . $this->db_cli . " WHERE id_cli = ?";
			$stmt = $this->conn->prepare($sqlQuery);
			$this->id_cli=htmlspecialchars(strip_tags($this->id_cli));
			$stmt->bindParam(1, $this->id_cli);
			if($stmt->execute()){
				return true;
			}
				return false;
			}
		}
?>
