<?php

require('../classes/personagem.php');

class Boss extends Personagem{

	public $ND;
	public $CA;
	public $PV;
	public $iniciativa;
	public $tipo;
	public $subtipo;
	public $posto_divino;
	public $RM;
	public $RD;
	public $KI;
	
	public $ataque_total;
	public $ataque_distancia;
	public $armas;
	
	public $teste_base_classe_1;
	public $teste_base_classe_2;
	public $teste_base_classe_3;
	public $teste_base_magico;
	
	public $qualidade_especiais;
	public $imunidades;
	public $habilidade_similar_magia;
	public $xp_fornecido;
	public $tesouro;
	public $iventario;
	
	public $magias_por_dia;
	public $magias_conhecidas;
	
	public $circulo_0;
	public $circulo_1;
	public $circulo_2;
	public $circulo_3;
	public $circulo_4;
	public $circulo_5;
	public $circulo_6;
	public $circulo_7;
	public $circulo_8;
	public $circulo_9;
	public $circulo_10;
	
	public $historia;
	
	function __construct($nome = '',$nomeJogador = '',$xp = '',$nivel = 0,$dv = 0,$raca = '',$classe = '',$divindade = '',$religiao = '',
						 $tendencia = '',$tamanho = '',$idade = 0,$sexo = '',$altura = '',$peso = '',$olhos = '',$cabelos = '',$pele = '',
						 $img = '',$dado_dano = '',
						 $for_ = 0,$des_ = 0,$con_ = 0,$int_ = 0,$sab_ = 0,$car_ = 0,
						 $bonus_base_ataque = '',$BBA = '',$deslocamento = '',$talentos = '',$pericias_valor = '',$pericias = '',
						//Atributos de BOOS
						$ND = '',$CA = '',$PV = '',$iniciativa = '',$tipo = '',$subtipo = '',$posto_divino = '',$RM = '',$RD = '',$KI = '',
						$ataque_total = '',$ataque_distancia = '',$armas = '',$teste_base_classe_1 = '',$teste_base_classe_2 = '',
						$teste_base_classe_3 = '',$teste_base_magico = '',$qualidade_especiais = '',$imunidades = '',
						$habilidade_similar_magia = '',$xp_fornecido = '',$tesouro = '',$iventario = '',$magias_por_dia = '',$magias_conhecidas = '',
						$circulo_0 = '',$circulo_1 = '',$circulo_2 = '',$circulo_3 = '',$circulo_4 = '',$circulo_5 = '',$circulo_6 = '',
						$circulo_7 = '',$circulo_8 = '',$circulo_9 = '',$circulo_10 = '',
						$historia = ''){
						parent::__construct($nome,$nomeJogador,$xp,$nivel,$dv,$raca,$classe,$divindade,$religiao,$tendencia,$tamanho,$idade,$sexo,$altura,$peso,$olhos,$cabelos,$pele,$img,$dado_dano,
											$for_,$des_,$con_,$int_,$sab_,$car_,$bonus_base_ataque,$BBA,$deslocamento,$talentos,$pericias_valor,$pericias);
											
							$this->ND = $ND;
							$this->CA = $CA;
							$this->PV = $PV;
							$this->iniciativa = $iniciativa;
							$this->tipo = $tipo;
							$this->subtipo = $subtipo;
							$this->posto_divino = $posto_divino;
							$this->RM = $RM;
							$this->RD = $RD;
							$this->KI = $KI;
							$this->ataque_total = $ataque_total;
							$this->ataque_distancia = $ataque_distancia;
							$this->armas = $armas;
							$this->teste_base_classe_1 = $teste_base_classe_1;
							$this->teste_base_classe_2 = $teste_base_classe_2;
							$this->teste_base_classe_3 = $teste_base_classe_3;
							$this->teste_base_magico = $teste_base_magico;
							$this->qualidade_especiais = $qualidade_especiais;
							$this->imunidades = $imunidades;
							$this->habilidade_similar_magia = $habilidade_similar_magia;
							$this->xp_fornecido = $xp_fornecido;
							$this->tesouro = $tesouro;
							$this->iventario = $iventario;
							$this->magias_por_dia = $magias_por_dia;
							$this->magias_conhecidas = $magias_conhecidas;
							$this->circulo_0 = $circulo_0;
							$this->circulo_1 = $circulo_1;
							$this->circulo_2 = $circulo_2;
							$this->circulo_3 = $circulo_3;
							$this->circulo_4 = $circulo_4;
							$this->circulo_5 = $circulo_5;
							$this->circulo_6 = $circulo_6;
							$this->circulo_7 = $circulo_7;
							$this->circulo_8 = $circulo_8;
							$this->circulo_9 = $circulo_9;
							$this->circulo_10 = $circulo_10;
							$this->historia = $historia;
		}
	

	function retornar_objeto(){
		return $this;
	}
}

?>