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
		
		$habilidadeMagica = array("Apanhador de flexas","Esmagamento","Cegante","Fortifica��o leve","Deflex�o de flexas","Animado","Resist�ncia � magia (13)",
		"Resist�ncia a �cido","Resist�ncia ao frio","Resist�ncia � eletricidade","Resist�ncia ao fogo","Resist�ncia s�nica",
		"Toque espectral","Fortifica��o moderada","Resist�ncia � magia (15)","Selvagem","Resist�ncia a �cido aprimorada",
		"Resist�ncia ao frio aprimorada","Resist�ncia � eletricidade aprimorada","Resist�ncia ao fogo aprimorada","Resist�ncia s�nica aprimorada",
		"Resist�ncia � magia (17)","Controlar mortos-vivos","Fortifica��o pesada","Reflex�o","Resist�ncia � magia (19)","Resist�ncia a �cido maior",
		"Resist�ncia ao frio maior","Resist�ncia � eletricidade maior","Resist�ncia ao fogo maior","Resist�ncia s�nica maior",
		"Resist�ncia � magia (21)","Escudo do Urso","Escudo do Touro","Escudo do Gato");
		
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
			
		case "Fortifica��o leve":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 3750;
			break;
			
		case "Deflex�o de flexas":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 8000;
			break;
			
		case "Animado":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Resist�ncia � magia (13)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Resist�ncia a �cido":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia ao frio":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia � eletricidade":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia ao fogo":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia s�nica":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Toque espectral":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
			
		case "Fortifica��o moderada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia � magia (15)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Selvagem":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia a �cido aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia ao frio aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
		
		case "Resist�ncia � eletricidade aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia ao fogo aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia s�nica aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia � magia (17)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 33750;
			break;
			
		case "Controlar mortos-vivos":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;

		case "Fortifica��o pesada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Reflex�o":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia � magia (19)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia a �cido  maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia ao frio maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 32000;
			break;
			
		case "Resist�ncia � eletricidade maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Resist�ncia ao fogo maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Resist�ncia s�nica maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Resist�ncia � magia (21)":
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