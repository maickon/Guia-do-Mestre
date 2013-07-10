<?php


 	class Armaduras {
	
	var $categoria = "Armaduras ";
	var $nome = "";
	var $tipo = "";
	var $custo = 0;
	var $bonusNaCa = "";
	var $destrezaMaxima = "";
	var $penalidadeNaPericia = "";
	var $falhaDeMagiaArcana  = "";
	var $deslocamentoMedio = "";
	var $deslocamentoPequeno = "";
	var $peso = "";
	var $descricao = "";
	
	
	
	function __construct($nome,$tipo,$custo,$custo,$bonusNaCa,$destrezaMaxima,$penalidadeNaPericia,$falhaDeMagiaArcana,
						$deslocamentoMedio,$deslocamentoPequeno,$peso,$descricao,$categoria){
		
	}
	
	function gerarTipoDeArmadura(){
		$categoria = Array ("Armaduras Leves","Armaduras Mщdias","Armaduras Pesadas");
		$tamanho  = count($categoria);
		$escolido = rand(0, $tamanho-1);
		$this->tipo = $categoria[$escolido];
		
		return $this->tipo;
	}
	
	function gerarNomeDaArmadura(){
		$tipo = $this->tipo;
		$tamanho;
		$escolido;

		if($tipo == "Armaduras Leves"){
			$nome1 = Array ("Acolchoada","Corselete de Couro","Corselete de Couro batido","Camisуo de Cota de Malha");
			$tamanho  = count($nome1);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome1[$escolido];
		}else if($tipo == "Armaduras Mщdias"){
			$nome2 = Array ("Gibуo de Peles","Brunea","Cota de Malha","Peitoral de Aчo");
			$tamanho  = count($nome2);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome2[$escolido];
		}else if($tipo == "Armaduras Pesadas"){
			$nome3 = Array("Cota de Talas","Loriga Segmentada","Meia Armadura","Armadura de Batalha");
			$tamanho  = count($nome3);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome3[$escolido];
		}
		
		return $this->nome; 
	}
	
	
	
	function gerarArmadura(){
		$nome = $this->nome;
		switch($nome){
			
		case "Alcolchoada":
			$this->custo = 5;
			$this->bonusNaCa = "+1";
			$this->destrezaMaxima = "+8";
			$this->penalidadeNaPericia = "0";
			$this->falhaDeMagiaArcana = "5%";
			$this->deslocamentoMedio = "9 m";
			$this->deslocamentoPequeno = "6 m";
			$this->peso = "5 kg";
			$this->descricao = "\nEssa armadura щ composta de vсrias capas acolchoadas, ".
					" feito de tecido reforчado. Ela щ muito quente e costuma ficar impregnada de suor, ".
					" sujeira, piolhos e pulgas.";
			break;
			
		case "Corselete de Couro":
			$this->custo = 10;
			$this->bonusNaCa = "+2";
			$this->destrezaMaxima = "+6";
			$this->penalidadeNaPericia = "0";
			$this->falhaDeMagiaArcana = "10%";
			$this->deslocamentoMedio = "9 m";
			$this->deslocamentoPequeno = "6 m";
			$this->peso = "7.5 kg";
			$this->descricao = "\nO peitoral e os protetores de ombros dessa armadura sуo ".
					" feitos de couro enrijecido em ѓleo fervente. As demais partes sуo feitas de couro ".
					" flexэvel.";
			break;
			
		case "Corselete de Couro batido":
			$this->custo = 25;
			$this->bonusNaCa = "+3";
			$this->destrezaMaxima = "+5";
			$this->penalidadeNaPericia = "-1";
			$this->falhaDeMagiaArcana = "15%";
			$this->deslocamentoMedio = "9 m";
			$this->deslocamentoPequeno = "6 m";
			$this->peso = "10 kg";
			$this->descricao = "\nEssa armadura щ fabricada com couro resistente, ".
					" mas flexэvel (diferente do couro enrijecido do corselete de couro comum), reforчado ".
					" com rebites de metal.";
			break;
			
		case "Camisуo de Cota de Malha":
			$this->custo = 100;
			$this->bonusNaCa = "+4";
			$this->destrezaMaxima = "+4";
			$this->penalidadeNaPericia = "-2";
			$this->falhaDeMagiaArcana = "20%";
			$this->deslocamentoMedio = "9 m";
			$this->deslocamentoPequeno = "6 m";
			$this->peso = "12.5 kg";
			$this->descricao = "\n Um camisуo de cota de malha protege o torso, ".
					" deixando os membros do personagem livres e com liberdade de movimento. Ela ".
					" inclui um gibуo acolchoado que evita a fricчуo com a pele e amortece o impacto de ".
					" golpes. A armadura inclui um elmo de metal.";
			break;
			
		case "Gibуo de Peles":
			$this->custo = 15;
			$this->bonusNaCa = "+3";
			$this->destrezaMaxima = "+4";
			$this->penalidadeNaPericia = "-3";
			$this->falhaDeMagiaArcana = "20%";
			$this->deslocamentoMedio = "6 m";
			$this->deslocamentoPequeno = "4,5 m";
			$this->peso = "12,5 kg";
			$this->descricao = "\nEssa armadura щ fabricada com mњltiplas camadas de couro ".
					" e peles de animais. Ela щ rэgida e atrapalha bastante os movimentos. Щ a armadura ".
					" preferida dos druidas que nуo usam armaduras metсlicas.";
			break;
			
		case "Brunea":
			$this->custo = 50;
			$this->bonusNaCa = "+4";
			$this->destrezaMaxima = "+3";
			$this->penalidadeNaPericia = "-4";
			$this->falhaDeMagiaArcana = "25%";
			$this->deslocamentoMedio = "6 m";
			$this->deslocamentoPequeno = "4,5 m";
			$this->peso = "15 kg";
			$this->descricao = "\nEssa armadura e formada por um colete e protetores de perna (algumas ".
					" vezes inclui uma saia) de couro, coberta com plaquetas de metal sobrepostas, semelhantes ".
					" a escamas de um peixe. A armadura inclui um par de manoplas.";
			break;
			
		case "Cota de Malha":
			$this->custo = 150;
			$this->bonusNaCa = "+5";
			$this->destrezaMaxima = "+2";
			$this->penalidadeNaPericia = "-5";
			$this->falhaDeMagiaArcana = "30%";
			$this->deslocamentoMedio = "6 m";
			$this->deslocamentoPequeno = "4,5 m";
			$this->peso = "20 kg";
			$this->descricao = "\nEssa armadura щ feita de pequenos anщis metсlicos entrelaчados. ".
					" Ela inclui um gibуo acolchoado que evita a fricчуo com a pele e amortece o impacto ".
					" de golpes. A maior parte do peso da armadura fica nos ombros, tomando-a uma ".
					" armadura incomoda de usar por um longo perэodo de tempo. A armadura inclui ".
					" um par de manoplas.";
			break;
			
		case "Peitoral de Aчo":
			$this->custo = 200;
			$this->bonusNaCa = "+5";
			$this->destrezaMaxima = "+3";
			$this->penalidadeNaPericia = "-4";
			$this->falhaDeMagiaArcana = "25%";
			$this->deslocamentoMedio = "6 m";
			$this->deslocamentoPequeno = "4,5 m";
			$this->peso = "15 kg";
			$this->descricao = "\nUm peitoral de aчo recobre o tѓrax e as costas do personagem. ".
					" A armadura inclui um elmo e uma proteчуo de metal para as pernas. Uma camisa ou ".
					" camisуo de couro щ colocado sob o peitoral para proteger os membros sem restringir ".
					" demais os movimentos do personagem.";
			break;
			
		case "Cota de Talas":
			$this->custo = 20;
			$this->bonusNaCa = "+6";
			$this->destrezaMaxima = "+0";
			$this->penalidadeNaPericia = "-7";
			$this->falhaDeMagiaArcana = "40%";
			$this->deslocamentoMedio = "6 mВ";
			$this->deslocamentoPequeno = "4,5В m";
			$this->peso = "22,5 kg";
			$this->descricao = "\nEssa armadura щ composta de pequenas talas verticais de metal, ".
					" costuradas sobre couro e usada sobre um gibуo acolchoado. Uma cota de malha ".
					" flexэvel protege as juntas. A armadura inclui um par de manoplas.";
			break;
			
		case "Loriga Segmentada":
			$this->custo = 250;
			$this->bonusNaCa = "+6";
			$this->destrezaMaxima = "+1";
			$this->penalidadeNaPericia = "-6";
			$this->falhaDeMagiaArcana = "35%";
			$this->deslocamentoMedio = "6 mВ";
			$this->deslocamentoPequeno = "4,5В m";
			$this->peso = "17,5 kg";
			$this->descricao = "\nEssa armadura щ composta de tiras verticais de metal sobrepostas, ".
					" costuradas sobre um forro de couro ou cota de malha. Essas tiras cobrem ".
					" as сreas vitais, enquanto a cota de malha e o couro protegem as juntas e permitem ".
					" o movimento. Correias e fivelas distribuem o peso uniformemente. A armadura ".
					" inclui um par de manoplas.";
			break;
			
		case "Meia Armadura":
			$this->custo = 600;
			$this->bonusNaCa = "+7";
			$this->destrezaMaxima = "+0";
			$this->penalidadeNaPericia = "-7";
			$this->falhaDeMagiaArcana = "40%";
			$this->deslocamentoMedio = "6 mВ";
			$this->deslocamentoPequeno = "4,5В m";
			$this->peso = "25 kg";
			$this->descricao = "\nEssa armadura щ uma combinaчуo de cota de malha e placas ".
					" de metal (peitoral, ombreiras, protetores de antebraчo, pernas e abdome) para as ".
					" сreas vitais. Correias e fivelas sustentam a armadura e distribuem o peso por todo o ".
					" corpo, mas a armadura estarс menos fixa que a armadura completa. A meia-armadura ".
					" inclui um par de manoplas.";
			break;
			
		case "Armadura de Batalha":
			$this->custo = 1500;
			$this->bonusNaCa = "+8";
			$this->destrezaMaxima = "+1";
			$this->penalidadeNaPericia = "-6";
			$this->falhaDeMagiaArcana = "35%";
			$this->deslocamentoMedio = "6 mВ";
			$this->deslocamentoPequeno = "4,5В m";
			$this->peso = "22,5 kg";
			$this->descricao = "\nEssa armadura consiste de placas forjadas e encaixadas ".
					" de modo a recobrir o corpo inteiro. A armadura inclui manoplas, botas pesadas de ".
					" couro, um elmo com visor e um gibуo grosso e acolchoado (para ser usado debaixo ".
					" das placas). Correias e fivelas distribuem o peso por todo o corpo, portanto ela nуo ".
					" atrapalha o movimento como uma cota de talas, embora a cota seja mais leve. Cada ".
					" armadura deve ser ajustada para o seu usuсrio por um mestre armeiro, mas uma ".
					" armadura de batalha recuperada pode ser adaptada para um novo proprietсrio com ".
					" o custo de 200 a 800 (2d4 x 100) peчas de ouro.";
			break;
			
		
		}
	}
	
	
	function tornarArmaduraObraPrima(){
		$nome = $this->nome;
		switch($nome){
			
		case "Alcolchoada":
			$this->custo = 155;
			break;
			
		case "Corselete de Couro":
			$this->custo = 160;
			break;
			
		case "Corselete de Couro batido":
			$this->custo = 175;
			$this->penalidadeNaPericia = "0";
			break;
			
		case "Camisуo de Cota de Malha":
			$this->custo = 250;
			$this->penalidadeNaPericia = "-1";
			break;
			
		case "Gibуo de Peles":
			$this->custo = 165;
			$this->penalidadeNaPericia = "-2";
			break;
			
		case "Brunea":
			$this->custo = 200;
			$this->penalidadeNaPericia = "-3";
			break;
			
		case "Cota de Malha":
			$this->custo = 300;
			$this->penalidadeNaPericia = "-4";
			break;
			
		case "Peitoral de Aчo":
			$this->custo = 350;
			$this->penalidadeNaPericia = "-3";
			break;
			
		case "Cota de Talas":
			$this->custo = 350;
			$this->penalidadeNaPericia = "-6";
			break;
			
		case "Loriga Segmentada":
			$this->custo = 750;
			$this->penalidadeNaPericia = "-5";
			break;
			
		case "Meia Armadura":
			$this->custo = 1650;
			$this->penalidadeNaPericia = "-6";
			break;
			
		case "Armadura de Batalha":
			$this->custo = 1500;
			$this->penalidadeNaPericia = "-5";
			break;
			
		
		}
	}

}



?>