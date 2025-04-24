<?php

class AuthModel {
    public function __construct() {
        $this->db = new Database;
    }

    public function buscar_tipos() {
        $this->db->query("SELECT * FROM tipo_cuenta");
		$result = $this->db->registers();
		return $result;
    }
}
?>