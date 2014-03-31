<?php

namespace app\models;

abstract class appModel extends \ActiveRecord\Model{

	public function listar(){
		return parent::find('all');
	}

	public function pegar_pelo_id($campo,$valor){
		return parent::find('first', array('conditions' => array($campo.'=?',$valor)));
	}

	public function cadastrar($attributes){
		return parent::create($attributes);
	}

	public function atualizar($id,$attributes){
		$atualizar = parent::find($id);
		$atualizar->update_attributes($attributes);
	}

	public function deletar($id){
		$deletar = parent::find($id);
		$deletar->delete();
	}

}