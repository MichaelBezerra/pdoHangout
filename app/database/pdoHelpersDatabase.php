<?php

namespace app\database;

class pdoHelpersDatabase{

	private $questionM;
	private $fields;

	protected function questionMark($attributes){
		$totalValues = count($attributes);
		for($i=0;$i<$totalValues;$i++):
			$this->questionM.="?,";
		endfor;	
		return $this->questionM;
	}

	protected function bindValue($attributes,$object){
		 $index = 1;
		 foreach($attributes as $key=>$value){
		    $object->bindValue($index,$value);
		    $index++;
		 }
	}

	protected function implodeFields($attributes){
		$this->fields = implode(',', array_keys($attributes));
		return $this->fields;
	}

}