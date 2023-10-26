<?php

class ConexionBD{

	static public function cBD(){

		$bd = new PDO("mysql:host=localhost:3306;dbname=clinica", "root", "");

		$bd -> exec("set names utf8");  //EDITAR SEGUN SU SERVIDOR

		return $bd;

	}

}