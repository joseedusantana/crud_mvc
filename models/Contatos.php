<?php 

	class Contatos extends model {

		public function getAll() {

			$array = array();

			$sql = "SELECT * FROM proj_contato";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0) {
				$array = $sql->fetchAll();
			}

			return $array;
		}

		
	}
