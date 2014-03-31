<?php

namespace app\classes\database;

class conexaoPDO{

	private static $connection;

	private function __construct(){
		//no instantiate
	}

	public static function conectar(){
		if(!isset(self::$connection)){
			self::$connection = new \PDO('mysql:host=localhost;dbname=angular', 'root', 'root');
		}	
		return self::$connection;
	}

}