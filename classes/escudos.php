<?php

	class Escudos {
	
	var $categoria = "Escudos ";
	var $nome = "";
	var $custo = 0;
	var $bonusNaCa = "";
	var $destrezaMaxima = "";
	var $penalidadeNaPericia = "";
	var $falhaDeMagiaArcana  = "";
	var $deslocamentoMedio = "";
	var $deslocamentoPequeno = "";
	var $peso = "";
	var $descricao = "";
	
	
	function __construct($nome,$custo,$bonusNaCa,$destrezaMaxima,$penalidadeNaPericia,$falhaDeMagiaArcana,
						 $deslocamentoMedio,$deslocamentoPequeno,$peso,$descricao,$categoria){
		
			$this->nome = $nome;
			$this->custo = $custo;
			$this->bonusNaCa = $bonusNaCa;
			$this->destrezaMaxima = $destrezaMaxima;
			$this->penalidadeNaPericia = $penalidadeNaPericia;
			$this->falhaDeMagiaArcana = $falhaDeMagiaArcana;
			$this->deslocamentoMedio = $deslocamentoMedio;
			$this->deslocamentoPequeno = $deslocamentoPequeno;
			$this->peso = $peso;
			$this->descricao = $descricao;
			$this->categoria = $categoria;
	}
	
	
	function gerarNomeDoEscudo(){
		$nome = array("Broquel","Escudo pequeno de madeira","Escudo pequeno de metal",
				"Escudo grande de madeira", "Escudo grande de metal","Escudo de corpo");
		$tamanho  = count($nome);
		$escolido = rand(0, $tamanho-1);
		$this->nome = $nome[$escolido];
		return $this->nome;
	}
	
	
	function gerarEscudo(){
		$nome = $this->nome;
		switch($nome){
			
		case "Broquel":
			$this->custo = 15;
			$this->bonusNaCa = "+1";
			$this->destrezaMaxima = "-";
			$this->penalidadeNaPericia = "-1";
			$this->falhaDeMagiaArcana = "5%";
			$this->deslocamentoMedio = "- ";
			$this->deslocamentoPequeno = "- ";
			$this->peso = "2,5 kg";
			$this->descricao = "\nEsse pequeno escudo metбlico й amarrado no antebraзo do personagem, ".
					" permitindo o uso de uma besta ou arco sem penalidades. O personagem ".
					" tambйm pode usar o braзo do escudo para empunhar uma arma (seja uma arma ".
					" na mгo inбbil ou para empunhar uma arma de duas mгos), mas isso acarreta -1 de ".
					" penalidade na jogada de ataque em funзгo do peso adicional no braзo. Essa penalidade ".
					" se acumula com o modificador de lutar usando a mгo inбbil ou combater ".
					" com duas armas. Quando usar uma arma na mгo inбbil, o personagem nгo recebe ".
					" o bфnus do broquel na CA durante o restante da rodada. ".
					" Nгo й possнvel executar um ataque usando um broquel.";
			break;
			
		case "Escudo pequeno de madeira":
			$this->custo = 3;
			$this->bonusNaCa = "+1";
			$this->destrezaMaxima = "-";
			$this->penalidadeNaPericia = "-1";
			$this->falhaDeMagiaArcana = "5%";
			$this->deslocamentoMedio = "- ";
			$this->deslocamentoPequeno = "- ";
			$this->peso = "2,5 kg";
			$this->descricao = "\n Um escudo deve ser amarrado no ".
					" antebraзo e empunhado na mгo inбbil. O escudo pequeno permite que o personagem ".
					" carregue outro item na mгo inбbil, embora esse objeto nгo possa ser usado ".
					" como arma. ".
					" Madeira ou Aзo: Os escudos de madeira e de metal oferecem a mesma proteзгo ".
					" bбsica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem й capaz de golpear um oponente com seu ".
					" escudo pequeno, usando-o como uma arma na mгo inбbil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com escudo. Quando й utilizado dessa ".
					" forma, um escudo pequeno serб uma arma comum de concussгo. Em relaзгo as ".
					" penalidades nas jogadas de ataque, considere um escudo pequeno como uma arma ".
					" leve. Quando utiliza seu escudo como arma, o personagem perde seu bфnus de ".
					" escudo na CA atй a prуxima aзгo (geralmente na rodada subseqьente). O bфnus de ".
					" melhoria do escudo nгo afeta sua eficбcia de ataque, embora seja possнvel encantб-lo ".
					" como uma arma mбgica. ". 
					" Gibгo de Peles";
			break;
			
		case "Escudo pequeno de metal":
			$this->custo = 9;
			$this->bonusNaCa = "+1";
			$this->destrezaMaxima = "-";
			$this->penalidadeNaPericia = "-1";
			$this->falhaDeMagiaArcana = "5%";
			$this->deslocamentoMedio = "- ";
			$this->deslocamentoPequeno = "- ";
			$this->peso = "3 kg";
			$this->descricao = " \nUm escudo deve ser amarrado no ".
					" antebraзo e empunhado na mгo inбbil. O escudo pequeno permite que o personagem ".
					" carregue outro item na mгo inбbil, embora esse objeto nгo possa ser usado ".
					" como arma. ".
					" Madeira ou Aзo: Os escudos de madeira e de metal oferecem a mesma proteзгo ".
					" bбsica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem й capaz de golpear um oponente com seu ".
					" escudo pequeno, usando-o como uma arma na mгo inбbil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com escudo. Quando й utilizado dessa ".
					" forma, um escudo pequeno serб uma arma comum de concussгo. Em relaзгo as ".
					" penalidades nas jogadas de ataque, considere um escudo pequeno como uma arma ".
					" leve. Quando utiliza seu escudo como arma, o personagem perde seu bфnus de ".
					" escudo na CA atй a prуxima aзгo (geralmente na rodada subseqьente). O bфnus de ".
					" melhoria do escudo nгo afeta sua eficбcia de ataque, embora seja possнvel encantб-lo ".
					" como uma arma mбgica. ".
					" Gibгo de Peles";
			break;
			
		case "Escudo grande de madeira":
			$this->custo = 7;
			$this->bonusNaCa = "+2";
			$this->destrezaMaxima = "-";
			$this->penalidadeNaPericia = "-2";
			$this->falhaDeMagiaArcana = "15%";
			$this->deslocamentoMedio = "- ";
			$this->deslocamentoPequeno = "- ";
			$this->peso = "5 kg";
			$this->descricao = "\nUm escudo deve ser amarrado no ".
					" antebraзo e empunhado na mгo inбbil. Um escudo grande й pesado e o personagem ".
					" nгo consegue utilizar a mгo do escudo para realizar qualquer tarefa. ".
					" Madeira ou Aзo: Os escudos de madeira e de metal oferecem a mesma proteзгo ".
					" bбsica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem й capaz de golpear um oponente com seu ".
					" escudo grande, usando-o como uma arma na mгo inбbil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com o escudo. Quando й utilizado dessa ".
					" forma, um escudo grande serб uma arma comum de concussгo. Em relaзгo as penalidades ".
					" nas jogadas de ataque, considere um escudo grande como uma arma de ".
					" uma ъnica mгo. Quando utiliza seu escudo como arma, o personagem perde seu ".
					" bфnus de escudo na CA atй a prуxima aзгo (geralmente na rodada subseqьente). O ".
					" bфnus de melhoria do escudo nгo afeta sua eficбcia de ataque, embora seja possнvel ".
					" encantб-lo como uma arma mбgica.";
			break;
			
		case "Escudo grande de metal":
			$this->custo = 20;
			$this->bonusNaCa = "+2";
			$this->destrezaMaxima = "-";
			$this->penalidadeNaPericia = "-2";
			$this->falhaDeMagiaArcana = "15%";
			$this->deslocamentoMedio = "- ";
			$this->deslocamentoPequeno = "- ";
			$this->peso = "7,5 kg";
			$this->descricao = "\nUm escudo deve ser amarrado no ".
					" antebraзo e empunhado na mгo inбbil. Um escudo grande й pesado e o personagem ".
					" nгo consegue utilizar a mгo do escudo para realizar qualquer tarefa. ".
					" Madeira ou Aзo: Os escudos de madeira e de metal oferecem a mesma proteзгo ".
					" bбsica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem й capaz de golpear um oponente com seu ".
					" escudo grande, usando-o como uma arma na mгo inбbil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com o escudo. Quando й utilizado dessa ".
					" forma, um escudo grande serб uma arma comum de concussгo. Em relaзгo as penalidades ".
					" nas jogadas de ataque, considere um escudo grande como uma arma de ".
					" uma ъnica mгo. Quando utiliza seu escudo como arma, o personagem perde seu ".
					" bфnus de escudo na CA atй a prуxima aзгo (geralmente na rodada subseqьente). O ".
					" bфnus de melhoria do escudo nгo afeta sua eficбcia de ataque, embora seja possнvel ".
					" encantб-lo como uma arma mбgica.";
			break;
			
		case "Escudo de corpo":
			$this->custo = 30;
			$this->bonusNaCa = "+4";
			$this->destrezaMaxima = "+2";
			$this->penalidadeNaPericia = "+10";
			$this->falhaDeMagiaArcana = "50%";
			$this->deslocamentoMedio = "- ";
			$this->deslocamentoPequeno = "- ";
			$this->peso = "22,5 kg";
			$this->descricao = "\nEsse enorme escudo de madeira й quase tгo alto quanto o ".
					" personagem. Na maioria dos casos, ele fornece o bфnus de escudo indicado na CA. ".
					" No entanto, й possнvel usб-lo como cobertura total, mas o personagem nгo conseguirб ".
					" atacar. O escudo nгo oferece cobertura para magias а distвncia; um conjurador й capaz ".
					" de disparar a magia contra o personagem, usando o prуprio escudo como alvo. Й ".
					" impossнvel desferir um ataque usando o escudo de corpo como arma. O personagem ".
					" nгo consegue utilizar a mгo do escudo para empunhar outros itens. ".
					" Quando o escudo й utilizado em combate, o usuбrio sofre -2 de penalidade nas ".
					" jogadas de ataque em funзгo do tamanho do equipamento.";
			break;
		}
	}


}



?>