<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	class ArmasMagicas extends Armas{

	var $bonusMagico = 0;
	var $categoriaMagica = 0;
	var $habilidadeMagica1 = "";
	var $habilidadeMagica2 = "";
	var $habilidadeMagica3 = "";
	var $habilidadeMagica4 = "";
	var $habilidadeMagica5 = "";
	var $artefato = "";
	var $custoDaArma = 0;
	var $precoBase = 0;
	var $categoria = "Armas Mágicas";
	
	function __construct($nome,$custo,$preco,$dano,$decisivo,$distancia,$peso,$tipo,$descricao,
						 $bonusMagico,$categoriaMagica,$habilidadeMagica1,$habilidadeMagica2,
						 $habilidadeMagica3,$habilidadeMagica4,$artefato,$custoDaArma,$precoBase,$categoria){
		parent::__construct($nome, $custo, $preco, $dano, $decisivo, $distancia, $peso, $tipo, $descricao,
						    $bonusMagico,$categoriaMagica,$habilidadeMagica1,$habilidadeMagica2,
					        $habilidadeMagica3,$habilidadeMagica4,$artefato,$custoDaArma,$precoBase,$categoria);
		
		$this->bonusMagico = $bonusMagico;
		$this->categoriaMagica = $categoriaMagica;
		$this->habilidadeMagica1 = $habilidadeMagica1;
		$this->habilidadeMagica2 = $habilidadeMagica2;
		$this->habilidadeMagica3 = $habilidadeMagica3;
		$this->habilidadeMagica4 = $habilidadeMagica4;
		$this->artefato = $artefato;
		$this->custoDaArma = $custoDaArma;
		$this->precoBase = $precoBase;
		$this->categoria = $categoria;
	}
	
	function gerarNomeDaArma(){
		$tipo = $this->tipo;
		$tamanho;
		$escolido;

		if($tipo == "Armas Leves - Corpo a Corpo"){
			$nome1 = array("Espada curta","Kukri","Machadinha","Machado de arremesso","Martelo leve","Picareta leve","Porrete",
							  "Kama","Nunchaku","Sai","Siangham",
							  "Adaga","Adaga de soco","Foice curta","Maça leve","Manopla com cravos");
			$tamanho  = count($nome1);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome1[$escolido];
		}else if($tipo == "Armas de Uma Mão - Corpo a Corpo"){
			$nome2 = array("Cimitarra","Espada longa","Machado de batalha","Mangual","Martelo de guerra","Picareta pesada","Sabre","Tridente",
							  "Chicote","Espada bastarda","Machado de guerra anão",
							  "Clava","Lança curta","Maça pesada","Maça-estrela");
			$tamanho  = count($nome2);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome2[$escolido];
		}else if($tipo == "Armas de Duas Mãos - Corpo a Corpo"){
			$nome3 = array("Alabarda","Clava grande","Espada larga","Falcione","Foice longa","Glaive","Guisarme","Lança","Machado grande","Mangual pesado","Ranseur",
							  "Corrente com cravos","Espada de duas lâminas","Machado orc duplo","Mangual atroz","Martelo gnomo com gancho","Urgrosh anão",
							  "Bordão","Lança","Lança longa");
			$tamanho  = count($nome3);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome3[$escolido];
		}else if($tipo == "Armas de Ataque à Distância"){
			$nome4 = array("Arco curto","Arco curto composto","Arco longo","Arco longo composto",
							  "Besta leve de repetição","Besta pesada de repetição","Besta de mão","Boleadeira","Shuriken",
							  "Azagaia","Besta leve","Besta pesada","Dardo","Funda");
			$tamanho  = count($nome4);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome4[$escolido];
		}
		
		return $this->nome; 
	}

	function gerarBonusMagico(){
		
		$bonus = rand(0,5);
		if($this->categoriaMagica >= 1 && $bonus == 0){
			$bonus = 1;
		}
		$this->bonusMagico = $bonus;
		return $this->bonusMagico;
	}
	
	function gerarCategoriaMagica(){
		
		$categoria = rand(0,5);
		$this->categoriaMagica = $categoria;
		return $this->categoriaMagica;
	}
	
	function gerarArtefato(){
		$bonusMagico = $this->bonusMagico;
		switch($bonusMagico){
		case 0:$this->artefato = "Obra prima";
			break;
			
		case 1:$this->artefato = "Menor";
			break;
			
		case 2:$this->artefato = "Menor";
			break;
			
		case 3:$this->artefato = "Médio";
			break;
			
		case 4:$this->artefato = "Médio";
			break;
			
		case 5:$this->artefato = "Maior";
			break;
		}
	}
	
	function custoTotal(){
		$total;
		$total = ($this->precoBase + $this->custoDaArma);
		return $total;
	}
	
	function  gerarHabilidadeMagica($categoriaMagica){
		
		$tamanho;
		$escolido;
		$habilidade = null;
		
		if($this->tipo == "Armas de Ataque à Distância"){
			if($categoriaMagica == 5){
				$categoriaMagica = $this->bonusMagico -1;
			}
		}
		
		switch($categoriaMagica){
		
		case 0 :$habilidade = "Sem habilidade";
		break;
		
		case 1 :if($this->tipo == "Armas de Ataque à Distância"){
				
				$habilidades = array("Anti criatura","Distância","Flamejante","Congelante","Misericórdia","Retorno",
				"Elétrica","Caçador","Trovejante");
				$tamanho  = count($habilidades);
				$escolido = rand(0, $tamanho-1);
				$habilidade = $habilidades[$escolido];
				
			}else {
					$habilidades = array("Anti criatura","Distância","Flamejante","Congelante","Elétrica",
					"Retorno","Elétrica","Toque espectral","Afiada","Foco chi","Misericórdia","Trespassar poderoso","Armazenar magias",
					"Arremesso","Trovejante","Dissonante");
					$tamanho  = count($habilidades);
					$escolido = rand(0, $tamanho-1);
					$habilidade = $habilidades[$escolido];
			}
		break;
		
		case 2 :if($this->tipo == "Armas de Ataque à Distância"){
			
				$habilidades = array("Anárquico","Axiomático","Explosão flamejante","Sagrado","Explosão congelante",
				"Explosão elétrica","Profano");
				$tamanho  = count($habilidades);
				$escolido = rand(0, $tamanho-1);
				$habilidade = $habilidades[$escolido];
				
			}else {
				$habilidades = array("Anárquico","Axiomático","Rompimento","Explosão flamejante","Explosão congelante",
				"Sagrada","Explosão elétrica","Profana","Sangramento");
				$tamanho  = count($habilidades);
				$escolido = rand(0, $tamanho-1);
				$habilidade = $habilidades[$escolido];
			}
		break;
		
		case 3 : $habilidade = "Velocidade";
		break;
		
		case 4 :if($this->tipo == "Armas de Ataque à Distância"){

			$habilidade = "Energia brilhante";
			
		}else {
			$habilidades = array("Energia brilhante","Dançarino");
			$tamanho  = count($habilidades);
			$escolido = rand(0, $tamanho-1);
			$habilidade = $habilidades[$escolido];
		}
		break;
		
		case 5 :$habilidade = "Vorpal";
		break;
		}
		
		return $habilidade;
	}
	
	
	function categoriaMaisUm($categoriaMag){
		
			$this->habilidadeMagica1 = $this->gerarHabilidadeMagica($categoriaMag);
			$this->habilidadeMagica2 = "";
			$this->habilidadeMagica3 = "";
			$this->habilidadeMagica4 = "";
			$this->habilidadeMagica5 = "";
	}
	
	function categoriaMaisDois($categoriaMag){
		
		$tamanho;
		$escolido;
		
		if($categoriaMag == 1){
			$this->categoriaMaisUm();
		}else{
			$modelo = rand(1,2);
			switch($modelo){
			case 1: 
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
				
			case 2:
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(2);
				$this->habilidadeMagica2 = "";
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
				
			}
		}
	}
	
	function categoriaMaisTres($categoriaMag){
		
		$tamanho;
		$escolido;
		
		if($categoriaMag == 1){
			$this->categoriaMaisUm($categoriaMag);
		}else if($categoriaMag == 2){
			$this->categoriaMaisDois($categoriaMag);
		}else{
			$modelo = rand(1,3);
			switch($modelo){
			case 1: 
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica3 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
				
			case 2:
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(2);
				$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
				
			case 3:
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(3);
				$this->habilidadeMagica2 = "";
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
			}
		}
	}
	
	
	function  categoriaMaisQuatro($categoriaMag){
		
		$tamanho;
		$escolido;
		
		if($categoriaMag == 1){
			$this->categoriaMaisUm($categoriaMag);
		}else if($categoriaMag == 2){
			$this->categoriaMaisDois($categoriaMag);
		}else if($categoriaMag == 3){
			$this->categoriaMaisTres($categoriaMag);
		}else{
			$modelo = rand(1,4);
			switch($modelo){
			case 1: 
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica3 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica4 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica5 = "";
				break;
				
			case 2:
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(2);
				$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(2);
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
				
			case 3:
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(3);
				$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(1);
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
				
			case 4:
				$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(4);
				$this->habilidadeMagica2 = "";
				$this->habilidadeMagica3 = "";
				$this->habilidadeMagica4 = "";
				$this->habilidadeMagica5 = "";
				break;
			}
		}
	}
	
	function categoriaMaisCinco($categoriaMag){
		
		$tamanho;
		$escolido;
		if($categoriaMag == 0){
			$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(0);
			$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(0);
			$this->habilidadeMagica3 = $this->gerarHabilidadeMagica(0);
			$this->habilidadeMagica4 = $this->gerarHabilidadeMagica(0);
			$this->habilidadeMagica5 = $this->gerarHabilidadeMagica(0);
		}else if($categoriaMag == 1){
			$this->categoriaMaisUm($categoriaMag);
		}else if($categoriaMag == 2){
			$this->categoriaMaisDois($categoriaMag);
		}else if($categoriaMag == 3){
			$this->categoriaMaisTres($categoriaMag);
		}else if($categoriaMag == 4){
			$this->categoriaMaisQuatro($categoriaMag);
		}else{
			$modelo = rand(1,4);
					switch($modelo){
					case 1: 
						$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(1);
						$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(1);
						$this->habilidadeMagica3 = $this->gerarHabilidadeMagica(1);
						$this->habilidadeMagica4 = $this->gerarHabilidadeMagica(1);
						$this->habilidadeMagica5 = $this->gerarHabilidadeMagica(1);
						break;
						
					case 2:
						$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(2);
						$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(2);
						$this->habilidadeMagica3 = $this->gerarHabilidadeMagica(1);
						$this->habilidadeMagica4 = "";
						$this->habilidadeMagica5 = "";
						break;
						
					case 3:
						$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(3);
						$this->habilidadeMagica2 = $this->gerarHabilidadeMagica(2);
						$this->habilidadeMagica3 = "";
						$this->habilidadeMagica4 = "";
						$this->habilidadeMagica5 = "";
						break;
						
					case 4:
						$this->habilidadeMagica1 = $this->gerarHabilidadeMagica(5);
						break;
					}
		}
		
	}

	
	function  gerarPrecoBase(){
		$bonusMag = $this->bonusMagico;
		$categoriaMag = $this->categoriaMagica;
			$bonusTotal = ($bonusMag + $categoriaMag);
			switch($bonusTotal){
			
			case 0:
				$this->precoBase = 0;
				break;
			
			case 1:
				$this->precoBase = 2000;
				break;
				
			case 2:
				$this->precoBase = 8000;
				break;
				
			case 3:
				$this->precoBase = 18000;
				break;
				
			case 4:
				$this->precoBase = 32000;
				break;
				
			case 5:
				$this->precoBase = 50000;
				break;
				
			case 6:
				$this->precoBase = 72000;
				break;
				
			case 7:
				$this->precoBase = 98000;
				break;
				
			case 8:
				$this->precoBase = 128000;
				break;
				
			case 9:
				$this->precoBase = 162000;
				break;
				
			case 10:
				$this->precoBase =  200000;
				break;
			}
	}
	
	function  gerarDescricaoMagica(){
		
	}
	
	function gerarCustoDaArma(){
		$nome = $this->nome;
		switch($nome){
		
		case "Cimitarra":
			$this->custoDaArma = 315;
			break;
			
		case "Espada longa":
			$this->custoDaArma = 315;
			break;
			
		case "Machado de batalha":
			$this->custoDaArma = 310;
			break;
			
		case "Mangual":
			$this->custoDaArma = 308;
			break;
			
		case "Martelo de guerra":
			$this->custoDaArma = 312;
			break;
			
		case "Picareta pesada":
			$this->custoDaArma = 308;
			break;
			
		case "Sabre":
			$this->custoDaArma = 320;
			break;
			
		case "Tridente":
			$this->custoDaArma = 315;
			break;
			
		case "Chicote":
			$this->custoDaArma = 301;
			break;
			
		case "Espada bastarda":
			$this->custoDaArma = 335;
			break;
			
		case "Machado de guerra anão":
			$this->custoDaArma = 330;
			break;
			
		case "Clava":
			$this->custoDaArma = 300;
			break;
			
		case "Lança curta":
			$this->custoDaArma = 302;
			break;
			
		case "Maça-estrela":
			$this->custoDaArma = 308;
			break;
			
		case "Espada curta":
			$this->custoDaArma = 310;
			break;
			
		case "Machadinha":
			$this->custoDaArma = 306;
			break;
			
		case "Machado de arremesso":
			$this->custoDaArma = 308;
			break;
			
		case "Martelo leve":
			$this->custoDaArma = 301;
			break;
			
		case "Picareta leve":
			$this->custoDaArma = 304;
			break;
			
		case "Porrete":
			$this->custoDaArma = 301;
			break;
			
		case "Kama":
			$this->custoDaArma = 302;
			break;
			
		case "Nunchaku":
			$this->custoDaArma = 302;
			break;
			
		case "Sai":
			$this->custoDaArma = 303;
			break;
			
		case "Siangham":
			$this->custoDaArma = 303;
			break;
			
		case "Adaga":
			$this->custoDaArma = 302;
			break;
			
		case "Adaga de soco":
			$this->custoDaArma = 300;
			break;
			
		case "Foice curta":
			$this->custoDaArma = 306;
			break;
			
		case "Maça leve":
			$this->custoDaArma = 305;
			break;
			
		case "Manopla com cravos":
			$this->custoDaArma = 305;
			break;
			
		case "Alabarda":
			$this->custoDaArma = 300;
			break;
			
		case "Clava grande":
			$this->custoDaArma = 305;
			break;
			
		case "Espada larga":
			$this->custoDaArma = 350;
			break;
			
		case "Falcione":
			$this->custoDaArma = 375;
			break;
			
		case "Foice longa":
			$this->custoDaArma = 318;
			break;
			
		case "Glaive":
			$this->custoDaArma = 308;
			break;
			
		case "Guisarme":
			$this->custoDaArma = 309;
			break;
			
		case "Machado grande":
			$this->custoDaArma = 320;
			break;
			
		case "Mangual pesado":
			$this->custoDaArma = 315;
			break;
			
		case "Kukri":
			$this->custoDaArma = 308;
			break;
			
		case "Ranseur":
			$this->custoDaArma = 310;
			break;
			
		case "Corrente com cravos":
			$this->custoDaArma = 325;
			break;
			
		case "Espada de duas lâminas":
			$this->custoDaArma = 700;
			break;
			
		case "Machado orc duplo":
			$this->custoDaArma = 660;
			break;
			
		case "Mangual atroz":
			$this->custoDaArma = 690;
			break;
			
		case "Martelo gnomo com gancho":
			$this->custoDaArma = 320;
			break;
			
		case "Urgrosh anão":
			$this->custoDaArma = 650;
			break;
			
		case "Bordão":
			$this->custoDaArma = 600;
			break;
			
		case "Lança":
			$this->custoDaArma = 310;
			break;
			
		case "Lança longa":
			$this->custoDaArma = 305;
			break;
			
		case "Arco curto":
			$this->custoDaArma = 330;
			break;
			
		case "Arco curto composto":
			$this->custoDaArma = 375;
			break;
			
		case "Arco longo":
			$this->custoDaArma = 375;
			break;
			
		case "Arco longo composto":
			$this->custoDaArma = 400;
			break;
			
		case "Besta leve de repetição":
			$this->custoDaArma = 335;
			break;
			
		case "Besta pesada de repetição":
			$this->custoDaArma = 350;
			break;
			
		case "Besta de mão":
			$this->custoDaArma = 400;
			break;
			
		case "Boleadeira":
			$this->custoDaArma = 300;
			break;
			
		case "Shuriken":
			$this->custoDaArma = 300;
			break;
			
		case "Azagaia":
			$this->custoDaArma = 301;
			break;
			
		case "Besta leve":
			$this->custoDaArma = 335;
			break;
			
		case "Besta pesada":
			$this->custoDaArma = 350;
			break;
			
		case "Funda":
			$this->custoDaArma = 300;
			break;
			
		case "Dardo":
			$this->custoDaArma = 300;
			break;
		}
		
	}
	
	function  gerarArma(){
		$nome = $this->nome;
		switch($nome){
		
		case "Espada curta":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Essa e uma arma comum, usada como arma da mão inábil.";
			break;
			
		case "Kukri":
			$this->preco = $this->custoTotal();
			$this->dano = "1d4";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Essa adaga curva e pesada possui uma lamina afiada em sua face interna.";
			break;
			
		case "Machadinha":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "1,5 Kg";
			$this->descricao = "Os anões preferem esses machados como armas para a mão inábil.";
			break;
			
		case "Machado de arremesso":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "3 metros";
			$this->peso = "1 Kg";
			$this->descricao = "Um machado de arremesso é mais leve que uma ".
					" machadinha e balanceado para ser arremessado. Os guerreiros gnomos utilizam ".
					" machados de arremesso como armas brancas e de ataque à distância.";
			break;
			
		case "Martelo leve":
			$this->preco = $this->custoTotal();
			$this->dano = "1d4";
			$this->decisivo = "x2";
			$this->distancia = "6 metros";
			$this->peso = "1 Kg";
			$this->descricao = "Esse pequeno martelo é leve o bastante para ser arremessado. Ele é muito apreciado entre os anões.";
			break;
			
		case "Picareta leve":
			$this->preco = $this->custoTotal();
			$this->dano = "1d4";
			$this->decisivo = "x4";
			$this->distancia = "-";
			$this->peso = "1,5 Kg";
			$this->descricao = "Uma picareta é projetada para concentrar toda a força ".
					" de seu ataque em uma pequena área. Uma picareta leve ou pesada é similar á ferramenta ".
					" usada pelos mineiros, mas foi desenvolvida especialmente para o combate.";
			break;
			
		case "Porrete":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Um porrete é ideal quando o personagem prefere deixar o inimigo inconsciente em vez de matá-lo.";
			break;
			
		case "Cimitarra":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "2 Kg";
			$this->descricao = "A curva dessa espada torna sua lâmina mais extensa e afiada.";
			break;
			
		case "Espada longa":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "2 Kg";
			$this->descricao = "Essa clássica lamina reta é a arma da cavalaria e do heroísmo. É a arma favorita de muitos paladinos.";
			break;
			
		case "Machado de batalha":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "3 Kg";
			$this->descricao = "O machado de batalha é a arma branca mais comum entre os anões.";
			break;
			
		case "Mangual":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "2,5 Kg";
			$this->descricao = "O personagem recebe +2 de bônus nos testes ".
					" resistidos para desarmar um oponente quando utiliza um mangual (inclusive na ".
					" jogada para evitar ser desarmado, caso a tentativa fracasse). ".
					" O personagem também será capaz de usar essa arma para executar um ataque de ".
					" imobilização. Caso o personagem seja imobilizado durante a tentativa de realizar a ".
					" manobra, ele será capaz de soltar o mangual para evitar sua própria imobilização.";
			break;
			
		case "Martelo de guerra":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "2,5 Kg";
			$this->descricao = "Essa arma, uma das favoritas dos anões, é um martelo de uma única mão, com a cabeça grande e pesada.";
			break;
			
		case "Picareta pesada":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x4";
			$this->distancia = "-";
			$this->peso = "3 Kg";
			$this->descricao = "Uma picareta é projetada para concentrar toda a força ".
					" de seu ataque em uma pequena área. Uma picareta leve ou pesada é similar á ferramenta ".
					" usada pelos mineiros, mas foi desenvolvida especialmente para o combate.";
			break;
			
		case "Sabre":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "É possível selecionar o talento Acuidade com Arma para um sabre do ".
					" tamanho indicado ao personagem, aplicando o modificador de Destreza no lugar ".
					" do modificador de Força nas jogadas de ataque, embora ele não seja uma arma leve. ".
					" O usuário não pode aplicar 1,5 vezes seu bônus de Força na jogada de dano, mesmo ".
					" se empunhar um sabre com as duas mãos.";
			break;
			
		case "Tridente":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "x2";
			$this->distancia = "3 metros";
			$this->peso = "2 Kg";
			$this->descricao = "Essa arma possui três pontas perfurantes e pode ser arremessada da ".
					" mesma forma que uma lança ou uma lança curta, mas seu incremento de distância é ".
					" menor, uma vez que não apresenta a aerodinâmica das outras armas. Se o personagem ".
					" estiver usando uma ação preparada contra uma Investida, ele causa o dobro do dano ".
					" se obtiver sucesso contra o atacante.";
			break;
			
		case "Alabarda":
			$this->preco = $this->custoTotal();
			$this->dano = "1d10";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "11 Kg";
			$this->descricao = "Normalmente, o personagem ataca com a extremidade de machado ".
					" da alabarda, mas a estaca na outra extremidade é útil contra oponentes em Investida. ".
					" Se o personagem estiver usando uma ação preparada contra uma Investida, ele causa ".
					" o dobro do dano se obtiver sucesso contra o atacante. ".
					" O personagem será capaz de usar o gancho traseiro da alabarda para executar ".
					" um ataque de imobilização. Caso o personagem seja imobilizado durante a tentativa ".
					" de realizar a manobra, ele será capaz de soltar a alabarda para evitar sua própria ".
					" imobilização.";
			break;
			
		case "Clava grande":
			$this->preco = $this->custoTotal();
			$this->dano = "1d10";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Uma clava grande é a versão de duas mãos da clava comum. Ela geralmente possui pregos, cravos ou é envolvida com faixas de metal.";
			break;
			
		case "Espada larga":
			$this->preco = $this->custoTotal();
			$$this->dano = "2d6";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Os aventureiros consideram a espada larga uma das melhores armas brancas existentes. Ela é confiável e poderosa.";
			break;
		
		case "Falcione":
			$this->preco = $this->custoTotal();
			$this->dano = "2d4";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Essa espada, que é essencialmente uma cimitarra de duas mãos, possui uma curva que torna sua lâmina mais extensa e afiada.";
			break;
		
		case "Foice longa":
			$this->preco = $this->custoTotal();
			$this->dano = "2d4";
			$this->decisivo = "x4";
			$this->distancia = "-";
			$this->peso = "10 Kg";
			$this->descricao = "Embora pareça com o instrumento agrícola homônimo, essa foice ".
						" é balanceada e reforçada para o combate. Ela foi desenvolvida para sustentar muita ".
						" força na sua ponta cortante, além de permitir cortes devastadores com a lamina. ".
						" Devido á lamina afiada da foice, o personagem é capaz de usá-la para realizar ".
						" um ataque de imobilização. Caso o personagem seja imobilizado durante a tentativa ".
						" de realizar a manobra, ele será capaz de soltar a foice para evitar sua própria ".
						" imobilização.";
			break;
			
		case "Glaive":
			$this->preco = $this->custoTotal();
			$this->dano = "1d10";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "10 Kg";
			$this->descricao = "Uma glaive é uma arma de haste. O personagem é capaz de atingir ".
						" um adversário a 3 metros de distância, mas não consegue utilizá-la contra um ".
						" oponente adjacente.";
			break;
		
		case "Guisarme":
			$this->preco = $this->custoTotal();
			$this->dano = "2d4";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "11 Kg";
			$this->descricao = "Uma guisarme é uma arma de haste. O personagem é capaz de ".
						" atingir um adversário a 3 metros de distância, mas não consegue utilizá-la contra ".
						" um oponente adjacente.";
			break;
			
			
		case "Machado grande":
			$this->preco = $this->custoTotal();
			$this->dano = "1d12";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "11 Kg";
			$this->descricao = "Essa machado grande e pesado é a arma favorita do bárbaros ".
						" e de qualquer um que aprecie a capacidade de infligir incrível quantidades ".
						" de dano.";
			break;
			
		case "Mangual pesado":
			$this->preco = $this->custoTotal();
			$this->dano = "1d10";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "10 Kg";
			$this->descricao = "O personagem recebe +2 de bônus nos testes ".
						" resistidos para desarmar um oponente quando utiliza um mangual (inclusive na ".
						" jogada para evitar ser desarmado, caso a tentativa fracasse). ".
						" O personagem também será capaz de usar essa arma para executar um ataque de ".
						" imobilização. Caso o personagem seja imobilizado durante a tentativa de realizar a ".
						" manobra, ele será capaz de soltar o mangual para evitar sua própria imobilização.";
			break;
			
		case "Ranseur":
			$this->preco = $this->custoTotal();
			$this->dano = "2d4";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "11 Kg";
			$this->descricao = "Um ranseur é uma arma de haste. O personagem é capaz de atingir ".
						" um adversário a 3 metros de distância, mas não consegue utilizá-lo contra um ".
						" oponente adjacente. ".
						" O personagem recebe +2 de bônus nos testes resistidos para desarmar um ".
						" oponente quando utiliza um ranseur (inclusive na jogada para evitar ser desarmado, ".
						" caso a tentativa fracasse).";
			break;
			
		case "Arco curto":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x3";
			$this->distancia = "18 metros";
			$this->peso = "1 Kg";
			$this->descricao = " O personagem deve ter as duas mãos para disparar um arco, ".
						" independente do seu tamanho. Os personagens montados são capazes de disparar ".
						" um arco curto. Caso o usuário tenha uma penalidade de Força, aplique-a nas jogadas ".
						" de dano do arco curto. Caso tenha um bônus de Força, aplique-o nas jogadas de ".
						" dano quando utilizar um arco curto composto (veja a seguir), mas não um arco ".
						" curto normal.";
			break;
			
		case "Arco curto composto":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x3";
			$this->distancia = "21 metros";
			$this->peso = "1 Kg";
			$this->descricao = " O personagem deve ter as duas mãos para disparar ".
						" um arco, independente do seu tamanho. Os personagens montados são capazes de ".
						" disparar um arco curto composto. O arco composto é feito de chifres, madeira ou ".
						" ossos laminados, e recurvado para continuar estirado mesmo quando está desarmado. ".
						" Todos os arcos compostos são fabricados considerando um valor específico de Força ".
						" (isso é, cada um requer um modificador mínimo de Força para ser usado adequadamente). ".
						" Caso o bônus de Força do personagem seja inferior ao mínimo exigido pelo ".
						" arco composto, não será possível usá-lo com eficácia, acarretando -2 de penalidade ".
						" nas jogadas de ataque. Um arco curto composto exige um modificador de Força de ".
						" +0 ou superior para ser disparado sem penalidades. É possível fabricar um arco curto ".
						" composto para aproveitar um valor elevado de Força do usuário (esses equipamentos ".
						" são especialmente reforçados); essa característica permite adicionar o bônus de Força ".
						" na jogada de dano, limitado pelo valor indicado na arma. Cada ponto de bônus de ".
						" Força adicionado ao dano eleva o custo do arco em 75 PO. Por exemplo, um arco ".
						" curto composto (+1 de bônus de Força) custaria 150 PO, enquanto um arco curto ".
						" composto (+4 de bônus de Força) custaria 375 PO. ".
						" Por exemplo, Tordek tem +2 de bônus de Força. Usando um arco curto composto ".
						" normal, ele não adiciona seu modificador nas jogadas de dano. Com 150 PO, ".
						" ele adquire um arco curto composto (+1 de bônus de Força), permitindo que ele ".
						" adicione +1 nas jogadas de dano com a arma. Com 225 PO, ele compraria um arco ".
						" que lhe permitiria adicionar seu bônus de Força total (+2). Mesmo que pague 300 ".
						" PO em um arco curto composto (+3 de bônus de Força), Tordek somará apenas +2 ".
						" de bônus na jogadas de dano e ainda sofrerá -2 de penalidade nas jogadas de ataque, ".
						" uma vez que sua Força é insuficiente para disparar a arma com eficácia. O arco não ".
						" suporta ou concede um bônus maior que o valor indicado. ".
						" Em relação aos talentos Usar Arma ou características de classe similares, um ".
						" arco curto composto é considerado um arco curto. Portanto, se o personagem tiver ".
						" Foco em Arma (arco curto), esse talento se aplicará ao arco curto e ao arco curto ".
						" composto.";
			break;
			
		case "Arco longo":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "30 metros";
			$this->peso = "1,5 Kg";
			$this->descricao = " O personagem deve ter as duas mãos livres para disparar um ".
						" arco, independente do seu tamanho. Um arco longo é muito desbalanceado para ".
						" ser disparado por personagens montados. Caso o usuário tenha uma penalidade ".
						" de Força, aplique-a nas jogadas de dano do arco longo. Caso tenha um bônus de ".
						" Força, aplique-o nas jogadas de dano quando utilizar um arco longo composto ".
						" ,mas não um arco longo normal.";
			break;
			
		case "Arco longo composto":
			$this->preco = $this->custoTotal();
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "33 metros";
			$this->peso = "1,5 Kg";
			$this->descricao = " O personagem deve ter as duas mãos para disparar ".
						" um arco, independente do seu tamanho. Os personagens montados são capazes de ".
						" disparar um arco longo composto. O arco composto é feito de chifres, madeira ou ".
						" ossos laminados, e recurvado para continuar estirado mesmo quando está desarmado. ".
						" Todos os arcos compostos são fabricados considerando um valor específico de Força ".
						" (isso é, cada um requer um modificador mínimo de Força para ser usado adequadamente). ".
						" Caso o bônus de Força do personagem seja inferior ao mínimo exigido pelo ".
						" arco composto, não será possível usá-lo com eficácia, acarretando -2 de penalidade ".
						" nas jogadas de ataque. Um arco longo composto exige um modificador de Força de ".
						" +0 ou superior para ser disparado sem penalidades. É possível fabricar um arco longo ".
						" composto para aproveitar um valor elevado de Força do usuário (esses equipamentos ".
						" são especialmente reforçados); essa característica permite adicionar o bônus de Força ".
						" na jogada de dano, limitado pelo valor indicado na arma. Cada ponto de bônus de ".
						" Força adicionado ao dano eleva o custo do arco em 100 PO. Por exemplo, um arco ".
						" longo composto (+1 de bônus de Força) custaria 200 PO, enquanto um arco longo ".
						" composto (+4 de bônus de Força) custaria 500 PO. ".
						" Por exemplo, Tordek tem +2 de bônus de Força. Usando um arco longo composto ".
						" normal, ele não adiciona seu modificador nas jogadas de dano. Com 200 PO, ele ".
						" adquire um arco longo composto (+1 bônus de Força), permitindo que ele adicione ".
						" +1 nas jogadas de dano com a arma. Com 300 PO, ele compraria um arco que lhe ".
						" permitiria adicionar seu bônus de Força total (+2). Mesmo que pague 400 PO em ".
						" um arco longo composto (+3 bônus de Força), Tordek somará apenas +2 de bônus ".
						" na jogadas de dano e ainda sofrerá -2 de penalidade nas jogadas de ataque, uma vez ".
						" que sua Força é insuficiente para disparar a arma com eficácia. O arco não suporta ".
						" ou concede um bônus maior que o valor indicado. ".
						" Em relação aos talentos Usar Arma ou características de classe similares, um ".
						" arco longo composto é considerado um arco longo. Portanto, se o personagem ".
						" tiver Foco em Arma (arco longo), esse talento se aplicará ao arco longo e ao arco ".
						" longo composto.";
			break;
			
		case "Kama":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "A kama é uma arma especial para monges. Essa característica concede opções ".
					" especiais aos monges que a utilizarem em combate (veja Capitulo 3: Classes). ".
					" Devido ao formato da kama, o personagem será capaz de usá-la para executar ".
					" um ataque de imobilização. Caso o personagem seja imobilizado durante a tentativa ".
					" de realizar a manobra, ele será capaz de soltar a kama para evitar sua própria ".
					" imobilização.";
			break;
			
		case "Nunchaku":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "O nunchaku é uma arma especial para monges. Essa característica ".
					" concede opções especiais aos monges que o utilizarem em combate. O personagem ".
					" recebe +2 de bônus nos testes resistidos para desarmar um oponente quando utiliza ".
					" um nunchaku (inclusive na jogada para evitar ser desarmado, caso a tentativa ".
					" fracasse).";
			break;
			
		case "Sai":
			$this->preco = $this->custoTotal();
			$this->dano = "1d4";
			$this->decisivo = "x2";
			$this->distancia = "3 metros";
			$this->peso = "0,5 Kg";
			$this->descricao = "As projeções metálicas em forma de dentes de uma sai foram desenvolvidas ".
					" para prender e desarmar um oponente. O personagem recebe +4 de bônus nos testes ".
					" resistidos para desarmar um oponente quando utiliza uma sai (inclusive na jogada ".
					" para evitar ser desarmado, caso a tentativa fracasse). ".
					" A sai é uma arma especial para monges. Essa característica ".
					" concede opções especiais aos monges que a utilizarem em combate.";
			break;
			
		case "Siangham":
			$this->preco = $this->custoTotal();
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "0,5 Kg";
			$this->descricao = "A siangham é uma arma especial para monges. Essa característica concede opções especiais aos monges que a utilizarem em combate";
		
			break;
		
		case "Chicote":
			$this->preco = $this->custoTotal();
			$this->dano = "1d3";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Um chicote causa dano por contusão e não inflige dano em nenhuma ".
						" criatura com bônus de armadura +1 ou superior ou bônus de armadura natural +3 ".
						" ou superior. O chicote é considerado uma arma de haste (embora não tenha cabo), ".
						" com 4,5 metros de alcance, mas não ameaça a área que é capaz de atingir para determinar ".
						" ataques de oportunidade. Além disso, diferente da maioria das armas de ".
						" haste, ele pode ser usado contra adversários em qualquer lugar dentro do seu alcance ".
						" (inclusive inimigos adjacentes). ".
						" Usar um chicote provoca ataques de oportunidade, da mesma forma que utilizar ".
						" uma arma de ataque à distância. ".
						" Como o chicote é capaz de se enrolar nas pernas e outros membros do inimigo, ".
						" o personagem consegue utilizá-lo para realizar um ataque de imobilização. Caso o ".
						" personagem seja imobilizado durante a tentativa de realizar a manobra, ele será capaz ".
						" de soltar o chicote para evitar sua própria imobilização. ".
						" O personagem recebe +2 de bônus nos testes resistidos para desarmar um adversário ".
						" quando utilizar um chicote (inclusive na jogada para evitar ser desarmado, ".
						" caso a tentativa fracasse). ".
						" É possível selecionar o talento Acuidade com Arma para um chicote do tamanho ".
						" indicado ao personagem, aplicando o modificador de Destreza no lugar do modificador ".
						" de Força nas jogadas de ataque, embora ele não seja uma arma leve.";
			break;
		
			
		case "Espada bastarda":
			$this->preco = $this->custoTotal();
			$this->dano = "1d10";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "3 Kg";
			$this->descricao = "As espadas bastardas também são conhecidas como espadas ".
						" de uma mão e meia. Uma espada bastarda é muito grande para ser usada com uma ".
						" única mão sem um treinamento especial; por isso ela é uma arma exótica. Um ".
						" personagem é capaz de utilizar uma espada bastarda com as duas mãos como uma ".
						" arma comum.";
			break;
			
			
			case "Machado de guerra anão":
				$this->preco = $this->custoTotal();
				$this->dano = "1d10";
				$this->decisivo = "x3";
				$this->distancia = "-";
				$this->peso = "4 Kg";
				$this->descricao = "Um machado de guerra anão é muito grande para ".
						" ser usado com uma única mão sem um treinamento especial; por isso ele é uma arma ".
						" exótica. Um personagem Médio é capaz de utilizar um machado de guerra anão ".
						" com as duas mãos como uma arma comum. Um personagem Grande será capaz de ".
						" empunhá-lo como uma única mão, também como uma arma comum. Os anões ".
						" consideram o machado de guerra anão como uma arma comum, mesmo quando o ".
						" utilizam com apenas uma das mãos.";
				break;
				
			case "Corrente com cravos":
				$this->preco = $this->custoTotal();
				$this->dano = "2d4";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "10 Kg";
				$this->descricao = "Embora não tenha cabo, uma corrente com cravos é ".
						" considerada uma arma de haste. O personagem é capaz de atingir um adversário a ".
						" 3 metros de distância usando esta arma. Além disso, diferente da maioria das armas ".
						" de haste, ela pode ser usada contra inimigos adjacentes. ".
						" Como a corrente é capaz de se enrolar nas pernas e outros membros do inimigo, ".
						" o personagem consegue utilizá-la para executar um ataque de imobilização ".
						" à distância contra um oponente. Caso o personagem seja imobilizado durante a ".
						" tentativa de realizar a manobra, ele será capaz de soltara corrente para evitar sua ".
						" própria imobilização. ".
						" O personagem recebe +2 de bônus nos testes resistidos para desarmar um adversário ".
						" quando utilizar uma corrente com cravos (inclusive na jogada para evitar ".
						" ser desarmado, caso a tentativa fracasse). ".
						" É possível selecionar o talento Acuidade com Arma para uma corrente com ".
						" cravos do tamanho indicado ao personagem, aplicando o modificador de Destreza ".
						" no lugar do modificador de Força nas jogadas de ataque, embora ela não seja uma ".
						" arma leve.";
				break;
				
			case "Espada de duas lâminas":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8/1d8";
				$this->decisivo = "19-20/x2";
				$this->distancia = "-";
				$this->peso = "10 Kg";
				$this->descricao = "Uma espada de duas laminas é uma arma dupla. ".
						" O personagem será capaz de lutar como se estivesse empunhando duas armas, mas ".
						" sofrerá todas as penalidades normais associadas a combater com duas armas. Nesse ".
						" aspecto, considere que o usuário empunha uma arma normal e uma arma leve (veja ".
						" Combater com Duas Armas). A criatura que empunhar uma espada de duas lâminas ".
						" em uma única mão não conseguirá usá-la como uma arma dupla – somente uma ".
						" extremidade da arma será utilizada para atacar naquela rodada.";
				break;
				
			case "Machado orc duplo":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8/1d8";
				$this->decisivo = "x3";
				$this->distancia = "-";
				$this->peso = "12,5 Kg";
				$this->descricao = "Um machado ore duplo é uma arma dupla. O personagem ".
						" será capaz de lutar como se estivesse empunhando duas armas, mas sofrerá ".
						" todas as penalidades normais associadas a combater com duas armas. Nesse aspecto, ".
						" considere que o usuário empunha uma arma normal e uma arma leve (veja Combater ".
						" com Duas Armas). Como sugere seu nome, o machado é mais encontrado ".
						" nas mãos de poderosos guerreiros orcs. A criatura que empunhar um machado orc ".
						" duplo em uma única mão não conseguirá usá-lo como uma arma dupla – somente ".
						" uma extremidade da arma será utilizada para atacar naquela rodada.";
				break;
				
			case "Mangual atroz":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8/1d8";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "10 Kg";
				$this->descricao = "Um mangual atroz é uma arma dupla. O personagem será ".
						" capaz de lutar como se estivesse empunhando duas armas, mas sofrerá todas as penalidades ".
						" normais associadas a combater com duas armas. Nesse aspecto, considere ".
						" que o usuário empunha uma arma normal e uma arma leve (veja Combater com ".
						" Duas Armas). A criatura que empunhar um mangual atroz em uma única mão não ".
						" conseguirá usá-lo como uma arma dupla – somente uma extremidade da arma será ".
						" utilizada para atacar naquela rodada. ".
						" O personagem recebe +2 de bônus nos testes resistidos para desarmar um ".
						" oponente quando utilizar um mangual atroz (inclusive na jogada para evitar ser ".
						" desarmado, caso a tentativa fracasse). ".
						" O personagem também será capaz de usar essa arma para executar um ataque ".
						" de imobilização. Caso o personagem seja imobilizado durante a tentativa de realizar ".
						" a manobra, ele será capaz de soltar o mangual atroz para evitar sua própria ".
						" imobilização.";
				break;
				
			case "Martelo gnomo com gancho":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8/1d6";
				$this->decisivo = "x3/x4";
				$this->distancia = "-";
				$this->peso = "3 Kg";
				$this->descricao = "Um martelo gnomo com gancho é uma arma ".
						" dupla. O personagem será capaz de lutar como se estivesse empunhando duas armas, ".
						" mas sofrerá todas as penalidades normais associadas a combater com duas armas. ".
						" Nesse aspecto, considere que o usuário empunha uma arma normal e uma arma ".
						" leve (veja Combater com Duas Armas). O lado maciço é uma arma de concussão ".
						" que inflige 1d6 pontos de dano (dec. x3). O gancho é uma arma perfurante que ".
						" causa 1d4 pontos de dano (dec. x4). O personagem consegue usar uma das pontas ".
						" como arma primária e a outra como arma da mão inábil. A criatura que empunhar ".
						" um martelo gnomo com gancho em uma única mão não conseguirá usá-lo como ".
						" uma arma dupla – somente uma extremidade da arma será utilizada para atacar ".
						" naquela rodada. ".
						" O personagem será capaz de usar o gancho do martelo gnomo para executar ".
						" um ataque de imobilização. Caso o personagem seja imobilizado durante a tentativa ".
						" de realizar a manobra, ele será capaz de soltar o martelo para evitar sua própria ".
						" imobilização. ".
						" Os gnomos consideram o martelo gnomo com gancho uma arma comum.";
				break;
				
			case "Urgrosh anão":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8/1d6";
				$this->decisivo = "x3";
				$this->distancia = "-";
				$this->peso = "11 Kg";
				$this->descricao = "Um urgrosh anão é uma arma dupla. O personagem será capaz ".
						" de lutar como se estivesse empunhando duas armas, mas sofrerá todas as penalidades ".
						" normais associadas a combater com duas armas. Nesse aspecto, considere que o usuário ".
						" empunha uma arma normal e uma arma leve (veja Combater com Duas Armas). ".
						" A extremidade do machado do urgrosh é uma arma cortante que causa 1d8 pontos ".
						" de dano. A extremidade da lança é uma arma perfurante que causa 1d6 pontos de ".
						" dano. O personagem pode usar qualquer lado como arma primária. A outra será a ".
						" arma da mão inábil. A criatura que empunhar um urgrosh anão em uma única mão ".
						" não conseguirá usá-lo como uma arma dupla – somente uma extremidade da arma ".
						" será utilizada para atacar naquela rodada. ".
						" Se o personagem estiver usando uma ação preparada contra uma Investida, ele ".
						" causa o dobro do dano se obtiver sucesso contra o atacante, mas ele precisará utilizar ".
						" a extremidade da lança nessa manobra. ".
						" Um urgrosh também é chamado de lança-machado. Os anões consideram o ".
						" urgrosh anão uma arma comum.";
				break;
				
			case "Besta leve de repetição":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8";
				$this->decisivo = "19-20/x2";
				$this->distancia = "24 metros";
				$this->peso = "3 Kg";
				$this->descricao = "Uma besta leve é recarregada através de uma pequena manivela. ".
						" Recarregar uma besta leve exige uma ação de movimento que provoca ataques de ".
						" oportunidade. ".
						" Normalmente, operar uma besta leve exige as duas mãos. No entanto, o personagem ".
						" é capaz de disparar, mas não recarregar, uma besta leve usando uma única ".
						" mão, mas sofrerá -2 de penalidade nas jogadas de ataque. Ele pode disparar uma ".
						" besta em cada mão, sofrendo as penalidades normais nas jogadas de ataque como ".
						" se estivesse lutando com duas armas leves (consulte a Tabela 8-10: Penalidades para ".
						" Combate com Duas Armas). Essa penalidade se acumula com o modificador por ".
						" disparar com apenas uma mão.";
				break;
				
			case "Besta pesada de repetição":
				$this->preco = $this->custoTotal();
				$this->dano = "1d10";
				$this->decisivo = "19-20/x2";
				$this->distancia = "36 metros";
				$this->peso = "11 Kg";
				$this->descricao = "Uma besta pesada é recarregada através de uma pequena manivela. ".
						" Recarregar uma besta pesada exige uma ação de rodada completa que provoca ".
						" ataques de oportunidade. ".
						" Normalmente, operar uma besta pesada exige as duas mãos. No entanto, o ".
						" personagem é capaz de disparar, mas não recarregar, uma besta pesada usando uma ".
						" única mão, mas sofrerá -4 de penalidade nas jogadas de ataque. Ele pode disparar ".
						" uma besta em cada mão, sofrendo as penalidades normais nas jogadas de ataque ".
						" como se estivesse lutando com duas armas de uma única mão (consulte a Tabela ".
						" 8-10: Penalidades para Combate com Duas Armas). Essa penalidade se acumula ".
						" com o modificador por disparar com apenas uma mão.";
				break;
				
			case "Besta de mão":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "19-20/x2";
				$this->distancia = "9 metros";
				$this->peso = "1 Kg";
				$this->descricao = "Essa arma exótica e comum entre os ladinos e personagens que ".
						" favorecem a furtividade em detrimento da força. Elas podem ser recarregadas com ".
						" a mão inábil. Recarregar uma besta de mão exige uma ação de movimento que ".
						" provoca ataques de oportunidade. ".
						" O personagem é capaz de disparar, mas não recarregar, essa arma usando uma ".
						" única mão, sem sofrer penalidades. Ele pode disparar uma besta em cada mão, ".
						" sofrendo as penalidades normais nas jogadas de ataque como se estivesse lutando ".
						" com duas armas leves (consulte a Tabela 8-10: Penalidades para Combate com ".
						" Duas Armas).";
				break;
				
			case "Boleadeira":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "x2";
				$this->distancia = "3 metros";
				$this->peso = "1 Kg";
				$this->descricao = "Uma boleadeira consiste de duas ou três esferas pesadas de madeira ".
						" conectadas com pedaços de corda. Como a boleadeira é capaz de se enrolar ".
						" nas pernas e outros membros do inimigo, o personagem consegue utilizá-la para ".
						" realizar um ataque de imobilização á distancia contra um oponente. O personagem ".
						" não pode ser imobilizado durante sua tentativa de imobilização quando arremessa ".
						" uma boleadeira.";
				break;
				
			case "Rede":
				$this->preco = $this->custoTotal();
				$this->dano = "-";
				$this->decisivo = "-";
				$this->distancia = "3 metros";
				$this->peso = "3 Kg";
				$this->descricao = "Uma rede de combate possui pequenos dentes em sua trama e uma ".
						" corda guia para controlar os oponentes aprisionados. É usada para prender um ".
						" adversário. ".
						" Quando arremessa uma rede, o personagem realiza um ataque de toque à ".
						" distância contra o alvo. O alcance máximo é 3 metros. Se obtiver sucesso, o alvo ".
						" estará preso. Ele sofre -2 de penalidade nas jogadas de ataque e –4 de penalidade ".
						" de Destreza, consegue percorrer somente metade do seu deslocamento e não pode ".
						" realizar Investidas ou correr. Se o personagem estiver segurando a corda guia e obtiver ".
						" sucesso em um teste resistido de Força contra o alvo, a criatura apenas conseguirá se ".
						" mover dentro dos limites permitidos pela corda. Se a vítima conjurar uma magia, deve ".
						" obter sucesso em um teste de Concentração (CD 15) ou a magia será perdida. ".
						" A criatura presa será capaz de fugir com um teste de Arte de Fuga (CD 20), ".
						" usando uma ação de rodada completa. A rede tem 5 pontos de vida e pode ser ".
						" rompida com um teste de Força (CD 25), que também exige uma ação de rodada ".
						" completa. ".
						" A rede somente é útil contra criaturas de uma categoria de tamanho superior ".
						" ou menores. Por exemplo, uma criatura Pequena empunhando uma rede é capaz ".
						" de prender criaturas Diminutas, Pequenas e Médias. ".
						" A rede deve estar dobrada para ser arremessada com eficiência. Na primeira ".
						" ocasião que o personagem arremessar a rede em um combate, ele deve obter sucesso ".
						" em um ataque de toque à distância regular. Depois que a rede estiver desdobrada, ".
						" ele sofre -4 de penalidade nas jogadas de ataque. Um personagem treinado precisará ".
						" de 2 rodadas para dobrar uma rede; um personagem sem treinamento precisará de ".
						" 4 rodadas.";
				break;
				
			case "Shuriken":
				$this->preco = $this->custoTotal();
				$this->dano = "1d2";
				$this->decisivo = "x2";
				$this->distancia = "3 metros";
				$this->peso = "0,25 Kg";
				$this->descricao = "Uma shuriken é uma arma especial para monges. Essa característica ".
						" concede opções especiais aos monges que o utilizarem em combate. ".
						" Embora seja uma arma de arremesso, o shuriken é considerado uma munição ".
						" para determinar o tempo de recarga, a fabricação de um shuriken (obra-prima) ou ".
						" qualquer versão especial da arma (veja Armas Obras-Prima, a seguir). Um shuriken ".
						" tem a mesma chance de ser quebrado ou perdido que uma flecha ou virote.";
				break;
				
			case "Adaga":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "19-20/x2";
				$this->distancia = "3 metros";
				$this->peso = "0,5 Kg";
				$this->descricao = "A adaga é uma arma secundária comum. O personagem recebe +2 de ".
						" bônus nos testes de Prestidigitação realizados para esconder uma adaga no corpo ".
						" (consulte a perícia Prestidigitação).";
				
			case "Adaga de soco":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "x3";
				$this->distancia = "-";
				$this->peso = "0,5 Kg";
				$this->descricao = "Essa adaga permite que o personagem utilize sua Força com ".
						" mais eficácia, tornado seus golpes mais letais (decisivo x3).";
				break;
				
			case "Foice curta":
				$this->preco = $this->custoTotal();
				$this->dano = "1d6";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "1 Kg";
				$this->descricao = "Embora pareça com o instrumento agrícola homônimo, essa foice ".
							" é balanceada e reforçada para o combate. É a arma favorita dos druidas e personagens ".
							" que desejam uma arma que será ignorada por guardas e vigias. ".
							" Devido à lâmina afiada da foice curta, o personagem e capaz de usá-la para ".
							" realizar um ataque de imobilização. Caso o personagem seja imobilizado durante ".
							" a tentativa de realizar a manobra, ele será capaz de soltar a foice curta para evitar ".
							" sua própria imobilização.";
				break;
				
			case "Maça leve":
				$this->preco = $this->custoTotal();
				$this->dano = "1d6";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "2 Kg";
				$this->descricao = "Uma maça é feita de metal, até mesmo o cabo, o que a ".
						" torna muito pesada e difícil de quebrar.";
				break;
			
			case "Manopla com cravos":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "0,5 Kg";
				$this->descricao = "Um oponente não é capaz de desarmar um personagem ".
						" que utilize uma manopla com cravos. O custo e o peso indicam uma única manopla ".
						" com cravos. Em todos os demais aspectos, um golpe com uma manopla com cravos ".
						" é considerado um ataque desarmado.";
				break;
				
			case "Clava":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "x2";
				$this->distancia = "3 metros";
				$this->peso = "1,5 Kg";
				$this->descricao = "Uma clava de madeira é facilmente encontrada e não tem custo. Ela ".
							" geralmente possui pregos, cravos ou é envolvida com faixas de metal.";
				break;
				
			case "Lança curta":
				$this->preco = $this->custoTotal();
				$this->dano = "1d6";
				$this->decisivo = "x2";
				$this->distancia = "6 metros";
				$this->peso = "1,5 Kg";
				$this->descricao = "Uma clava de madeira é facilmente encontrada e não tem custo. Ela ".
							" geralmente possui pregos, cravos ou é envolvida com faixas de metal.";
				break;
				
			case "Maça pesada":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "4 Kg";
				$this->descricao = "Uma maça é feita de metal, até mesmo o cabo, o que a ".
							" torna muito pesada e difícil de quebrar.";
				break;
				
			case "Maça-estrela":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "3 Kg";
				$this->descricao = "Essa arma simples combina o impacto da clava com a força ".
							" perfurante dos cravos.";
				break;
				
			case "Bordão":
				$this->preco = $this->custoTotal();
				$this->dano = "1d6/1d6";
				$this->decisivo = "x2";
				$this->distancia = "-";
				$this->peso = "2 Kg";
				$this->descricao = "O bordão é a arma favorita de muitos personagens, desde viajantes, ".
						" plebeus e comerciantes até monges, rangers e magos. Um bordão é uma arma dupla. ".
						" O personagem será capaz de lutar como se estivesse empunhando duas armas, ".
						" mas sofrerá todas as penalidades normais associadas a combater com duas armas. ".
						" Nesse aspecto, considere que o usuário empunha uma arma normal e uma arma ".
						" leve (veja Combater com Duas Armas). É possível atacar com cada extremidade ".
						" separadamente, uma ação que permite obter vantagem das aberturas na defesa de seu ".
						" oponente. A criatura que empunhar um bordão em uma única mão não conseguirá ".
						" usá-lo como uma arma dupla – somente uma extremidade da arma será utilizada ".
						" para atacar naquela rodada. ".
						" O bordão é uma arma especial para monges. Essa característica concede opções ".
						" especiais aos monges que o utilizarem em combate.";
				break;
				
			case "Lança":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8";
				$this->decisivo = "x3";
				$this->distancia = "6 metros";
				$this->peso = "3 Kg";
				$this->descricao = "Uma das armas mais simples que existem, a lança é a arma predileta ".
							" de druidas e feiticeiros. Ela pode ser arremessada. Se o personagem estiver usando ".
							" uma ação preparada contra uma Investida, ele causa o dobro do dano se obtiver ".
							" sucesso contra o atacante.";
				break;
				
			case "Lança longa":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8";
				$this->decisivo = "x3";
				$this->distancia = "-";
				$this->peso = "4,5 Kg";
				$this->descricao = "A lança longa é uma arma de haste. O personagem é capaz de ".
						" atingir um adversário a 3 metros de distância, mas não consegue utilizá-la contra ".
						" um oponente adjacente. Se o personagem estiver usando uma ação preparada contra ".
						" uma Investida, ele causará o dobro do dano da lança se obtiver sucesso contra o ".
						" atacante.";
				break;
				
			case "Azagaia":
				$this->preco = $this->custoTotal();
				$this->dano = "1d6";
				$this->decisivo = "x2";
				$this->distancia = "9 metros";
				$this->peso = "1 Kg";
				$this->descricao = "Essa arma é uma lança leve e flexível desenvolvida para arremesso. ".
						" O personagem é capaz de usá-la em combate corporal, mas ela não é eficaz. Como ".
						" não foi projetada para o combate corporal, considere que o personagem não possui ".
						" o talento adequado para utilizá-la nessa situação e aplique -4 de penalidade nas ".
						" jogadas de ataque.";
				break;
				
			case "Besta leve":
				$this->preco = $this->custoTotal();
				$this->dano = "1d8";
				$this->decisivo = "19-20/x2";
				$this->distancia = "24 metros";
				$this->peso = "2 Kg";
				$this->descricao = "Uma besta leve é recarregada através de uma pequena manivela. ".
						" Recarregar uma besta leve exige uma ação de movimento que provoca ataques de ";
						" oportunidade. ".
						" Normalmente, operar uma besta leve exige as duas mãos. No entanto, o personagem ".
						" é capaz de disparar, mas não recarregar, uma besta leve usando uma única ".
						" mão, mas sofrerá -2 de penalidade nas jogadas de ataque. Ele pode disparar uma ".
						" besta em cada mão, sofrendo as penalidades normais nas jogadas de ataque como ".
						" se estivesse lutando com duas armas leves (consulte a Tabela 8-10: Penalidades para ".
						" Combate com Duas Armas). Essa penalidade se acumula com o modificador por ".
						" disparar com apenas uma mão.";
				break;
				
			case "Besta pesada":
				$this->spreco = $this->custoTotal();
				$this->dano = "1d10";
				$this->decisivo = "19-20/x2";
				$this->distancia = "36 metros";
				$this->peso = "4 Kg";
				$this->descricao = "Uma besta pesada é recarregada através de uma pequena manivela. ".
						" Recarregar uma besta pesada exige uma ação de rodada completa que provoca ".
						" ataques de oportunidade. ".
						" Normalmente, operar uma besta pesada exige as duas mãos. No entanto, o ".
						" personagem é capaz de disparar, mas não recarregar, uma besta pesada usando uma ".
						" única mão, mas sofrerá -4 de penalidade nas jogadas de ataque. Ele pode disparar ".
						" uma besta em cada mão, sofrendo as penalidades normais nas jogadas de ataque ".
						" como se estivesse lutando com duas armas de uma única mão (consulte a Tabela ".
						" 8-10: Penalidades para Combate com Duas Armas). Essa penalidade se acumula ".
						" com o modificador por disparar com apenas uma mão.";
				break;
				
			case "Dardo":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "x2";
				$this->distancia = "6 metros";
				$this->peso = "1 Kg";
				$this->descricao = "Um dardo tem o mesmo tamanho de uma flecha grande e uma ponta ".
						" pesada. Essencialmente, ele é uma azagaia Pequena";
				break;
				
			case "Funda":
				$this->preco = $this->custoTotal();
				$this->dano = "1d4";
				$this->decisivo = "x2";
				$this->distancia = "15 metros";
				$this->peso = "0,5 Kg";
				$this->descricao = "Uma funda dispara bolinhas de chumbo. Ela não alcança oponentes ".
						" distantes como uma besta leve, nem é poderosa como um arco, mas é barata e ".
						" facilmente improvisada com materiais comuns. Os druidas e halflings apreciam as ".
						" fundas. O modificador de Força do personagem é aplicado nas jogadas de dano, ".
						" semelhante às armas de arremesso. O personagem é capaz de disparar, mas não ".
						" recarregar, essa arma usando uma única mão, sem sofrer penalidades. Recarregar ".
						" uma funda exige uma ação de movimento que provoca ataques de oportunidade, o ".
						" processo requer as duas mãos. ".
						" É possível disparar pedras comuns com uma funda, mas elas não são densas e ".
						" balanceadas como as balas de funda. Portanto, esse ataque infligirá o dano de uma ".
						" arma projetada para uma criatura de uma categoria de tamanho inferior ao personagem ".
						" (por exemplo, 1d3 em vez de 1d4, ou 1d2 no lugar de 1d3) e acarreta -1 de ".
						" penalidade nas jogadas de ataque.";
				break;
				
		}
		
	}
}

?>