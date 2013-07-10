<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	class ArmasSiples extends Armas{
	
	var $categoria = "Armas Simples";
	
	function __construct($nome,$custo,$preco,$dano,$decisivo,$distancia,$peso,$tipo,$descricao,$categoria){
		parent::__construct($nome, $custo, $preco, $dano, $decisivo, $distancia, $peso, $tipo, $descricao, $categoria);
		$this->categoria = $categoria;
	}
	
	function gerarNomeDaArma(){
		$tipo = $this->tipo; 
		$tamanho;
		$escolido;

		if($tipo == "Armas Leves - Corpo a Corpo"){
			$nome1 = Array("Adaga","Adaga de soco","Foice curta","Maça leve","Manopla com cravos");
			$tamanho  = count($nome1);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome1[$escolido];
		}else if($tipo == "Armas de Uma Mão - Corpo a Corpo"){
			$nome2 = Array("Clava","Lança curta","Maça pesada","Maça-estrela");
			$tamanho  = count($nome2);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome2[$escolido];
		}else if($tipo == "Armas de Duas Mãos - Corpo a Corpo"){
			$nome3 = Array("Bordão","Lança","Lança longa");
			$tamanho  = count($nome3);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome3[$escolido];
		}else if($tipo == "Armas de Ataque à Distância"){
			$nome4 = Array("Azagaia","Besta leve","Besta pesada","Dardo","Funda");
			$tamanho  = count($nome4);
			$escolido = rand(0, $tamanho-1);
			$this->nome = $nome4[$escolido];
		}
		
		return $this->nome; 
	}
	
	function  gerarArmaSimples(){
		$nome = $this->nome;
		switch($nome){
		
		case "Adaga":
			$this->custo = "2 PO";
			$this->dano = "1d4";
			$this->decisivo = "19-20/x2";
			$this->distancia = "3 metros";
			$this->peso = "0,5 Kg";
			$this->descricao = "A adaga é uma arma secundária comum. O personagem recebe +2 de " .
					" bônus nos testes de Prestidigitação realizados para esconder uma adaga no corpo " .
					" (consulte a perícia Prestidigitação).";
			
		case "Adaga de soco":
			$this->custo = "2 PO";
			$this->dano = "1d4";
			$this->decisivo = "x3";
			$this->distancia = "-";
			$this->peso = "0,5 Kg";
			$this->descricao = "Essa adaga permite que o personagem utilize sua Força com ".
					" mais eficácia, tornado seus golpes mais letais (decisivo x3).";
			break;
			
		case "Foice curta":
			$this->custo = "6 PO";
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
			$this->custo = "5 PO";
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "2 Kg";
			$this->descricao = "Uma maça é feita de metal, até mesmo o cabo, o que a ".
					" torna muito pesada e difícil de quebrar.";
			break;
		
		case "Manopla com cravos":
			$this->custo = "5 PO";
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
			$this->custo = "-";
			$this->dano = "1d4";
			$this->decisivo = "x2";
			$this->distancia = "3 metros";
			$this->peso = "1,5 Kg";
			$this->descricao = "Uma clava de madeira é facilmente encontrada e não tem custo. Ela ".
						" geralmente possui pregos, cravos ou é envolvida com faixas de metal.";
			break;
			
		case "Lança curta":
			$this->custo = "1 PO";
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "6 metros";
			$this->peso = "1,5 Kg";
			$this->descricao = "Uma clava de madeira é facilmente encontrada e não tem custo. Ela ".
						" geralmente possui pregos, cravos ou é envolvida com faixas de metal.";
			break;
			
		case "Maça pesada":
			$this->custo = "12 PO";
			$this->dano = "1d8";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "4 Kg";
			$this->descricao = "Uma maça é feita de metal, até mesmo o cabo, o que a ".
						" torna muito pesada e difícil de quebrar.";
			break;
			
		case "Maça-estrela":
			$this->custo = "8 PO";
			$this->dano = "1d8";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "3 Kg";
			$this->descricao = "Essa arma simples combina o impacto da clava com a força ".
						" perfurante dos cravos.";
			break;
			
		case "Bordão":
			$this->custo = "-";
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
			$this->custo = "2 PO";
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
			$this->custo = "5 PO";
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
			$this->custo = "1 PO";
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
			$this->custo = "35 PO";
			$this->dano = "1d8";
			$this->decisivo = "19-20/x2";
			$this->distancia = "24 metros";
			$this->peso = "2 Kg";
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
			
		case "Besta pesada":
			$this->custo = "50 PO";
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
			$this->custo = "5 PP";
			$this->dano = "1d4";
			$this->decisivo = "x2";
			$this->distancia = "6 metros";
			$this->peso = "1 Kg";
			$this->descricao = "Um dardo tem o mesmo tamanho de uma flecha grande e uma ponta ".
					" pesada. Essencialmente, ele é uma azagaia Pequena";
			break;
			
		case "Funda":
			$this->custo = "-";
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