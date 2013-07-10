<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

class Card{
	
	public $atq;
	public $def;
	public $mag;
	public $res;
	public $tipo;
	public $lv;
	public $tendencia;
	public $pv;
	
	function __construct($atq,$def,$res,$tipo,$mag,$lv,$tendencia,$pv){
		$this->atq = $atq;
		$this->def = $def;
		$this->res = $res;
		$this->tipo = $tipo;
		$this->mag = $mag;
		$this->lv = $lv;
		$this->tendencia = $tendencia;
		$this->pv = $pv;
	}
	
	
	function criar_tipo_card(){
			$tipo = array('Fraco','Mediano','Forte','Lendário');
			$escolido = rand(0,count($tipo)-1);
			$this->tipo = $tipo[$escolido];
			return $this->tipo;
	}
	
	function definir_nivel_card(){
		switch($this->tipo){
			case 'Fraco': $lv = rand(1,3);
						  $atq = rand(1,3);
						  $def = rand(1,3);
						  $mag = rand(1,2);
						  $res = rand(1,4);
						  $this->lv = $lv;
						  $this->atq = $atq;
						  $this->def = $def;
						  $this->mag = $mag;
						  $this->res = $res;
						  $this->criar_multiplicador_card();
			break;
			
			case 'Mediano': $lv = rand(4,6);
							$atq = rand(4,7);
						    $def = rand(4,7);
						    $mag = rand(3,4);
						    $res = rand(5,8);
						    $this->lv = $lv;
							$this->atq = $atq;
						    $this->def = $def;
						    $this->mag = $mag;
						    $this->res = $res;
							$this->criar_multiplicador_card();
			break;
			
			case 'Forte': $lv = rand(7,9);
						  $atq = rand(8,12);
						  $def = rand(8,12);
						  $mag = rand(5,6);
						  $res = rand(9,13);
						  $this->lv = $lv;
						  $this->atq = $atq;
						  $this->def = $def;
						  $this->mag = $mag;
						  $this->res = $res;
						  $this->criar_multiplicador_card();
			break;
			
			case 'Lendário': $lv = rand(10,12);						     
							 $atq = rand(13,16);
						     $def = rand(13,16);
						     $mag = rand(7,10);
						     $res = rand(14,17);
							 $this->lv = $lv;
							 $this->atq = $atq;
						  	 $this->def = $def;
						     $this->mag = $mag;
						     $this->res = $res;
							 $this->criar_multiplicador_card();
			break;
		}
	}
	
	function criar_multiplicador_card(){
		if($this->lv >= 1 && $this->lv <= 3){
			$pv = array('x1','x2','x3','x4');
			$posicao = rand(0,count($pv)-1);
			$this->pv = $pv[$posicao];
		}
		elseif($this->lv >= 4 && $this->lv <= 6){
			$pv = array('x2','x3');
			$posicao = rand(0,count($pv)-1);
			$this->pv = $pv[$posicao];
		}
		elseif($this->lv >= 7 && $this->lv <= 9){
			$pv = array('x1','x2');
			$posicao = rand(0,count($pv)-1);
			$this->pv = $pv[$posicao];
		}
		elseif($this->lv >= 10 && $this->lv <= 12){
			$pv = array('x1','x2','x3','x4','x5','x6');
			$posicao = rand(0,count($pv)-1);
			$this->pv = $pv[$posicao];
		}
		return $this->pv;
	}
}

?>