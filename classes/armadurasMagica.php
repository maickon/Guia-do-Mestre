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
		"Camuflagem","Fortifica��o leve","Escorregadia","Sombria","Silenciosa","Resist�ncia � magia (13)","Escorregadia aprimorada",
		"Sombria aprimorada","Silenciosa aprimorada","Resist�ncia a �cido","Resist�ncia a frio","Resist�ncia a eletricidade",
		"Resist�ncia ao fogo","Resist�ncia s�nica","Toque espectral","Invulnerabilidade","Fortifica��o moderada","Resist�ncia � magia (15)",
		"Selvagem","Escorregadia maior","Sombria maior","Silenciosa maior","Resist�ncia a �cido aprimorada","Resist�ncia ao frio aprimorada",
		"Resist�ncia � eletricidade aprimorada","Resist�ncia ao fogo aprimorada","Resist�ncia s�nica aprimorada","Resist�ncia � magia (17)",
		"Forma et�ria","Controlar mortos-vivos","Fortifica��o pesada","Resist�ncia � magia (19)","Resist�ncia a �cido  maior",
		"Resist�ncia ao frio maior","Resist�ncia � eletricidade maior","Resist�ncia ao fogo maior","Resist�ncia s�nica maior",
		"Resist�ncia � magia (21)","Armadura do Urso","Armadura do Touro","Armadura do Gato");
		
		$tamanho  = count($habilidadeMagica);
		$escolido = rand(0, $tamanho-1);
		
		switch($habilidadeMagica[$escolido]){
		
		case "Camuflagem":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 2700;
			break;
			
		case "Fortifica��o leve":
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
			
		case "Resist�ncia � magia (13)":
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
			
		case "Resist�ncia a �cido":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia a frio":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 18000;
			break;
			
		case "Resist�ncia a eletricidade":
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
			
		case "Invulnerabilidade":
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
			
		case "Resist�ncia a �cido aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia ao frio aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
		
		case "Resist�ncia � eletricidade aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia ao fogo aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia s�nica aprimorada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 42000;
			break;
			
		case "Resist�ncia � magia (17)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 32000;
			break;
			
		case "Forma et�ria":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;
			
		case "Controlar mortos-vivos":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 49000;
			break;

		case "Fortifica��o pesada":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Resist�ncia � magia (19)":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 50000;
			break;
			
		case "Resist�ncia a �cido  maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resist�ncia ao frio maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resist�ncia � eletricidade maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resist�ncia ao fogo maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resist�ncia s�nica maior":
			$this->habilidade = $habilidadeMagica[$escolido];
			$this->precoBase = 66000;
			break;
			
		case "Resist�ncia � magia (21)":
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