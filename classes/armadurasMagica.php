<?php

	class ArmadurasMagicas extends Armaduras{
	
	var $habilidade = "";
	var $precoBase = 0;

	function __construct($nome, $tipo, $custo, $bonusNaCa, $destrezaMaxima, $penalidadeNaPericia,
						 $falhaDeMagiaArcana, $deslocamentoMedio, $deslocamentoPequeno, $peso, $descricao, 
						 $categoria, $habilidade, $precoBase){
						 parent::__construct($nome, $tipo, $custo, $bonusNaCa, $destrezaMaxima,
						 					 $penalidadeNaPericia, $falhaDeMagiaArcana, $deslocamentoMedio, 
						 					 $deslocamentoPequeno, $peso, $descricao, $categoria, $habilidade,
						 					 $precoBase);	
						 						
						  $this->habilidade = $habilidade;
						  $this->precoBase = $precoBase;
						 }
						 
	function gerarHabilidadeMagica(){
		
		$habilidadeMagica = array(
		"Camuflagem","Fortificaчуo leve","Escorregadia","Sombria","Silenciosa","Resistъncia р magia (13)","Escorregadia aprimorada",
		"Sombria aprimorada","Silenciosa aprimorada","Resistъncia a сcido","Resistъncia a frio","Resistъncia a eletricidade",
		"Resistъncia ao fogo","Resistъncia sєnica","Toque espectral","Invulnerabilidade","Fortificaчуo moderada","Resistъncia р magia (15)",
		"Selvagem","Escorregadia maior","Sombria maior","Silenciosa maior","Resistъncia a сcido aprimorada","Resistъncia ao frio aprimorada",
		"Resistъncia р eletricidade aprimorada","Resistъncia ao fogo aprimorada","Resistъncia sєnica aprimorada","Resistъncia р magia (17)",
		"Forma etщria","Controlar mortos-vivos","Fortificaчуo pesada","Resistъncia р magia (19)","Resistъncia a сcido  maior",
		"Resistъncia ao frio maior","Resistъncia р eletricidade maior","Resistъncia ao fogo maior","Resistъncia sєnica maior",
		"Resistъncia р magia (21)","Armadura do Urso","Armadura do Touro","Armadura do Gato");
		
		$tamanho  = count($habilidadeMagica);
		$escolido = rand(0, $tamanho-1);
		
		switch($habilidadeMagica[$escolido]){
		
		case "Camuflagem":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 2700;
			break;
			
		case "Fortificaчуo leve":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 2000;
			break;
			
		case "Escorregadia":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 3750;
			break;
			
		case "Sombria":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 3750;
			break;
			
		case "Silenciosa":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 8000;
			break;
			
		case "Resistъncia р magia (13)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Escorregadia aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Sombria aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 15000;
			break;
			
		case "Silenciosa aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia a сcido":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia a frio":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resistъncia a eletricidade":
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
			
		case "Invulnerabilidade":
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
			
		case "Escorregadia maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 33750;
			break;
			
		case "Sombria maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 33750;
			break;
			
		case "Silenciosa maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 33750;
			break;
			
		case "Resistъncia a сcido aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia ao frio aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
		
		case "Resistъncia р eletricidade aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia ao fogo aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia sєnica aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resistъncia р magia (17)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 32000;
			break;
			
		case "Forma etщria":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Controlar mortos-vivos":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;

		case "Fortificaчуo pesada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Resistъncia р magia (19)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Resistъncia a сcido  maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resistъncia ao frio maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resistъncia р eletricidade maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resistъncia ao fogo maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resistъncia sєnica maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resistъncia р magia (21)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Armadura do Urso":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Armadura do Touro":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Armadura do Gato":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
		}
	}
	
	function gerarPrecoTotal(){
		return ($this->precoBase + $this->custo);
	}

}



?>