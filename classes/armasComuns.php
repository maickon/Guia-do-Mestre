
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	class ArmasComuns extends Armas{

	var $categoria = "Armas Comuns";
	
	
	function __construct($nome,$custo,$preco,$dano,$decisivo,$distancia,$peso,$tipo,$descricao,$categoria){
		parent::__construct($nome, $custo, $preco, $dano, $decisivo, $distancia, $peso, $tipo, $descricao, $categoria);
		$this->categoria = $categoria;
	}
	
	function gerarNomeDaArma(){
			$tipo = $this->tipo;
			$tamanho;
			$escolido;
	
			if($tipo == "Armas Leves - Corpo a Corpo"){
				$nome1 = array("Espada curta","Kukri","Machadinha","Machado de arremesso","Martelo leve","Picareta leve","Porrete");
				$tamanho  = count($nome1);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome1[$escolido];
			}else if($tipo == "Armas de Uma Mão - Corpo a Corpo"){
				$nome2 = array("Cimitarra","Espada longa","Machado de batalha","Mangual","Martelo de guerra","Picareta pesada","Sabre","Tridente");
				$tamanho  = count($nome2);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome2[$escolido];
			}else if($tipo == "Armas de Duas Mãos - Corpo a Corpo"){
				$nome3 = array("Alabarda","Clava grande","Espada larga","Falcione","Foice longa","Glaive","Guisarme","Lança","Machado grande","Mangual pesado","Ranseur");
				$tamanho  = count($nome3);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome3[$escolido];
			}else if($tipo == "Armas de Ataque à Distância"){
				$nome4 = array("Arco curto","Arco curto composto","Arco longo","Arco longo composto");
				$tamanho  = count($nome4);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome4[$escolido];
			}
			
			return $this->nome; 
		}


	function gerarArmaComun(){
		$nome = $this->nome;
		switch($nome){
		
		case "Espada curta":
			$this->custo = "10 PO";
			$this->dano = "1d6";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Essa e uma arma comum, usada como arma da mão inábil.";
			break;
			
		case "Kukri":
			$this->custo = "8 PO";
			$this->dano = "1d4";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Essa adaga curva e pesada possui uma lamina afiada em sua face interna.";
			break;
			
		case "Machadinha":
			$this->custo = "6 PO";
			$this->dano = "1d6";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "1,5 Kg";
			$this->descricao = "Os anões preferem esses machados como armas para a mão inábil.";
			break;
			
		case "Machado de arremesso":
			$this->custo = "8 PO";
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "3 metros";
			$this->peso = "1 Kg";
			$this->descricao = "Um machado de arremesso é mais leve que uma ".
					" machadinha e balanceado para ser arremessado. Os guerreiros gnomos utilizam ".
					" machados de arremesso como armas brancas e de ataque à distância. ";
			break;
			
		case "Martelo leve":
			$this->custo = "1 PO";
			$this->dano = "1d4";
			$this->decisivo = "x2";
			$this->distancia = "6 metros";
			$this->peso = "1 Kg";
			$this->descricao = "Esse pequeno martelo é leve o bastante para ser arremessado. Ele é muito apreciado entre os anões.";
			break;
			
		case "Picareta leve":
			$this->custo = "4 PO";
			$this->dano = "1d4";
			$this->decisivo = "x4";
			$this->distancia = "-";
			$this->peso = "1,5 Kg";
			$this->descricao = "Uma picareta é projetada para concentrar toda a força ".
					" de seu ataque em uma pequena área. Uma picareta leve ou pesada é similar á ferramenta ".
					" usada pelos mineiros, mas foi desenvolvida especialmente para o combate. ";
			break;
			
		case "Porrete":
			$this->custo = "1 PO";
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "Um porrete é ideal quando o personagem prefere deixar o inimigo inconsciente em vez de matá-lo.";
			break;
			
		case "Cimitarra":
			$this->custo = "15 PO";
			$this->dano = "1d6";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "2 Kg";
			$this->descricao = "A curva dessa espada torna sua lâmina mais extensa e afiada.";
			break;
			
		case "Espada longa":
			$this->custo = "15 PO";
			$this->dano = "1d8";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "2 Kg";
			$this->descricao = "Essa clássica lamina reta é a arma da cavalaria e do heroísmo. É a arma favorita de muitos paladinos.";
			break;
			
		case "Machado de batalha":
			$this->custo = "10 PO";
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "3 Kg";
			$this->descricao = "O machado de batalha é a arma branca mais comum entre os anões.";
			break;
			
		case "Mangual":
			$this->custo = "8 PO";
			$this->dano = "1d8";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "2,5 Kg";
			$this->descricao = "O personagem recebe +2 de bônus nos testes ". 
					" resistidos para desarmar um oponente quando utiliza um mangual (inclusive na ".
					" jogada para evitar ser desarmado, caso a tentativa fracasse). ".
					" O personagem também será capaz de usar essa arma para executar um ataque de ".
					" imobilização. Caso o personagem seja imobilizado durante a tentativa de realizar a ".
					" manobra, ele será capaz de soltar o mangual para evitar sua própria imobilização. ";
			break;
			
		case "Martelo de guerra":
			$this->custo = "12 PO";
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "2,5 Kg";
			$this->descricao = "Essa arma, uma das favoritas dos anões, é um martelo de uma única mão, com a cabeça grande e pesada.";
			break;
			
		case "Picareta pesada":
			$this->custo = "8 PO";
			$this->dano = "1d6";
			$this->decisivo = "x4";
			$this->distancia = "-";
			$this->peso = "3 Kg";
			$this->descricao = "Uma picareta é projetada para concentrar toda a força ".
					" de seu ataque em uma pequena área. Uma picareta leve ou pesada é similar á ferramenta ".
					" usada pelos mineiros, mas foi desenvolvida especialmente para o combate. ";
			break;
			
		case "Sabre":
			$this->custo = "20 PO";
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
			$this->custo = "15 PO";
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
			$this->custo = "10 PO";
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
			$this->custo = "5 PO";
			$this->dano = "1d10";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Uma clava grande é a versão de duas mãos da clava comum. Ela geralmente possui pregos, cravos ou é envolvida com faixas de metal.";
			break;
			
		case "Espada larga":
			$this->custo = "50 PO";
			$this->dano = "2d6";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Os aventureiros consideram a espada larga uma das melhores armas brancas existentes. Ela é confiável e poderosa.";
			break;
		
		case "Falcione":
			$this->custo = "75 PO";
			$this->dano = "2d4";
			$this->decisivo = "18-20/x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Essa espada, que é essencialmente uma cimitarra de duas mãos, possui uma curva que torna sua lâmina mais extensa e afiada.";
			break;
		
		case "Foice longa":
			$this->custo = "18 PO";
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
			$this->custo = "8 PO";
			$this->dano = "1d10";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "10 Kg";
			$this->descricao = "Uma glaive é uma arma de haste. O personagem é capaz de atingir ".
						" um adversário a 3 metros de distância, mas não consegue utilizá-la contra um ".
						" oponente adjacente.";
			break;
		
		case "Guisarme":
			$this->custo = "9 PO";
			$this->dano = "2d4";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "11 Kg";
			$this->descricao = "Uma guisarme é uma arma de haste. O personagem é capaz de ".
						" atingir um adversário a 3 metros de distância, mas não consegue utilizá-la contra ".
						" um oponente adjacente.";
			break;
			
		case "Lança":
			$this->custo = "10 PO";
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "10 Kg";
			$this->descricao = "Uma das armas mais simples que existem, a lança é a arma predileta ".
						" de druidas e feiticeiros. Ela pode ser arremessada. Se o personagem estiver usando ".
						" uma ação preparada contra uma Investida, ele causa o dobro do dano se obtiver ".
						" sucesso contra o atacante.";
			break;
			
		case "Machado grande":
			$this->custo = "20 PO";
			$this->dano = "1d12";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "11 Kg";
			$this->descricao = "Essa machado grande e pesado é a arma favorita do bárbaros ".
						" e de qualquer um que aprecie a capacidade de infligir incrível quantidades ".
						" de dano.";
			break;
			
		case "Mangual pesado":
			$this->custo = "15 PO";
			$this->dano = "1d10";
			$this->decisivo = "19-20/x2";
			$this->distancia = "-";
			$this->peso = "10 Kg";
			$this->descricao = "O personagem recebe +2 de bônus nos testes ".
						" resistidos para desarmar um oponente quando utiliza um mangual (inclusive na ".
						" jogada para evitar ser desarmado, caso a tentativa fracasse). ".
						" O personagem também será capaz de usar essa arma para executar um ataque de ".
						" imobilização. Caso o personagem seja imobilizado durante a tentativa de realizar a ".
						" manobra, ele será capaz de soltar o mangual para evitar sua própria imobilização. ";
			break;
			
		case "Ranseur":
			$this->custo = "10 PO";
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
			$this->custo = "30 PO";
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
			$this->custo = "75 PO";
			$this->dano = "1d6";
			$this->decisivo = "x3";
			$this->distancia = "21 metros";
			$this->peso = "1 Kg";
			$this->descricao = " O personagem deve ter as duas mãos para disparar ".
						" um arco, independente do seu tamanho. Os personagens montados são capazes de ".
						" disparar um arco curto composto. O arco composto é feito de chifres, madeira ou ".
						" ossos laminados, e recurvado para continuar estirado mesmo quando está desarmado.".
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
			$this->custo = "75 PO";
			$this->dano = "1d8";
			$this->decisivo = "x3";
			$this->distancia = "30 metros";
			$this->peso = "1,5 Kg";
			$this->descricao = " O personagem deve ter as duas mãos livres para disparar um ".
						" arco, independente do seu tamanho. Um arco longo é muito desbalanceado para ".
						" ser disparado por personagens montados. Caso o usuário tenha uma penalidade ".
						" de Força, aplique-a nas jogadas de dano do arco longo. Caso tenha um bônus de ".
						" Força, aplique-o nas jogadas de dano quando utilizar um arco longo composto ".
						",mas não um arco longo normal.";
			break;
			
		case "Arco longo composto":
			$this->custo = "100 PO";
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
						" normal, ele não adiciona seu modificador nas jogadas de dano. Com 200 PO, ele " .
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
			}
	}
}
?>