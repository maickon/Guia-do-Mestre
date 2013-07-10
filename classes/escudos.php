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
			$this->descricao = "\nEsse pequeno escudo met�lico � amarrado no antebra�o do personagem, ".
					" permitindo o uso de uma besta ou arco sem penalidades. O personagem ".
					" tamb�m pode usar o bra�o do escudo para empunhar uma arma (seja uma arma ".
					" na m�o in�bil ou para empunhar uma arma de duas m�os), mas isso acarreta -1 de ".
					" penalidade na jogada de ataque em fun��o do peso adicional no bra�o. Essa penalidade ".
					" se acumula com o modificador de lutar usando a m�o in�bil ou combater ".
					" com duas armas. Quando usar uma arma na m�o in�bil, o personagem n�o recebe ".
					" o b�nus do broquel na CA durante o restante da rodada. ".
					" N�o � poss�vel executar um ataque usando um broquel.";
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
					" antebra�o e empunhado na m�o in�bil. O escudo pequeno permite que o personagem ".
					" carregue outro item na m�o in�bil, embora esse objeto n�o possa ser usado ".
					" como arma. ".
					" Madeira ou A�o: Os escudos de madeira e de metal oferecem a mesma prote��o ".
					" b�sica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem � capaz de golpear um oponente com seu ".
					" escudo pequeno, usando-o como uma arma na m�o in�bil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com escudo. Quando � utilizado dessa ".
					" forma, um escudo pequeno ser� uma arma comum de concuss�o. Em rela��o as ".
					" penalidades nas jogadas de ataque, considere um escudo pequeno como uma arma ".
					" leve. Quando utiliza seu escudo como arma, o personagem perde seu b�nus de ".
					" escudo na CA at� a pr�xima a��o (geralmente na rodada subseq�ente). O b�nus de ".
					" melhoria do escudo n�o afeta sua efic�cia de ataque, embora seja poss�vel encant�-lo ".
					" como uma arma m�gica. ". 
					" Gib�o de Peles";
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
					" antebra�o e empunhado na m�o in�bil. O escudo pequeno permite que o personagem ".
					" carregue outro item na m�o in�bil, embora esse objeto n�o possa ser usado ".
					" como arma. ".
					" Madeira ou A�o: Os escudos de madeira e de metal oferecem a mesma prote��o ".
					" b�sica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem � capaz de golpear um oponente com seu ".
					" escudo pequeno, usando-o como uma arma na m�o in�bil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com escudo. Quando � utilizado dessa ".
					" forma, um escudo pequeno ser� uma arma comum de concuss�o. Em rela��o as ".
					" penalidades nas jogadas de ataque, considere um escudo pequeno como uma arma ".
					" leve. Quando utiliza seu escudo como arma, o personagem perde seu b�nus de ".
					" escudo na CA at� a pr�xima a��o (geralmente na rodada subseq�ente). O b�nus de ".
					" melhoria do escudo n�o afeta sua efic�cia de ataque, embora seja poss�vel encant�-lo ".
					" como uma arma m�gica. ".
					" Gib�o de Peles";
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
					" antebra�o e empunhado na m�o in�bil. Um escudo grande � pesado e o personagem ".
					" n�o consegue utilizar a m�o do escudo para realizar qualquer tarefa. ".
					" Madeira ou A�o: Os escudos de madeira e de metal oferecem a mesma prote��o ".
					" b�sica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem � capaz de golpear um oponente com seu ".
					" escudo grande, usando-o como uma arma na m�o in�bil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com o escudo. Quando � utilizado dessa ".
					" forma, um escudo grande ser� uma arma comum de concuss�o. Em rela��o as penalidades ".
					" nas jogadas de ataque, considere um escudo grande como uma arma de ".
					" uma �nica m�o. Quando utiliza seu escudo como arma, o personagem perde seu ".
					" b�nus de escudo na CA at� a pr�xima a��o (geralmente na rodada subseq�ente). O ".
					" b�nus de melhoria do escudo n�o afeta sua efic�cia de ataque, embora seja poss�vel ".
					" encant�-lo como uma arma m�gica.";
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
					" antebra�o e empunhado na m�o in�bil. Um escudo grande � pesado e o personagem ".
					" n�o consegue utilizar a m�o do escudo para realizar qualquer tarefa. ".
					" Madeira ou A�o: Os escudos de madeira e de metal oferecem a mesma prote��o ".
					" b�sica, mas reagem de forma diferente a ataques especiais (como torcer madeira e ".
					" esquentar metal). ".
					" Ataques com Escudo: O personagem � capaz de golpear um oponente com seu ".
					" escudo grande, usando-o como uma arma na m�o in�bil. Veja a Tabela 7-5: Armas ".
					" para obter o dano causado por um ataque com o escudo. Quando � utilizado dessa ".
					" forma, um escudo grande ser� uma arma comum de concuss�o. Em rela��o as penalidades ".
					" nas jogadas de ataque, considere um escudo grande como uma arma de ".
					" uma �nica m�o. Quando utiliza seu escudo como arma, o personagem perde seu ".
					" b�nus de escudo na CA at� a pr�xima a��o (geralmente na rodada subseq�ente). O ".
					" b�nus de melhoria do escudo n�o afeta sua efic�cia de ataque, embora seja poss�vel ".
					" encant�-lo como uma arma m�gica.";
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
			$this->descricao = "\nEsse enorme escudo de madeira � quase t�o alto quanto o ".
					" personagem. Na maioria dos casos, ele fornece o b�nus de escudo indicado na CA. ".
					" No entanto, � poss�vel us�-lo como cobertura total, mas o personagem n�o conseguir� ".
					" atacar. O escudo n�o oferece cobertura para magias � dist�ncia; um conjurador � capaz ".
					" de disparar a magia contra o personagem, usando o pr�prio escudo como alvo. � ".
					" imposs�vel desferir um ataque usando o escudo de corpo como arma. O personagem ".
					" n�o consegue utilizar a m�o do escudo para empunhar outros itens. ".
					" Quando o escudo � utilizado em combate, o usu�rio sofre -2 de penalidade nas ".
					" jogadas de ataque em fun��o do tamanho do equipamento.";
			break;
		}
	}


}



?>