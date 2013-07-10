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
		$categoria = Array ("Armaduras Leves","Armaduras M�dias","Armaduras Pesadas");
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
			$nome1 = Array ("Acolchoada","Corselete de Couro","Corselete de Couro batido","Camis�o de Cota de Malha");
			$tamanho  = count($nome1);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome1[$escolido];
		}else if($tipo == "Armaduras M�dias"){
			$nome2 = Array ("Gib�o de Peles","Brunea","Cota de Malha","Peitoral de A�o");
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
			$this->descricao = "\nEssa armadura � composta de v�rias capas acolchoadas, ".
					" feito de tecido refor�ado. Ela � muito quente e costuma ficar impregnada de suor, ".
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
			$this->descricao = "\nO peitoral e os protetores de ombros dessa armadura s�o ".
					" feitos de couro enrijecido em �leo fervente. As demais partes s�o feitas de couro ".
					" flex�vel.";
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
			$this->descricao = "\nEssa armadura � fabricada com couro resistente, ".
					" mas flex�vel (diferente do couro enrijecido do corselete de couro comum), refor�ado ".
					" com rebites de metal.";
			break;
			
		case "Camis�o de Cota de Malha":
			$this->custo = 100;
			$this->bonusNaCa = "+4";
			$this->destrezaMaxima = "+4";
			$this->penalidadeNaPericia = "-2";
			$this->falhaDeMagiaArcana = "20%";
			$this->deslocamentoMedio = "9 m";
			$this->deslocamentoPequeno = "6 m";
			$this->peso = "12.5 kg";
			$this->descricao = "\n Um camis�o de cota de malha protege o torso, ".
					" deixando os membros do personagem livres e com liberdade de movimento. Ela ".
					" inclui um gib�o acolchoado que evita a fric��o com a pele e amortece o impacto de ".
					" golpes. A armadura inclui um elmo de metal.";
			break;
			
		case "Gib�o de Peles":
			$this->custo = 15;
			$this->bonusNaCa = "+3";
			$this->destrezaMaxima = "+4";
			$this->penalidadeNaPericia = "-3";
			$this->falhaDeMagiaArcana = "20%";
			$this->deslocamentoMedio = "6 m";
			$this->deslocamentoPequeno = "4,5 m";
			$this->peso = "12,5 kg";
			$this->descricao = "\nEssa armadura � fabricada com m�ltiplas camadas de couro ".
					" e peles de animais. Ela � r�gida e atrapalha bastante os movimentos. � a armadura ".
					" preferida dos druidas que n�o usam armaduras met�licas.";
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
			$this->descricao = "\nEssa armadura � feita de pequenos an�is met�licos entrela�ados. ".
					" Ela inclui um gib�o acolchoado que evita a fric��o com a pele e amortece o impacto ".
					" de golpes. A maior parte do peso da armadura fica nos ombros, tomando-a uma ".
					" armadura incomoda de usar por um longo per�odo de tempo. A armadura inclui ".
					" um par de manoplas.";
			break;
			
		case "Peitoral de A�o":
			$this->custo = 200;
			$this->bonusNaCa = "+5";
			$this->destrezaMaxima = "+3";
			$this->penalidadeNaPericia = "-4";
			$this->falhaDeMagiaArcana = "25%";
			$this->deslocamentoMedio = "6 m";
			$this->deslocamentoPequeno = "4,5 m";
			$this->peso = "15 kg";
			$this->descricao = "\nUm peitoral de a�o recobre o t�rax e as costas do personagem. ".
					" A armadura inclui um elmo e uma prote��o de metal para as pernas. Uma camisa ou ".
					" camis�o de couro � colocado sob o peitoral para proteger os membros sem restringir ".
					" demais os movimentos do personagem.";
			break;
			
		case "Cota de Talas":
			$this->custo = 20;
			$this->bonusNaCa = "+6";
			$this->destrezaMaxima = "+0";
			$this->penalidadeNaPericia = "-7";
			$this->falhaDeMagiaArcana = "40%";
			$this->deslocamentoMedio = "6 m�";
			$this->deslocamentoPequeno = "4,5� m";
			$this->peso = "22,5 kg";
			$this->descricao = "\nEssa armadura � composta de pequenas talas verticais de metal, ".
					" costuradas sobre couro e usada sobre um gib�o acolchoado. Uma cota de malha ".
					" flex�vel protege as juntas. A armadura inclui um par de manoplas.";
			break;
			
		case "Loriga Segmentada":
			$this->custo = 250;
			$this->bonusNaCa = "+6";
			$this->destrezaMaxima = "+1";
			$this->penalidadeNaPericia = "-6";
			$this->falhaDeMagiaArcana = "35%";
			$this->deslocamentoMedio = "6 m�";
			$this->deslocamentoPequeno = "4,5� m";
			$this->peso = "17,5 kg";
			$this->descricao = "\nEssa armadura � composta de tiras verticais de metal sobrepostas, ".
					" costuradas sobre um forro de couro ou cota de malha. Essas tiras cobrem ".
					" as �reas vitais, enquanto a cota de malha e o couro protegem as juntas e permitem ".
					" o movimento. Correias e fivelas distribuem o peso uniformemente. A armadura ".
					" inclui um par de manoplas.";
			break;
			
		case "Meia Armadura":
			$this->custo = 600;
			$this->bonusNaCa = "+7";
			$this->destrezaMaxima = "+0";
			$this->penalidadeNaPericia = "-7";
			$this->falhaDeMagiaArcana = "40%";
			$this->deslocamentoMedio = "6 m�";
			$this->deslocamentoPequeno = "4,5� m";
			$this->peso = "25 kg";
			$this->descricao = "\nEssa armadura � uma combina��o de cota de malha e placas ".
					" de metal (peitoral, ombreiras, protetores de antebra�o, pernas e abdome) para as ".
					" �reas vitais. Correias e fivelas sustentam a armadura e distribuem o peso por todo o ".
					" corpo, mas a armadura estar� menos fixa que a armadura completa. A meia-armadura ".
					" inclui um par de manoplas.";
			break;
			
		case "Armadura de Batalha":
			$this->custo = 1500;
			$this->bonusNaCa = "+8";
			$this->destrezaMaxima = "+1";
			$this->penalidadeNaPericia = "-6";
			$this->falhaDeMagiaArcana = "35%";
			$this->deslocamentoMedio = "6 m�";
			$this->deslocamentoPequeno = "4,5� m";
			$this->peso = "22,5 kg";
			$this->descricao = "\nEssa armadura consiste de placas forjadas e encaixadas ".
					" de modo a recobrir o corpo inteiro. A armadura inclui manoplas, botas pesadas de ".
					" couro, um elmo com visor e um gib�o grosso e acolchoado (para ser usado debaixo ".
					" das placas). Correias e fivelas distribuem o peso por todo o corpo, portanto ela n�o ".
					" atrapalha o movimento como uma cota de talas, embora a cota seja mais leve. Cada ".
					" armadura deve ser ajustada para o seu usu�rio por um mestre armeiro, mas uma ".
					" armadura de batalha recuperada pode ser adaptada para um novo propriet�rio com ".
					" o custo de 200 a 800 (2d4 x 100) pe�as de ouro.";
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
			
		case "Camis�o de Cota de Malha":
			$this->custo = 250;
			$this->penalidadeNaPericia = "-1";
			break;
			
		case "Gib�o de Peles":
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
			
		case "Peitoral de A�o":
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