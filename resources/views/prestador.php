<?php
	class Prestador{
		// Conexao
		private $conn;
		// Tabela
		private $db_cli = "prestador";
 
		// Colunas da base de dados
		public $id_prest;
		public $nome;
		public $telefone;
		public $celular;
		public $mail;
		public $desc_serv;
                public $id_categoria;

		// Conexao com a base de dados
		public function __construct($db){$this->conn = $db;}
		// Lista todos os prestadores
		public function getAll(){
			$sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, descr_serv FROM " . $this->db_cli . "";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();
			return $stmt;
		}


		// Lista prestadores informatica 
                public function getInfo(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 1";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }


                // Lista prestadores Construcao civil 
                public function getconstr(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 2";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }


                // Lista prestadores automotivo
                public function getAuto(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 3";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }


                // Lista prestadores Eletrodomesticos
                public function getEletrodom(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 4";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }


                // Lista prestadores Eletroportateis
                public function getEletropor(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 5";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }

                // Lista prestadores Transportes
                public function getTrans(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 6";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }


                // Lista prestadores outros
                public function getOthers(){
                        $sqlQuery = "SELECT id_prest, nome, telefone, celular, mail, desc_serv FROM " . $this->db_cli . " where id_categoria = 7";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $stmt->execute();
                        return $stmt;
                }

		// Cadastra Prestador
		public function cadastroPrestador(){
			$sqlQuery = "INSERT INTO ". $this->db_cli ." SET nome = :nome, telefone = :telefone, celular = :celular, mail = :mail, desc_serv = :desc_serv, id_categoria = :id_categoria";

			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();

			// Limpa conteudo
			$this->nome=htmlspecialchars(strip_tags($this->nome));
			$this->telefone=htmlspecialchars(strip_tags($this->telefone));
			$this->celular=htmlspecialchars(strip_tags($this->celular));
			$this->mail=htmlspecialchars(strip_tags($this->mail));
			$this->desc_serv=htmlspecialchars(strip_tags($this->desc_serv));
                        $this->id_categoria=htmlspecialchars(strip_tags($this->id_categoria));


			// Obtem o dado
//                        $stmt->bindParam(":nome", $this->nome,":telefone", $this->telefone,":celular", $this->celular,":mail", $this->mail);
                        $stmt->bindParam(":nome", $this->nome);
                        $stmt->bindParam(":telefone", $this->telefone);
                        $stmt->bindParam(":celular", $this->celular);
			$stmt->bindParam(":mail", $this->mail);
			$stmt->bindParam(":desc_serv", $this->desc_serv);
                        $stmt->bindParam(":id_categoria", $this->id_categoria);
			if($stmt->execute()){
				return true;
			}
				return false;
		}

		// Atualiza a base de dados
		public function getPrestador(){
			$sqlQuery = "SELECT id_prest, nome, telefone, celular, mail FROM ". $this->db_cli ." WHERE id_prest = ? LIMIT 0,1";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bindParam(1, $this->id_prest);
			$stmt->execute();
			$dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
			$this->nome = $dataRow['nome'];
			$this->telefone = $dataRow['telefone'];
			$this->celular = $dataRow['celular'];
			$this->mail = $dataRow['mail'];
		}

		 // Atualiza telefone
                public function updateTelefone(){
                        $sqlQuery = "UPDATE ". $this->db_cli ." SET telefone = :telefone WHERE id_prest = :id_prest";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $this->telefone=htmlspecialchars(strip_tags($this->telefone));
                        $this->id_prest=htmlspecialchars(strip_tags($this->id_prest));

                        // Obtem os dados
                        $stmt->bindParam(":telefone", $this->telefone);
                        $stmt->bindParam(":id_prest", $this->id_prest);
                        if($stmt->execute()){
                                return true;
                        }
                                return false;
                }

		// Atualiza celular
		public function updateCelular(){
			$sqlQuery = "UPDATE ". $this->db_cli ." SET celular = :celular WHERE id_prest = :id_prest";
			$stmt = $this->conn->prepare($sqlQuery);
			$this->celular=htmlspecialchars(strip_tags($this->celular));
			$this->id_prest=htmlspecialchars(strip_tags($this->id_prest));

			// Obtem os dados
			$stmt->bindParam(":celular", $this->celular);
			$stmt->bindParam(":id_prest", $this->id_prest);
			if($stmt->execute()){
				return true;
			}
				return false;
		}

		 // Atualiza email
                public function updateMail(){
                        $sqlQuery = "UPDATE ". $this->db_cli ." SET mail = :mail WHERE id_prest = :id_prest";
                        $stmt = $this->conn->prepare($sqlQuery);
                        $this->mail=htmlspecialchars(strip_tags($this->mail));
                        $this->id_prest=htmlspecialchars(strip_tags($this->id_prest));

                        // Obtem os dados
                        $stmt->bindParam(":mail", $this->mail);
                        $stmt->bindParam(":id_prest", $this->id_prest);
                        if($stmt->execute()){
                                return true;
                        }
                                return false;
                }


		// Apaga Cliente
		function deleteCliente(){
			$sqlQuery = "DELETE FROM " . $this->db_cli . " WHERE id_prest = ?";
			$stmt = $this->conn->prepare($sqlQuery);
			$this->id_prest=htmlspecialchars(strip_tags($this->id_prest));
			$stmt->bindParam(1, $this->id_prest);
			if($stmt->execute()){
				return true;
			}
				return false;
			}
		}
?>
