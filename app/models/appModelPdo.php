<?php

namespace app\models;
use \app\database\pdoDatabase;

class appModelPdo extends pdoDatabase{

	private $questionMark;

	public function listar(){
		return $this->all();
	}

	public function cadastrar($attributes){
		return $this->create($attributes);
	}

	public function deletar($attributes){
		$this->delete($attributes);
	}

}