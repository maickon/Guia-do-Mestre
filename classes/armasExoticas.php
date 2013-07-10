<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	class ArmasExoticas extends Armas{

	var $categoria = "Armas Exóticas";
	
	function __construct($nome,$custo,$preco,$dano,$decisivo,$distancia,$peso,$tipo,$descricao,$categoria){
		parent::__construct($nome, $custo, $preco, $dano, $decisivo, $distancia, $peso, $tipo, $descricao, $categoria);
		$this->categoria = $categoria;
	}
	
	function gerarNomeDaArma(){
			$tipo = $this->tipo;
			$tamanho;
			$escolido;
	
			if($tipo == "Armas Leves - Corpo a Corpo"){
				$nome1 = array("Kama","Nunchaku","Sai","Siangham");
				$tamanho  = count($nome1);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome1[$escolido];
			}else if($tipo == "Armas de Uma Mão - Corpo a Corpo"){
				$nome2 = array("Chicote","Espada bastarda","Machado de guerra anão");
				$tamanho  = count($nome2);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome2[$escolido];
			}else if($tipo == "Armas de Duas Mãos - Corpo a Corpo"){
				$nome3 = array("Corrente com cravos","Espada de duas lâminas","Machado orc duplo","Mangual atroz","Martelo gnomo com gancho","Urgrosh anão");
				$tamanho  = count($nome3);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome3[$escolido];
			}else if($tipo == "Armas de Ataque à Distância"){
				$nome4 = array("Besta leve de repetição","Besta pesada de repetição","Besta de mão","Boleadeira","Shuriken");
				$tamanho  = count($nome4);
				$escolido = rand(0, $tamanho-1);
				$this->nome = $nome4[$escolido];
			}
			
			return $this->nome; 
		}
	
	function gerarArmaExotica(){
		$nome = $this->nome;
		switch($nome){
		
		case "Kama":
			$this->custo = "2 PO";
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
			$this->custo = "2 PO";
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "1 Kg";
			$this->descricao = "O nunchaku é uma arma especial para monges. Essa característica ".
					" concede opções especiais aos monges que o utilizarem em combate. O personagem ".
					" recebe +2 de bônus nos testes resistidos para desarmar um oponente quando utiliza ".
					" um nunchaku (inclusive na jogada para evitar ser desarmado, caso a tentativa ".
					" fracasse). ";
			break;
			
		case "Sai":
			$this->custo = "1 PO";
			$this->dano = "1d4";
			$this->decisivo = "x2";
			$this->distancia = "3 metros";
			$this->peso = "0,5 Kg";
			$this->descricao = "As projeções metálicas em forma de dentes de uma sai foram desenvolvidas ".
					" para prender e desarmar um oponente. O personagem recebe +4 de bônus nos testes ".
					" resistidos para desarmar um oponente quando utiliza uma sai (inclusive na jogada ".
					" para evitar ser desarmado, caso a tentativa fracasse). ".
					" A sai é uma arma especial para monges. Essa característica ".
					" concede opções especiais aos monges que a utilizarem em combate. ";
			break;
			
		case "Siangham":
			$this->custo = "3 PO";
			$this->dano = "1d6";
			$this->decisivo = "x2";
			$this->distancia = "-";
			$this->peso = "0,5 Kg";
			$this->descricao = "A siangham é uma arma especial para monges. Essa característica concede opções especiais aos monges que a utilizarem em combate";
		
			break;
		
		case "Chicote":
			$this->custo = "1 PO";
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
						" de Força nas jogadas de ataque, embora ele não seja uma arma leve. ";
			break;
		
			
		case "Espada bastarda":
			$this->custo = "35 PO";
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
				$this->custo = "30 PO";
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
				$this->custo = "25 PO";
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
				$this->custo = "100 PO";
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
						" extremidade da arma será utilizada para atacar naquela rodada. ";
				break;
				
			case "Machado orc duplo":
				$this->custo = "60 PO";
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
				$this->custo = "90 PO";
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
				$this->custo = "20 PO";
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
				$this->custo = "50 PO";
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
				$this->custo = "250 PO";
				$this->dano = "1d8";
				$this->decisivo = "19-20/x2";
				$this->distancia = "24 metros";
				$this->peso = "3 Kg";
				$this->descricao = "Uma besta leve é recarregada através de uma pequena manivela.". 
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
				$this->custo = "400 PO";
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
				$this->custo = "100 PO";
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
				$this->custo = "5 PO";
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
				$this->custo = "20 PO";
				$this->dano = "-";
				$this->decisivo = "-";
				$this->distancia = "3 metros";
				$this->peso = "3 Kg";
				$this->descricao = "Uma rede de combate possui pequenos dentes em sua trama e uma ".
						" corda guia para controlar os oponentes aprisionados. É usada para prender um ".
						" adversário."+
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
						" completa."+
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
				$this->custo = "1 PO";
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
				
				}
			}

}

?>