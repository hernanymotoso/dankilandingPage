<?php
	class Stakeholders extends model{

		public function addStakeholder($nome, $email, $phone){

			$sql = $this->db->prepare("INSERT INTO interessados (nome, email, telefone) VALUES (:nome, :email, :telefone)");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":telefone", $phone);
			$sql->execute();

		}
		
	}




?>