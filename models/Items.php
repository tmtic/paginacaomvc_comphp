<?php

class Items extends Model
{

	public function getTotal()
	{
		$total = 0;
		$sql = $this->db->query("SELECT count(*) as c FROM items");
		if($sql->rowCount() > 0) {
			$total = $sql->fetch();
		}
		return $total['c'];
	}

	public function getList($offset, $limit)
	{
		$lista = array();

		$sql = $this->db->query("SELECT * FROM items  ORDER BY id DESC LIMIT $offset, $limit");
		if($sql->rowCount() > 0) {
			$lista = $sql->fetchAll(PDO::FETCH_OBJ);
		}

		return $lista;
	}
}