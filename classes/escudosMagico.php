<?php

	class EscudosMagicos extends Escudos{
	
	var $habilidade = "";
	var $precoBase = 0;
	
	
	function __construct($nome, $custo, $bonusNaCa, $destrezaMaxima, $penalidadeNaPericia,
						 $falhaDeMagiaArcana, $deslocamentoMedio, $deslocamentoPequeno, $peso, $descricao, 
						 $categoria,$habilidade,$precoBase){
			
						parent::__construct($nome, $custo, $bonusNaCa, $destrezaMaxima, $penalidadeNaPericia, 
											$falhaDeMagiaArcana, $deslocamentoMedio, $deslocamentoPequeno, 
											$peso, $descricao, $categoria, $habilidade, $precoBase);
			
			$this->habilidade = $habilidade;
			$this->precoBase = $precoBase;
	}
	
	function gerarHabilidadeMagica(){
		
		$habilidadeMagica = array("Apanhador de flexas","Esmagamento","Cegante","Fortificaчуo leve","Deflexуo de flexas","Animado","Resistъncia р magia (13)",
		"Resistъncia a сcido","Resistъncia ao frio","Resistъncia р eletricidade","Resistъncia ao fogo","Resistъncia sєnica",
		"Toque espectral","Fortificaчуo moderada","Resistъncia р magia (15)","Selvagem","Resistъncia a сcido aprimorada",
		"Resistъncia ao frio aprimorada","Resistъncia р eletricidade aprimorada","Resistъncia ao fogo aprimorada","Resistъncia sєnica aprimorada",
		"Resistъncia р magia (17)","Controlar mortos-vivos","Fortificaчуo pesada","Reflexуo","Resistъncia р magia (19)","Resistъncia a сcido maior",
		"Resistъncia ao frio maior","Resistъncia р eletricidade maior","Resistъncia ao fogo maior","Resistъncia sєnica maior",
		"Resistъncia р magia (21)","Escudo do Urso","Escudo do Touro","Escudo do Gato");
		
		$tamanho  = count($habilidadeMagica);
		$escolido = rand(0, $tamanho-1);
		$this->habilidade = $habilidadeMagica[$escolido];
		
		switch($habilidadeMagica[$escolido]){
		
		case "Apanhador de flexas":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 2700;
			break;
			
		case "Esmagamento":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 2000;
			break;
			
		case "Cegante":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 3750;
			break;
			
		case "Fortificaчуo leve":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 3750;
			break;
			
		case "Deflexуo de flexas":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 8000;
			break;
			
		case "Animado":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Resistъncia р magia (13)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Resistъncia a сcido":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia ao frio":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia р eletricidade":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia ao fogo":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia sєnica":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Toque espectral":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
			
		case "Fortificaчуo moderada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia р magia (15)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Selvagem":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia a сcido aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia ao frio aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
		
		case "Resistъncia р eletricidade aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia ao fogo aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia sєnica aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia р magia (17)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 33750;
			break;
			
		case "Controlar mortos-vivos":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;

		case "Fortificaчуo pesada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Reflexуo":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia р magia (19)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia a сcido  maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia ao frio maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 32000;
			break;
			
		case "Resistъncia р eletricidade maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Resistъncia ao fogo maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Resistъncia sєnica maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Resistъncia р magia (21)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Escudo do Urso":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Escudo do Touro":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Escudo do Gato":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
		}
	}
	
	function gerarPrecoTotal(){
		return ($this->precoBase + $this->custo);
	}

}



?>