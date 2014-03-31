<?php

namespace app\database;
use \app\classes\database\conexaoPDO;
use \app\database\pdoHelpersDatabase;

class pdoDatabase extends pdoHelpersDatabase{

	private $pdo;

	public function __construct(){
		$this->pdo = conexaoPDO::conectar();
	}

	public function all(){
		$listar=$this->pdo->query("select * from $this->tabela");
		return $listar->fetchAll(\PDO::FETCH_OBJ);
	}

	public function create(Array $attributes){
		$cadastrar = $this->pdo->prepare("insert into $this->tabela(".$this->implodeFields($attributes).") values(".
			rtrim($this->questionMark($attributes),",")
		.")");
		$this->bindValue($attributes,$cadastrar);
		$cadastrar->execute();
		return $this->pdo->lastInsertId();
	}

	public function delete(Array $attributes){
		$deletar = $this->pdo->prepare("delete from $this->tabela where ".$this->implodeFields($attributes)."=?");
		$this->bindValue($attributes,$deletar);
		$deletar->execute();
	}
}