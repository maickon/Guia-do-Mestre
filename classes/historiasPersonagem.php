
<?php
	
	require_once '../classes/personagem.php';
	
	class HistoriasPersonagem extends Personagem{
		
		public $inicio;
		public $meio;
		public $fim;
		
		public $nome;
		public $sexo;
		
		function __construct($inicio,$meio,$fim){
			
			$this->inicio = $inicio;
			$this->meio = $meio;
			$this->fim = $fim;
		}
		
		function gerarSexo(){
			$valor = rand(1,2);
			if($valor == 1){
				$sexo = 'masculino';
			}else {
				$sexo = 'feminino';
			}
			$this->sexo = $sexo;
			return $this->sexo;
		}
		
		function gerarNome(){
			require_once '../classes/nomes.php';
			if($this->sexo == 'masculino'){
				$posicao = rand(0,count($nomesMasculinos)-1);
				$this->nome = $nomesMasculinos[$posicao];
			}elseif($this->sexo == 'feminino'){
				$posicao = rand(0,count($nomesFemininos)-1);
				$this->nome = $nomesFemininos[$posicao];
			}
			return $this->nome;
		}
		
		function gerarInicio(){
			$historia = rand(1, 29);
			$this->gerarSexo();
			$this->gerarNome();
			$nome = '<b>'.$this->nome.'</b>';
			
			switch($historia){
				
				case 1:$this->inicio = $nome." nasceu na cidade capital do grande reino.";
				break;
				
				case 2:$this->inicio = $nome." nasceu num pequeno vilarejo ao norte da cidade capital do grande reino.";
				break;
				
				case 3:$this->inicio = $nome." nasceu no leste, em uma cidade dominada por uma profecia onde seus habitantes são imortais.";
				break;
				
				case 4:$this->inicio = $nome." nasceu filho de pais plebeus numa cidade pequena localizada num reino ao leste.";
				break;
				
				case 5:$this->inicio = $nome." nasceu em uma cidade esquecida governada por um tirano localizada ou leste. ";
				break;
				
				case 6:$this->inicio = $nome." nasceu em uma cidade localizada depois dos confins do deserto.";
				break;
				
				case 7:$this->inicio = $nome."nasceu no reino perdido dos dragões.";
				break;
				
				case 8:$this->inicio = $nome." nasceu em uma ilha muito longe da cidade capital, seu povo vive sobre o regime de um pescador barbaro.";
				break;
				
				case 9:$this->inicio = $nome." nasceu em uma aldeia muito pobre .";
				break;
				
				case 10:$this->inicio = $nome." nasceu na floresta das fadas azuis, dentro desta floresta vive um pequeno povoado. ";
				break; 
				
				case 11:$this->inicio = $nome." nasceu na grande metrópole voadora, trata-se de uma cidade voadora criada e regida por um poderoso mago.";
				break;
				
				case 12:$this->inicio = $nome." nasceu nas montanhas frias do reino principal.";
				break;
				
				case 13:$this->inicio = $nome." nasceu em uma cidade dominada pela magia.";
				break;
				
				case 14:$this->inicio = $nome." nasceu na cidade em Krohar, uma cidade militar regida por um ditador muito respeitado.";
				break;
				
				case 15:$this->inicio = $nome." nasceu em Lilihof, uma cidade elfica localizada nas árvores na floresta de zamehor. ";
				break;
				
				case 16:$this->inicio = $nome." nasceu em Grusmush uma cidade barvara onde a tribo faz uso de práticas canibais.";
				break;
				
				case 17:$this->inicio = $nome." nasceu no reino dos ladinos, neste reino desde criança eles aprendem a roubar para mais tarde praticarem suas habilidades no mundo a fora.";
				break;
				
				case 18:$this->inicio = $nome." nasceu em Lordonte, um deserto perdido no tempo, muito esquecido depois da batalha dos falsos deusses.";
				break;
				
				case 19:$this->inicio = $nome." nasceu na Geórgia, uma cidade onde a ordem é o mais importante legado que seus cidadadões podem levar.";
				break;
				
				case 20:$this->inicio = $nome." nasceu Koop, cidade natal de umas criaturas muito interessantes, elas são usadas como meio de tranporte.";
				break;
				
				case 21:$this->inicio = $nome." nasceu em Terza, uma ilha cercadas por monstros marinho, reza a lenda que o deus dos mares rogou uma maldição sobre esta ilha.";
					
				break;
				
				case 22:$this->inicio = $nome." nasceu no reino dos anões, escondidos por todos, os anões guardam sua maravilhosa cidade do mundo a fora.";
				break;
				
				case 23:$this->inicio = $nome ." nasceu Lotubar, situado ao oeste, esta cidade é caracterizada por seus festivais de luta livre que reunem combatentes do mundo inteiro.";
				break;
				
				case 24:$this->inicio = $nome ." nasceu Jaguarda, cidade situada dentro do reino da magia perdida. Este lugar é carcterizado pela falha de magia presente no local.";
				break;
				
				case 25:$this->inicio = $nome ." nasceu no reino situado ao oeste, despois das montanhas farpadas.";
				break;
				
				case 26:$this->inicio = $nome ." nasceu em Tokina, cidade situada no reino dos samurais onde a honra vale mais que a vida.";
				break;
				
				case 27:$this->inicio = $nome." nasceu em uma cidade pobre dentro do reino principal.";
				break;
				
				case 28:$this->inicio = $nome ." nasceu em uma região muito estranha onde segundo todo o reinado, não tem localização catalogada.";
				break;
				
				case 29:$this->inicio = $nome ." nasceu em uma cidade dominada pela magia.";
				break;
				
			}
		}
		
		function gerarMeio(){
			$meio = rand(1, 7);
			switch($meio){
				case 1:$this->meio = " Sua infância foi muito difícil pois muitas coisas ruins aconteceram. Seus pais eram casados mas faleceram quando ele(a) tinha 12 anos gerando uma reviravolta em sua vida.";
				break;
				
				case 2:$this->meio = " Criado pela avó, ele(a) aprendeu muitas coisas que eram necessárias para a sua sobrevivência. Quando se tornou adulto(a) decidiu segui caminho afora.";
				break;
				
				case 3:$this->meio = " Criado pelo avô, ele(a) aprendeu muitas coisas que eram necessárias para a sua sobrevivência. Quando se tornou adulto(a) decidiu segui caminho afora.";
				break;
				
				case 4:$this->meio = " Criado pelo seu hirmão mais velho, ele(a) aprendeu muitas coisas que eram necessárias para a sua sobrevivência. Quando se tornou adulto decidiu segui caminho afora.";
				break;
				
				case 5:$this->meio = " Criado apenas pela sua mãe, ela(e) aprendeu muitas coisas que eram necessárias para a sua sobrevivência. Quando se tornou adulto decidiu seguir caminho afora tentando encontrar respostas sobre quem poderia ser a sua mãe.";
				break;
				
				case 6:$this->meio = " Criado apenas pela seu pai, ele(a) aprendeu muitas coisas que eram necessárias para a sua sobrevivência. Quando se tornou adulto decidiu segui caminho afora com o objetivo de se tornar um reconhecido(a) aventureiro(a).";
				break;
				
				case 7:$this->meio = " Quando criança, teve seu destino traçado por um homem misterioso que convenceu aos responsáveis do personagem que o(a) levasse. O homem misterioso criou a criança e a treinou dizendo-o que a ele(a) pertencia um grande futuro.";
				break;
			}
		}
		
		function gerarFim(){
			
			$fim = rand(1, 8);
			
			switch($fim){
				case 1:$this->fim = " Durante seu caminho novas habilidades foram aprendidas, novos amigos e inimigos. Durante algumas ocasiões monstros foram encontrados no caminho e de tudo mais. Seu objetivo parece estar longe de ser alcançado, mas sua ambição é maior que tudo.";
				break;
					
				case 2:$this->fim = " Recentemente teve um conflito com o seu grupo resultando em uma decisão de aventurar-se sozinho, no entando caminhar este mundo afora sozinho sem amigos é muito perigoso.";
				break;
				
				case 3:$this->fim = " Caminhando pelo mundo a fora em busca de amigos para formar um  grupo que lhe ajude a cumprir seus objetivos e a ganhar fama.";
				break;
				
				case 4:$this->fim = " Caminhando pelo mundo com sua equipe, foi vítima de uma traição de seus companheiros e hoje busca uma nova equipe para vingar-se dos traidores.";
				break;
				
				case 5:$this->fim = " Agora deseja encontrar um grupo para convence a desbravar uma masmorra muito perigosa para encontrar um tesouro perdido.";
				break;
				
				case 6:$this->fim = " Anda pelo mundo buscando vitímas que caiam em suas conversas e que sejam levadas para o abismo. No caso leva-los para o abismo significa disfarsar-se de amigo e leva-los para o covil do seu grande mestre que possuirá a alma das vítimas num ritual maligno.";
				break;
				
				case 7:$this->fim = " Durantes aventuras passadas teve a perda de todos os seu antigos amigos. E hoje busca encontar uma nova equipe.";
				break;
				
				case 8:$this->fim = " Deseja entrar em um grupo e rolba-los no melhor momento possivel.";
				break;
				
			}
			
		}
		
		function gerarHistoriaCompleta(){
			
			return $this->inicio.''.$this->meio.''.$this->fim;
		}
	}
?>