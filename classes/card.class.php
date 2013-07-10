<?php

class Cartas{

	public $nome;
	public $expancao;
	public $descricao;
	//public $img;
	
	function __construct($nome,$expancao,$descricao){
		
		$this->nome = $nome;
		$this->expancao = $expancao;
		$this->descricao = $descricao;
		//$this->img = $img;
	}
}

class ArtefatoCarta extends Cartas{
	
	public $mag;
	public $for_;
	
	function __construct($nome,$expancao,$descricao,$mag,$for_){
		parent::__construct($nome,$expancao,$descricao,$mag,$for_);
			$this->mag = $mag;
			$this->for_ =$for_;
	}
}

class MagiaCarta extends Cartas{
	
	public $lv_mag;
	public $mag;
	
	function __construct($nome,$expancao,$descricao,$lv_mag,$mag){
		parent::__construct($nome,$expancao,$descricao,$lv_mag,$mag);
			$this->mag = $lv_mag;
			$this->for_ =$mag;
	}
}

class CriaturaCarta extends Cartas{
	
	
	public $atk;
	public $def;
	public $res;
	public $mag;
	public $nivel;
	
	function __construct($nome,$expancao,$descricao,$atk,$def,$mag,$res,$nivel){
		parent::__construct($nome,$expancao,$descricao,$atk,$def,$mag,$res,$nivel);
			$this->atk = $atk;
			$this->def = $def;
			$this->mag = $mag;
			$this->res = $res;
			$this->nivel = $nivel;
	}
}

?>