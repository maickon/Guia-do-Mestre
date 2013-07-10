
<?php

class Historias{
	
	var $numero;
	var $titulo;
	var $descricao;
	
	function __construct($titulo,$descricao){
		
		$this->titulo = $titulo;
		$this->descricao = $descricao;
	}
	
	
	function gerarAventura(){
		$numero = rand(1, 107);
		$this->numero = $numero;
		switch($numero){
			case 1:
			$this->titulo = 'Em busca da vida';
			$this->descricao = 'Os PCs começam mortos. Eles não sabem o que aconteceu, como morreram ou mesmo que estão no Reino dos Mortos. Na verdade os PCs foram submetidos a uma magia que lhes deixa mortos por um curto período de tempo. Eles têm a missão de recuperar um artefato, escondido no mundo dos vivos, que era guardado por um paladino que foi morto tragicamente. Eles precisam primeiro descobrir onde estão e o que aconteceu, depois localizar o paladino e convencer-lhe a lhes revelar a localização do artefato antes que este tempo acabe.';
			break;
			
			case 2:
			$this->titulo = 'O Assassino';
			$this->descricao = 'Um assassino doppelganger mundialmente famoso é contratado para matar os membros de uma família. Os PCs são contratados para impedi-lo.';
			break;
			
			case 3:
			$this->titulo = 'A cidade dominada';
			$this->descricao = 'Uma cidade é dominada por dois beholders inimigos mortais. Todos na cidade ressuscitam sempre que são mortos e obedecem cegamente a um dos dois. Na verdade os dois são partes de uma mesma entidade extraplanar, dividida por uma indecisão num detalhe trivial numa de suas criações artísticas (uma das metades deseja assinar um quadro no seu canto direito e a outra no esquerdo).';
			break;

			case 4:
			$this->titulo = 'Os mercenários';
			$this->descricao = 'Uma companhia de mercenários, ilhada numa montanha após uma avalanche, é obrigada a comer seus mortos para sobreviver. Com isso, eles se tornam ghouls, e seu líder um ghast. Eles viajam pelos reinos vendendo sua espada por “comida”, ou seja, cadáveres. Eles também podem ser vistos saqueando cemitérios. Todos são mortos-vivos e excelentes guerreiros.';
			break;
			
			case 5:
			$this->titulo = 'Cidade maravilhosa';
			$this->descricao = 'Uma cidade é um imenso baile de máscaras. Todos que lá adentram devem vestir máscaras , e todos lá vivem em uma gigantesca e eterna festa. Na verdade a cidade é uma entidade que se alimenta das emoções e prazeres das pessoas. Todos lá têm toda a comida, bebida e sexo que puderem desejar. Todavia, quem se deixa levar pelo encanto da cidade cedo ou tarde acaba sucumbindo aos excessos constantes e é deixado para apodrecer nos esgotos, onde todos os “indesejáveis” são estocados.';
			break;
			
			case 6:
			$this->titulo = 'Os piratas';
			$this->descricao = 'Um grupo de piratas, após sofrerem um naufrágio perto de uma vila portuária, descobre alguns itens mágicos de pouco poder em meio a destroços de antigas embarcações. Os piratas, utilizando-se destes itens, fazem-se passar por deuses e escravizam um grupo de párias (seres horrivelmente deformados com pouca semelhança com qualquer raça humanóide) para recuperar os verdadeiros tesouros existentes nos destroços.';
			break;
			
			case 7:
			$this->titulo = 'A lança intocavel';
			$this->descricao = 'Uma lança tem o poder de matar qualquer criatura viva. No entanto, para que este poder funcione é preciso que o possuidor mate a pessoa que mais ama.';
			break;
			
			case 8:
			$this->titulo = 'A floresta';
			$this->descricao = 'Uma grande floresta está rapidamente definhando. Na verdade o unicórnio que deveria tomar conta da floresta encantouse com uma jovem tão pura que sem querer seduziu-o para longe de seu dever.';
			break;
			
			case 9:
			$this->titulo = 'Os segredo';
			$this->descricao = 'Em um terreno inóspito e montanhoso, existem vários avisos em uma língua antiga sobre um dragão ali residente. Na verdade, “Dragão” é o nome de um antigo navio voador guardado neste local.';
			break;
			
			case 10:
			$this->titulo = 'O imperador';
			$this->descricao = 'Em um terreno inóspito e montanhoso, existem vários avisos em uma língua antiga sobre um dragão ali residente. Na verdade, “Dragão” é o nome de um antigo navio voador guardado neste local.';
			break;
			
			case 11:
			$this->titulo = 'O mago do tempo';
			$this->descricao = 'O irmão de um dos PCs tornou-se um mago poderoso com o poder de controlar o tempo. A irmã dos dois, muito doente, acaba morrendo e o irmão do PC controla o tempo para que isso não ocorra. Os PCs chegam a uma cidade onde o mesmo dia se repete infinitamente. Na verdade tanto a menina como o mago estão nesta cidade, e ele está fazendo com que o dia da morte dela se repita até que ele seja capaz de encontrar uma cura. A única maneira de quebrar o feitiço é convencer o irmão do PC a deixá-la morrer.';
			break;
			
			case 12:
			$this->titulo = 'O inimigo imortal';
			$this->descricao = 'O inimigo dos PCs não tem corpo físico, é uma entidade que pode possuir qualquer corpo, ou qualquer animal, ou qualquer planta. Não há como destruir este inimigo fisicamente. Os PCs precisam destruir ou aprisionar o seu espírito de alguma forma (sendo constantemente atacados por quaisquer animais, plantas ou mesmo pessoas que estejam à sua volta).';
			break;
			
			case 13:
			$this->titulo = 'O general';
			$this->descricao = 'Um general lidera uma cruzada contra os não-humanos. Ele estuda cada raça não-humana e seus pontos fracos, utilizando-se das fraquezas de cada uma (queimando as florestas dos elfos, prendendo os anões em suas montanhas, etc).';
			break;
			
			case 14:
			$this->titulo = 'Príncipe por engano';
			$this->descricao = 'Um dos PCs é muito parecido com o príncipe de um reino estrangeiro. O príncipe foi raptado, mas sua presença é necessária num evento. O PC é contratado para servir de “sombra” para o príncipe, e pode se ver vítima de intrigas e atentados políticos. Além disso, o grupo que raptou o príncipe pode se voltar contra o PC.';
			break;
			
			case 15:
			$this->titulo = 'Os clones';
			$this->descricao = 'Como tributo para entrar na cidade de um necromante, os PCs devem doar um pouco de seu sangue. Algum tempo depois, os PCs se deparam com cópias suas, com variados graus de inteligência e capacidade, criados como “clones” a partir do seu sangue.';
			break;
			
			case 16:
			$this->titulo = 'Em busca por descanço';
			$this->descricao = 'Um espadachim morto-vivo atravessa os séculos vagando pelo mundo desafiando os melhores espadachins existentes. Ele deseja se tornar um guerreiro bom o suficiente para derrotar a Morte, acreditando que se fizer isto poderá finalmente morrer.';
			break;
			
			case 17:
			$this->titulo = 'O messias';
			$this->descricao = 'Um grupo de 5 Bruxas, chamado Cabala do Sangue, aterroriza um feudo com seus poderes profanos. Elas estão tentando encontrar a cripta e trazer de volta dos mortos seu amante e mestre, um homem filho de uma humana e um demônio. Este humano maligno é conhecido como o Ungido, o Messias tocado pelas trevas.';
			break;
			
			case 18:
			$this->titulo = 'Os pequeninos';
			$this->descricao = 'Os PCs são encolhidos até o tamanho de um palmo por um mago de um povo diminuto, aparentemente humanos do tamanho de um palmo, para ajudá-los a encontrar um novo local para se estabelecerem; ou para ajudá-los a reencontrar um jovem da tribo que foi para a cidade “grande”.';
			break;
			
			case 19:
			$this->titulo = 'O desafio';
			$this->descricao = 'Há muito tempo atrás o rei de um esquecido reino mandou seus magos construírem um enorme labirinto com o objetivo de criar um desafio para seus filhos, assim escolhendo um rei dentre eles. O labirinto foi desenhado para julgar as habilidades físicas e mentais do candidato a rei. O prêmio: o reino. Para o perdedor, a morte. Muitos de seus filhos pereceram no labirinto e como castigo os deuses prenderam toda a capital do reino dentro de uma garrafa e colocaram-na dentro do labirinto. Agora os personagens devem encontrar um objeto que está dentro da cidade.';
			break;
			
			case 20:
			$this->titulo = 'A revolta';
			$this->descricao = 'Uma cidade está sofrendo com inúmeros ataques de bandidos e ladrões. Na verdade os mendigos e miseráveis da cidade estão se revoltando contra o opressor duque local, liderados por um antigo rival deste nobre. Os PCs irão tentar ajudar os miseráveis ou serão contratados pelo duque?';
			break;
			
			case 21:
			$this->titulo = 'O livro amaldiçoado';
			$this->descricao = 'Os personagens acham um estranho e amaldiçoado livro. Quando o abrem são transportados para histórias de conto de fadas às avessas, transformados em seus personagens e obrigados a vivenciar estas estranhas histórias. Exemplo: Uma história onde três porcos malignos perseguem uma alcatéia de lobos (na verdade os PCs transformados) chacinando-os e destruindo suas tocas. Como alternativa, os PCs recebem um pedido de ajuda de um lobo atormentado pelos três porcos.';
			break;
			
			case 22:
			$this->titulo = 'Os vampiros';
			$this->descricao = 'Os personagens acham um estranho e amaldiçoado livro. Quando o abrem são transportados para histórias de conto de fadas às avessas, transformados em seus personagens e obrigados a vivenciar estas estranhas histórias. Exemplo: Uma história onde três porcos malignos perseguem uma alcatéia de lobos (na verdade os PCs transformados) chacinando-os e destruindo suas tocas. Como alternativa, os PCs recebem um pedido de ajuda de um lobo atormentado pelos três porcos.';
			break;
			
			case 23:
			$this->titulo = 'A taverna da encruzilhada';
			$this->descricao = 'Os PCs são atraídos no meio de uma noite escura para uma taverna que aparece misteriosamente de dentro de uma neblina. Esta taverna é um ponto onde varias dimensões se encontram, ela fica na encruzilhada entre os planos. Esta ambientação pode trazer aventuras intimistas, de terror ou praticamente qualquer gênero que o mestre queira.';
			break;
			
			case 24:
			$this->titulo = 'Morte ao rei';
			$this->descricao = 'Um golem gigante feito de aço marcha inexoravelmente em direção à capital de um reino. Ele foi magicamente programado por um Lich para matar o rei. Ele é extremamente forte, incansável e resistente. Os personagens têm de encontrar um meio de pará-lo.';
			break;
			
			case 25:
			$this->titulo = 'O navio Sombrio';
			$this->descricao = 'Os PCs encontram um navio inteiramente tripulado por mortos- vivos. Eles não têm consciência de sua condição e continuam há séculos navegando e desempenhando as mesmas funções. A tripulação mostra-se amigável e ajuda os PCS (vítimas de um naufrágio ou algo assim), e eles devem lidar com a morte-em-vida de seus ovos “amigos”. Os PCs devem decidir se permitirão a existência de tais criaturas, se confiarão em sua ajuda e como farão para conviver por dias e dias com a tripulação (pois não há comida a bordo e toda a embarcação exala um cheiro fétido). Se os PCs fizerem algo que exponha aos mortos-vivos a sua verdadeira condição, as reações são imprevisíveis';
			break;
			
			case 26:
			$this->titulo = 'O mistério';
			$this->descricao = 'Os personagens, no meio de uma tempestade, vêem um homem sendo atacado por um bando de ladrões. O homem fica muito ferido e sua filha pequena pede que eles o levem para sua casa, pouco distante. Eles enfrentam muitos perigos para chegar na casa, sempre ajudados pela garota, e quando lá chegam descobrem que o homem tinha ido rezar numa capela distante pela alma de sua filha morta na última primavera.';
			break;
			
			case 27:
			$this->titulo = 'Uma ajuda';
			$this->descricao = 'Uma jovem elfa flerta com um dos personagens e pede para que ele a ajude a fugir de delegação de embaixadores elfos que esta de visita na cidade onde estão. Na verdade ela deseja se encontrar com um jovem caçador pela qual está enamorada.';
			break;
			
			case 28:
			$this->titulo = 'Em busca pelo componente';
			$this->descricao = 'Um grande duelo de magos organizado pela guilda local irá se realizar numa cidade e o prêmio é um valioso livros de feitiços. O mago do grupo pode querer competir mas para se inscrever no torneio os candidatos devem trazer componentes raros.';
			break;
			
			case 29:
			$this->titulo = 'O grupo fantasma';
			$this->descricao = 'Os PCs se deparam com um grupo de aventureiros presos em uma caverna labiríntica. Na verdade estes aventureiros são fantasmas e prenderão os PCs pela eternidade junto consigo, a menos que sejam eles próprios libertos. O que prende os fantasmas é uma série de ressentimentos e relacionamentos mal-resolvidos que os impedem de se separar. Se os PCs forem capazes de fazer os fantasmas enxergarem seus problemas e aceitarem seus verdadeiros sentimentos de amor e amizade, estarão livres.';
			break;
			
			case 30:
			$this->titulo = 'Em busca do sentido perdido';
			$this->descricao = 'Utilizando uma magia antiga e proibida, um mago faz um PC enxergar a cena da sua própria morte. Esta magia mostra a morte mais chocante que pode ocorrer para o personagem em todos os possíveis futuros. O choque é tão grande que o PC fica cego. Apenas aprendendo a lidar com seus medos o PC pode recuperar a sua visão';
			break;
			
			case 31:
			$this->titulo = 'Uma escolha difícil';
			$this->descricao = 'Os PCs encontram um bebê elfo em um vasto reino onde os elfos são odiados e vistos como demoníacos. Eles precisam decidir entre entregar o bebê para alguém (condenando a criança à morte) ou permanecer com ele até serem capazes de deixar o reino, o que levará semanas ou meses. Eles deverão lidar com a responsabilidade de cuidar de uma vida indefesa e podem ser presos ou executados caso sejam pegos com uma “cria do mal”.';
			break;
			
			case 32:
			$this->titulo = 'O gnomo artista';
			$this->descricao = 'Um gnomo cego é capaz de tecer emoções em elaboradas tapeçarias. Ele é capaz de tecer o amor, o prazer do sexo ou a emoção de um dia de primavera. Entrando na sua oficina os PCs podem enlouquecer ao serem confrontados pela visão das milhares de emoções conflitantes presentes nas tapeçarias lá penduradas.';
			break;
			
			case 33:
			$this->titulo = 'Em busca por um artefato';
			$this->descricao = 'Os PCs necessitam de um artefato de posse da família real, que somente pode ser utilizado caso seja dado de bom grado, e não roubado. A princesa, de posse do artefato, se enamora de um dos PCs (de preferência um bardo conquistador ou um bárbaro rude) e somente lhes dará o item se este desposá-la. O PC deve mudar o seu modo de vida ou achar uma outra solução (como outro “bom partido” para a princesa).';
			break;
			
			case 34:
			$this->titulo = 'O tesouro maldito';
			$this->descricao = 'Um dos PCs acha uma quantidade imensurável de tesouro, o suficiente para comprar e vender qualquer reino no mundo conhecido. Os seus problemas financeiros se acabaram, mas ele se vê cercado de interesseiros, comerciantes inescrupulosos, ladrões, banqueiros, reis e princesas/príncipes, falsos amigos e demais pessoas que desejam a sua fortuna. Caso mantenha o tesouro escondido e não conte a ninguém, vai se ver às voltas com a paranóia de não poder confiar em ninguém e o medo constante de ser descoberto caso gaste umas moedas a mais na estalagem. Além disso, ele talvez não tenha mais motivo para se aventurar, e sua vida pode acabar virando um mar de tédio. Se o tesouro acabar sendo um problema, como se livrar dele (sem acabar com a economia do mundo inteiro)?';
			break;
			
			case 35:
			$this->titulo = 'A infiltração';
			$this->descricao = 'Os PCs, para se infiltrarem no castelo de um poderoso duque, devem se disfarçar como competidores em uma corrida de bigas/lagartos/chocobos ou algo assim. Eles precisam ganhar a prova para serem convidados para o banquete de comemoração no interior do castelo.';
			break;
			
			case 36:
			$this->titulo = 'Possessão atemporal';
			$this->descricao = 'Um PC (de preferência um mago) sofre repetidas tentativas de possessão por uma entidade desconhecida. Na verdade esta entidade é ele próprio no futuro, quando os inimigos do grupo venceram e condenaram todos a destinos piores que a morte. A “versão futura” do PC está tão aterrorizada que voltou no tempo para se livrar do seu sofrimento. Se o PC expulsar a “entidade” que tenta tomar o seu corpo, na verdade vai estar condenando a si mesmo a uma eternidade de dor! Isto é um incentivo a mais para os PCs não deixarem seus inimigos levarem a melhor…';
			break;
			
			case 37:
			$this->titulo = 'Uma cidade estranha';
			$this->descricao = 'Os PCs chegam a uma cidade mágica controlada por um deus-gato, onde maltratar um gato é um tabu, e fazê-lo significa pena de morte. Os PCs se vêem envolvidos com as dificuldades de observar este tabu. Caso falhem, os inimigos do grupo estarão prontos a delatá-los. Caso consigam, o inimigo forja provas contra eles, incriminando-os. Os PCs devem provar a sua inocência num tribunal em estilo egípcio, com o próprio deus-gato como juiz e júri.';
			break;
			
			case 38:
			$this->titulo = 'Um acidente';
			$this->descricao = 'Os PCs são repentinamente teleportados para um reino desconhecido, à porta de uma sala de conferências de um nobre importante. Logo que são vistos, o nobre lhes pergunta: “Então vocês são os novos embaixadores vindos da capital?”. Caso digam que sim, os PCs devem se passar por embaixadores e lidar com o problema de dois reinos à beira da guerra. Caso digam que não, os PCs devem arranjar um jeito de explicar sua presença ali e inocentarem-se das acusações de espionagem e alta traição (e ninguém acreditaria na história de um teleporte aleatório…). Além disso, precisam arrumar um jeito de voltarem para casa';
			break;
			
			case 39:
			$this->titulo = 'Artefatos do futuro';
			$this->descricao = 'Os PCs de um mundo de fantasia medieval “padrão” encontram estranhos artefatos numa ruína abandonada. Estes artefatos na verdade são coisas cotidianas como tênis, televisores ou automóveis e o mundo na verdade é a Terra muitas eras no futuro! Não diga os nomes dos objetos, apenas descreva-os sob a ótica medieval e observe os jogadores tentarem descobrir do que se tratam.';
			break;
			
			case 40:
			$this->titulo = 'Tudo dando errado !';
			$this->descricao = 'Os PCs, apesar de serem grandes heróis e/ou guerreiros poderosos, parecem ser derrotados por coisas simples na vida cotidiana. Suas famílias se desmantelam enquanto eles ficam tempo demais separados delas (em missões e aventuras) seus maridos/esposas são infiéis, seus filhos/pais velhos adoecem, etc. Os PCs sentem que são inúteis em coisas que são simples para a maior parte das pessoas, ou que fazem mais mal do que bem para as pessoas ao seu redor.';
			break;
			
			case 41:
			$this->titulo = 'Anel da infelicidade';
			$this->descricao = 'Um anel mágico que rouba a felicidade de todos ao seu redor, transferindo-a para o possuidor.';
			break;
			
			case 42:
			$this->titulo = 'O bardo vidente';
			$this->descricao = 'Um bardo segue os PCs por várias aventuras cantando rimas aparentemente sem sentido. Contudo, as rimas são as soluções para várias aventuras futuras, e se os PCs prestaram atenção eles serão capazes de detectar este estranho padrão.';
			break;
			
			case 43:
			$this->titulo = 'Teste de herói';
			$this->descricao = 'Os PCs, depois de já terem se tornado grandes heróis, são requisitados para uma série de missões triviais e sem grandes recompensas (salvar a filha de um aldeão perdida em uma floresta, expulsar uma tribo de kobolds do templo de uma vila, etc). Na verdade estas missões são testes de humildade impostos pelos deuses aos PCs. Se eles forem humildes e ajudarem estas pessoas simples em seus problemas “mundanos”, uma grande recompensa os espera. Se, contudo, eles renegarem as tarefas “triviais” e esquecerem seu passado humilde, perderão a boa vontade dos deuses.';
			break;
			
			case 44:
			$this->titulo = 'A cidade dos alquimistas';
			$this->descricao = 'Como tributo para entrar na cidade de um alquimista louco, um dos PCs deve beber de uma poção desconhecida. Esta poção lhe provoca alucinações em períodos de tempo aleatórios. Contudo, também fornece ao PC uma espécie de “sexto sentido”, e os seus companheiros nunca saberão se os perigos e avisos que ele vê são reais ou produto de alucinações. A poção funciona por quanto tempo o mestre desejar.';
			break;
			
			case 45:
			$this->titulo = 'A fábrica de golems';
			$this->descricao = 'Em meio a uma enorme floresta, existe uma grande área desmatada. No meio desta área, uma grande fábrica, com chaminés constantemente expelindo fumaça negra. Golens de madeira constantemente cortam mais e mais árvores da floresta para fornecer matéria-prima para a fábrica. A fábrica produz somente golens de madeira, que servem para conseguir matéria prima para produzir mais golens…';
			break;
			
			case 46:
			$this->titulo = 'Quebra de pacto';
			$this->descricao = 'Influenciados por um demônio, os grifos de uma grande floresta atacam selvagemente os elfos que lá habitam. O pacto ancestral entre grifos e elfos é quebrado por este ato aparentemente de traição. Os PCs devem descobrir o que está por trás deste ato inexplicável e reatar a antiga amizade entre as duas facções.';
			break;
			
			case 47:
			$this->titulo = 'A cidade ';
			$this->descricao = 'Uma cidade inexpugnável, onde para entrar deve-se pagar um dízimo em dor. Todos que entram na cidade são obrigados a utilizar artefatos metálicos que causam grande dor. A cidade não possui nenhum atrativo visual nem nenhum tipo de distração para a dor que todos sentem. No entanto, ela oferece vantagens como uma biblioteca muito grande, etc. Além disso, todos na cidade curam-se muito rápido e a menina-santa que governa a cidade pode responder a quase qualquer pergunta.';
			break;
			
			case 48:
			$this->titulo = 'O xadrez dos deuses';
			$this->descricao = 'Os inimigos de longa data dos PCs na verdade são, assim como os próprios PCs, simples peões para entidades poderosas que se consideram jogadores: eles usam as vidas e conflitos dos PCs e inimigos como jogos e espetáculos para a sua própria diversão.';
			break;
			
			case 49:
			$this->titulo = 'Teste de lealdade';
			$this->descricao = 'Um dos PCs, de preferência um cavaleiro ou alguém tão honrado a ponto de nunca quebrar sua palavra, é enganado de modo a jurar defender a honra de uma estranha donzela. Na verdade a donzela é uma inimiga dos PCs disfarçada, e o personagem escolhido deve ser seu campeão num duelo contra outro PC. A lealdade dele será maior para com o grupo ou para com a sua palavra?';
			break;
			
			case 50:
			$this->titulo = 'Os farsantes';
			$this->descricao = 'Um dos PCs, de preferência um cavaleiro ou alguém tão honrado a ponto de nunca quebrar sua palavra, é enganado de modo a jurar defender a honra de uma estranha donzela. Na verdade a donzela é uma inimiga dos PCs disfarçada, e o personagem escolhido deve ser seu campeão num duelo contra outro PC. A lealdade dele será maior para com o grupo ou para com a sua palavra?';
			break;
			
			case 51:
			$this->titulo = 'A invasão';
			$this->descricao = 'Uma civilização de povo lagarto faz uma visita pedindo, educadamente, escravos mamíferos para exibirem em um circo.';
			break;
			
			case 52:
			$this->titulo = 'Mercenários Planares';
			$this->descricao = ' Um bando de mercernários planares está recrutando novos membros de vários planos.';
			break;
			
			case 53:
			$this->titulo = 'O visitante';
			$this->descricao = ' Um erudito visitante planar segue os habitantes locais fazendo anotações sobre o “comportamento nativo”. Ele não quer ir embora, e se torna incorpóreo quando ameaçado.';
			break;
			
			case 54:
			$this->titulo = 'Os refugiados';
			$this->descricao = ' Um grupo de refugiados de outros planos chega e instala um acampamento próximo a uma vila local.';
			break;
			
			case 55:
			$this->titulo = 'Ajuda ao Herói';
			$this->descricao = ' Um paladino aasimar ou campeão da luz faz uma visita e pede que alguém o ajude a banir os demônios de um templo em Nexus.';
			break;
			
			case 56:
			$this->titulo = 'O fugitivo';
			$this->descricao = ' Um marinheiro que naufragou no Mar Etéreo aparece em uma taverna. Ele é perseguido por cultistas vingativos, pelo roubo de um ídolo de esmeralda sagrado.';
			break;
			
			case 57:
			$this->titulo = 'Amaldiçoados';
			$this->descricao = 'Habitantes locais são perseguidos por um povo gato planar que os assusta de noite, roubando comida, montarias, e tesouros.';
			break;
			
			case 58:
			$this->titulo = 'O recrutamento';
			$this->descricao = ' Um recrutador de um privateer bem-sucedido precisa de um druida ou mago do tempo para um ataque; ele não menciona que o navio é um barco voador para um outro plano.';
			break;
			
			case 59:
			$this->titulo = 'O grande acidente';
			$this->descricao = 'Um navio voador pirata passa por um portal planar e cai em seu mundo causando problemas.';
			break;
			
			case 60:
			$this->titulo = 'Guia aos peregrinos';
			$this->descricao = 'Um grupo de peregrinos procura ajuda para chegar ao Mother Ocean.';
			break;
			
			case 61:
			$this->titulo = 'O contrato';
			$this->descricao = 'Um grupo de psionistas malignos aborda mercenários locais pedindo ajuda para destruir um grupo de peregrinos que se dirige ao Mother Ocean.';
			break;
			
			case 62:
			$this->titulo = 'Uma grande armadilha';
			$this->descricao = ' Um cavalo falante diz que é de outro plano, e que pode levar cavaleiros através de fronteiras planares. Na verdade, é uma armadilha; um yamado que muda de forma.';
			break;
			
			case 63:
			$this->titulo = 'Ajuda dos infernos';
			$this->descricao = 'Um juiz do inferno quer se aposentar e envia uma carta a um mortal pedindo ajuda.';
			break;
			
			case 64:
			$this->titulo = 'A tragédia arcana';
			$this->descricao = ' O experimento de um mago dá totalmente errado, libertando espíritos elementais e terríveis salamandras por toda parte. Para reuni-las novamente, alguém deve encontrar ou fazer uma spirit bottle.';
			break;
			
			case 65:
			$this->titulo = 'O pedido de  proteção';
			$this->descricao = ' Um mercador planar troglodita chega com mercadorias de metal e histórias exóticas. Ele pode querer contratar alguns guardas, por um baixo preço.';
			break;
			
			case 66:
			$this->titulo = 'Busca ao prisioneiro';
			$this->descricao = ' O habitante de uma prisão planar escapou.';
			break;
			
			case 67:
			$this->titulo = 'O caminho da luz';
			$this->descricao = 'Uma rara conjunção planar está próxima, e aventureiros de vários planos estão se reunindo em Nexus para atravessarem um portal.';
			break;
			
			case 68:
			$this->titulo = 'Em busca de um intérprete';
			$this->descricao = 'Uma colméia formian precisa de um novo tradutor, porque o último faleceu. Eles raptam alguém de outro plano e começam a ensinar a nova linguagem a ele.';
			break;
			
			case 69:
			$this->titulo = 'Tres desejos?';
			$this->descricao = ' Uma garrafa é trazida pelas ondas e aparece na praia. Dentro dela, uma figura pequenina se move e faz gestos pedindo ajuda. Quando solta, é um lord djinni que irá corromper todos que estiverem à sua volta – e oferece levar os que o resgataram para sua terra elemental.';
			break;
			
			case 70:
			$this->titulo = 'Ajuda aos perdidos';
			$this->descricao = ' Um terrível meteoro estremece o domo de Carrigmoor.';
			break;
			
			case 71:
			$this->titulo = 'Em busca da caravana perdida';
			$this->descricao = 'Uma caravana se perde nas Underlands.';
			break;
			
			case 72:
			$this->titulo = 'Tragédia planar';
			$this->descricao = 'Um grupo de magos chamados Isolacionistas tem tentado cortar conexões planares. Qual será o efeito disso?';
			break;
			
			case 73:
			$this->titulo = 'Reversão planar';
			$this->descricao = 'Rumores de guerras em planos pacíficos chegam, ao mesmo tempo que outros espalham rumores de paz em planos divididos pela guerra.';
			break;
			
			case 74:
			$this->titulo = 'Os pergaminhos da destruição';
			$this->descricao = 'O seu mestre lhe manda em uma missão para recuperar um pergaminho poderoso que ele próprio escondeu quando jovem. Você e sua equipe deve pega-lo antes que os ninjas das sombras apanhe primeiro.';
			break;
			
			case 75:
			$this->titulo = 'A chave Mistica';
			$this->descricao =  'Os aventureiros encontram uma chave que abre um portal planar no ar; se o portal se abrir, os Ten Courts of Hell entram para o plano dos aventureiros. Os aventureiros tentam fechar o portal.';
			
			case 76:
			$this->titulo = 'Vida ao necromante';
			$this->descricao =  ' Os mortos começaram a caminhar pela terra de Spring.';
			
			case 77:
			$this->titulo = 'Controlado pela mal';
			$this->descricao =  ' Um mago endiabrado abre um portal mutante para vários planos elementais, trazendo enchentes, terremotos, tornados, e tempestades de fogo para o mundo.';
			
			case 78:
			$this->titulo = 'Eclipse planar';
			$this->descricao =  ' Os portais planares começam a redirecionar espontaneamente – até mesmos elos permanentes começam a não funcionar direito. ';
			
			case 79:
			$this->titulo = 'A queda dos deuses';
			$this->descricao =  ' Clérigos páram de receber comunicações de deuses com alinhamento bom. A comunicação deste plano com os céus foi cortada?';
			break;
			
			case 80:
			$this->titulo = 'O assassino planar';
			$this->descricao =  ' Um assassino começou a transitar entre os mundos paralelos, eliminando um governante poderoso em cada um deles, tentando fazer com que todos obedeçam a uma única grande visão.';
			break;
			
			case 81:
			$this->titulo = 'O resgate do deus imbecil';
			$this->descricao =  ' Um deus coloca sua divindade de lado por um dia – e é imediatamente sequestrado.';
			break;
			
			case 82:
			$this->titulo = 'O contrato Real';
			$this->descricao =  ' Um representande do Reino capital chega a cidade de Tardhem para discutir uma barganha mutualmente satisfatória com o rei local.';
			break;
			
			case 83:
			$this->titulo = 'Cataclisma planar';
			$this->descricao =  ' Esconde-esconde: o tempo congela em um plano, exceto para um seleto grupo de habitantes – e seus inimigos.';
			break;
			
			case 84:
			$this->titulo = 'O presente da morte';
			$this->descricao =  ' Uma arma simples aparece, mas de repente seus donos se tornam o foco de uma caçada.';
			break;
			
			case 85:
			$this->titulo = 'O despertar';
			$this->descricao =  ' Desabamentos ocorrem nas Underlands quando uma criatura enterrada e adormecida desperta!';
			break;
			
			case 86:
			$this->titulo = 'Despertar para o inferno';
			$this->descricao =  ' Um cidade construído em cima do túmulo de um arqui-demônio aprisionado escorrega para o Inferno quando o lord maligno começa a se libertar.';
			break;
			
			case 87:
			$this->titulo = 'O avatar?';
			$this->descricao =  ' Um clérigo criança, cujos rumores indicam ser o avatar de um deus, surge misteriosamente de um templo e pede ajuda para qualquer um.';
			break;
			
			case 88:
			$this->titulo = 'Gargalhadas da morte';
			$this->descricao =  ' Um assassino louco e caótico(tipo coringa) escapa de um laboratório em uma cidade onde tudo está em perfeita ordem; o resultado é confusão (e gargalhadas).';
			break;
			
			case 89:
			$this->titulo = 'Missão dada é missão...';
			$this->descricao =  ' Uma nação de mortos-vivos com alinhamento bom sofrem o ataque de um exército de clérigos.';
			break;
			
			case 90:
			$this->titulo = 'Má dia';
			$this->descricao =  ' Um senhor idoso inadvertidamente abre um portal alienígena em um vilarejo rural. Alguém deve fechá-lo sem atrair a atenção da fera alienígena.';
			break;
			
			case 91:
			$this->titulo = 'O fim do mundo';
			$this->descricao =  ' Um demônio está tentando redirecionar o portal de Chaos para o seu plano de origem, de maneira que o mundo fique sob o controle demoníaco.';
			break;
			
			case 92:
			$this->titulo = 'O preço da fuga';
			$this->descricao =  ' Aldeões locais sequestrados por escravizadores trolls.';
			break;
			
			case 93:
			$this->titulo = 'Cataclisma planar elemental';
			$this->descricao =  ' Um vulcão quase ativo abre uma fenda planar para o Plano Elemental do Fogo.';
			break;
			
			case 94:
			$this->titulo = 'A relíquia de Stambamalar';
			$this->descricao =  ' Uma gema misteriosa que serve como chave para o túmulo do imperador é na verdade um objeto de grandes poderes no seu plano, dizem os viajantes planares.';
			break;
			
			case 95:
			$this->titulo = 'Perdidos fora de casa';
			$this->descricao =  ' Viajantes planares benevolentes leais e bons ficam presos no seu plano; infelizmente para eles, se parecem exatamente como bugbears.';
			break;
			
			case 96:
			$this->titulo = 'O resgate do príncipe Rayn';
			$this->descricao =  ' Um príncipe local é julgado na cidade imperial de sandranalock e condenado à prisão da sobrevivência.(Ele é solto em um pequeno mundo onde o perigo é eternamente constante). O seu pai descobre que foi tudo uma armadilha e então contrata um grupo para resgatar o seu filho.';
			break;
			
			case 97:
			$this->titulo = 'A praga Borial';
			$this->descricao =  ' A única cura de uma praga que etá destruindo todos os habitantes de Batucumar é uma planta que cresce nas masmorras perdidas de Batucumar .';
			break;
			
			case 98:
			$this->titulo = 'O Metamorfo';
			$this->descricao =  ' Um conhecido viajante planar retorna à Kin-Li’in – ou é na verdade é uma criatura disfarçado em sua forma?';
			break;
			
			case 99:
			$this->titulo = 'Viagem no tempo';
			$this->descricao =  ' Um grupo de aventureiro encontra um templo perdido que os leva para o passado. A única saída é encontrar o mago do tempo.';
			break;
			
			case 100:
			$this->titulo = 'Dungeons&Dradons';
			$this->descricao =  ' Um arqueiro chamado Hank aparece e ajuda um vilarejo vizinho em apuros, mas depois exige que, em troca, heróis o acompanhe para um outro plano para ajuda-lo a destruir um homem chamado vingador.';
			break;
			
			case 101:
			$this->titulo = 'Cataclisma planar elemental';
			$this->descricao =  ' Um portal planar abre e despeja uma grande quantidade de água do Plano Elemental da Água – bem dentro do castelo do lord local.';
			break;
			
			case 102:
			$this->titulo = 'Uma profissão de escolta';
			$this->descricao =  ' Um mercador interplanar precisa de guardas para uma viagem através de uma série de conjunções perigosas.';
			break;
			
			case 103:
			$this->titulo = 'O pintor da morte';
			$this->descricao =  ' Um artista pintor que viaja através dos planos busca encontrar nobres de sangue real e assassina-los. O sangue de suas vítimas o servirá de tinta para sua mais nova arte.';
			break;
			
			case 104:
			$this->titulo = 'Um roubo noturno';
			$this->descricao =  ' Piratas do sono aparecem para roubar o sono da família de um lord local.';
			break;
			
			case 105:
			$this->titulo = 'O grupo do mago Bentus';
			$this->descricao =  'Um mago local precisa de um grupo para obter uma magia rara de um eremita arcano em outro plano. ';
			break;			
			
			case 106:
			$this->titulo = 'O fantasma';
			$this->descricao =  ' O grupo de aventureiros sofre persegução de um fantasma que todos os dias ranca um nivel temporáriamente. A única saída é cumprir o desejo que o fantasma deseja.';
			break;
			
			case 107:
			$this->titulo = 'Grandes poders... Pequena responsabilidade';
			$this->descricao =  ' Um feiticeiro poderoso antes de morrer conjurar uma magia que envia os artefatos mais poderosos de seu mundo para o mundo do PCs e informa que entidades poderodas virão atrás para buscar. Cabe aos PCs ficarem ou não com os artefatos poderoso.';
			break;
		}
	}
}
?>