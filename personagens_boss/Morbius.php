<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//FICHA DO PRIMEIRO BOOSS
	
	require('../classes/ficha_de_boss.php');
	
	$Morbius = new Boss();
	$objeto = $Morbius;
	$Morbius->nome = 'Mestre Morbius';
	$Morbius->nomeJogador = 'master';
	$Morbius->classe = 'Teurgo Mistico';
	$Morbius->raca = 'Humano';
	$Morbius->olhos = '-';
	$Morbius->cabelos = 'preto';
	$Morbius->pele = 'Branca';
	$Morbius->tendencia = 'C/M';
	$Morbius->peso = '80Kg';
	$Morbius->altura = '1,80';
	$Morbius->deslocamento = '9m';
	$Morbius->idade = '34';
	$Morbius->sexo = 'Masculino';
	$Morbius->tipo = 'Humanóide';
	$Morbius->subtipo = 'Padrão';
	$Morbius->xp_fornecido = '23.000 xp';
	$Morbius->posto_divino = 'Nenhum';
	
	$Morbius->nivel = '10 fet/10 teug';
	$Morbius->xp = '253.000';
	
	$Morbius->for_ = ' 10+0';
	$Morbius->des_ = ' 12+1';
	$Morbius->con_ =	' 16+3';
	$Morbius->int_ =	' 19+4';
	$Morbius->sab_ =	' 16+3';
	$Morbius->car_ =	' 32+11';
	
	$Morbius->for_mod =  '+0';
	$Morbius->des_mod =  '+1';
	$Morbius->con_mod =	'+3';
	$Morbius->int_mod =	'+4';
	$Morbius->sab_mod =	'+3';
	$Morbius->car_mod =	'+11';
	
	$Morbius->PV = '136';
	$Morbius->iniciativa = '+5';
	$Morbius->CA = '19 = 10+1+3+5';
	$Morbius->BBA[0] = '+10/+5';
	$Morbius->BBA[1] = '-';
	$Morbius->KI = '-';
	
	$Morbius->fortitude = '16';
	$Morbius->vontade = '20';
	$Morbius->reflexos = '16';
	$Morbius->teste_base_classe_1[0] = '3'; //fort
	$Morbius->teste_base_classe_1[1] = '7'; //vont
	$Morbius->teste_base_classe_1[2] = '3';//refl
	
	$Morbius->teste_base_classe_2[0] = '5'; //fort
	$Morbius->teste_base_classe_2[1] = '5'; //vont
	$Morbius->teste_base_classe_2[2] = '5';//refl
	
	$Morbius->teste_base_magico = '5';	   //Bonus magico nos testes de rsistencia
	
	$Morbius->armas = 'Cetro izokles +3';
	$Morbius->ataque_total = '+13/+8';
	$Morbius->ataque_distancia = '+11/+6';
	$Morbius->dado_dano = '1d6+0';

	$Morbius->pericias_nome[0] = 'Conhecimento Arcano (Int)	  44 = 26 + 18';
	$Morbius->pericias_nome[1] = 'Concentração (Con) 	  	  43 = 26 + 17';
	$Morbius->pericias_nome[2] = 'Saltar (for)	 	  	  	  82 = 26 + 16 + 10 + 30';
	$Morbius->pericias_nome[3] = 'Conhecimento religião(Int)   43 = 26 + 17';
	$Morbius->pericias_nome[4] = 'Blefar  (Car)		  	  	  45 = 26 + 19';	 
	$Morbius->pericias_nome[5] = 'Disfarces (Car)		  	  45 = 26 + 19';
	$Morbius->pericias_nome[6] = 'identificar magia (Sab)	  44 = 26 + 18';
	$Morbius->pericias_nome[7] = 'Ouvir (Sab)			 	  45 = 26 + 19';
	$Morbius->pericias_nome[8] = 'Procurar (Int)		  	  43 = 26 + 17';
	
	$Morbius->imunidades[0] = 'nenhuma';
	
	$Morbius->iventario[0] = 'manto da resistância +5';
	$Morbius->iventario[1] = 'Anel da proteção +5';
	$Morbius->iventario[2] = 'Cetro Izokles Este cetro possui vinte cargas da magia relampago e bola de fogo maximizados, suas cargas são renovadas uma vez por dia.';
	$Morbius->iventario[3] = '1 Tomo do grande sábio';
	$Morbius->iventario[4] = '3 rubis (valor de 12.000 PO cada uma)';
	$Morbius->iventario[5] = '1 Anel dos três desejos';
	$Morbius->iventario[6] = '';
	
	$Morbius->talentos[0] = 'Salto nas nuvens(ganho)';
	$Morbius->talentos[1] = 'Rajada de golpes';
	$Morbius->talentos[2] = 'Ataque desarmadov';
	$Morbius->talentos[3] = 'Movimento rápido';
	$Morbius->talentos[4] = 'Chakra ';
	$Morbius->talentos[5] = 'Evasão';
	$Morbius->talentos[6] = 'Evasão aprimorada';
	$Morbius->talentos[7] = 'Mestre em jutso';
	$Morbius->talentos[8] = 'Tecnica do jutso mudo(custo add +1 pts de chakra e CD+5)';
	$Morbius->talentos[9] = 'Tecnica do parado(custo add +1 pts de chakra e CD+5)';
	$Morbius->talentos[10] = 'Tecnica da substituição de corpo';
	$Morbius->talentos[11] = 'Técnica do salto de gafanhoto';
	$Morbius->talentos[12] = 'Tecnica do chakra adesivo';
	$Morbius->talentos[13] = 'mestre em jutso aprimorado (reduz em 2 pts de chakra o seu jutso)';
	$Morbius->talentos[14] = 'Tecnica do salto símio';
	$Morbius->talentos[15] = 'Tecnica do jutso máximo';
	$Morbius->talentos[16] = 'Tecnica do jutso potencializado';
	$Morbius->talentos[17] = 'Reflexos rápidos';
	$Morbius->talentos[18] = 'Vitalidade aprimorada';
	$Morbius->talentos[19] = 'esquiva';
	$Morbius->talentos[20] = 'iniciativa aprimorada(ganho)';
	$Morbius->talentos[21] = 'ataque poderoso(ganho)';
	$Morbius->talentos[22] = 'mobilidade';
	$Morbius->talentos[23] = 'acuidade com arma(ganho)';
	$Morbius->talentos[24] = 'foco em pericia (esconder-se) (ganho)';
	$Morbius->talentos[25] = 'foco em pericia aprimorado(esconder-se) (ganho)';
	$Morbius->talentos[26] = 'especialização em arma(shuriken)';
	$Morbius->talentos[27] = 'especialização aprimorada em arma(shuriken)';
	$Morbius->talentos[28] = 'especialização em combate';
	$Morbius->talentos[29] = 'jutso persistente(dobra a duração)';
	$Morbius->talentos[30] = 'jutso prolongado(aumenta para 24 horas)';
	
	
	$Morbius->habilidade_similar_magia[0] = '
											Jutso de invocação 9° nivel
											Criatura (Escorpião monstruoso) ND 12 (livro dos monstros, página 290)
											Custo de chakra: 7
											
											';
											
	$Morbius->habilidade_similar_magia[1] = '
											Edo tensai 9° nivel
											Ressucita alguém.
											Custo de chakra: 7
											
											';
	$Morbius->habilidade_similar_magia[2] = '
											Jutso do saldo alto 1° nivel
											Concede +30 em saltar(sempre lançada como Jutso persistente: dura 24h)
											Custo de chakra: 3
											
											';
											
	$Morbius->habilidade_similar_magia[3] = '
											Jutso da shuriken elétrica 2° nivel
											6 shurikens de eletricidade que podem ser arremessadas de uma única vez no alvo 
											causando 3d6 de dano por eletricidade +1. Alcance 13m decisivo(19-20)x2
											Custo de chakra: 1
											
											';										
	
	$Morbius->habilidade_similar_magia[4] = '
											Jutso da pele metálica 5°nivel
											Concede +8 de bônus de armadura natural e penalidade de -2 na destreza.
											(sempre lançada como Jutso persistente: dura 24h)
											Custo de chakra: 7
											
											';
	$Morbius->habilidade_similar_magia[5] = '
											Black Rasengan no jutso 9° nivel
											Uma esfera negra de puro vácuo que desintegra tudo o que toca. 
											Deslocamento 9m, alcance 90m, duração 22 rodadas, dano 40d6. Detalhes pág 112(livro do arcano)
											Custo chakra: 7
											
											';
	$Morbius->habilidade_similar_magia[6] = '
											Suiton no jutso 1° nivel
											Cia até 172 Litros  dagua, alcance 40,5m
											Custo de chakra: 1
											
											';
	$Morbius->habilidade_similar_magia[7] = '
											Jutso do vôo 3° nivel
											Capacidade de voar com deslocamento de 18m. .(sempre lançada como Jutso persistente: dura 24h)
											Custo de chakra: 5
											
											';
	$Morbius->habilidade_similar_magia[8] = '
											
											Jutso tensai 1° nivel
											Aumenta 6 no bônus e dano.(sempre lançada como Jutso persistente: dura 24h)
											Custo chakra: 3
											
											';
	$Morbius->habilidade_similar_magia[9] = '
											Jutso da proteção 1° nivel
											Aumenta + 5 na CA por bônus de deflexão. .(sempre lançada como Jutso persistente: dura 24h)
											Custo chakra: 3
											
											';				
	$Morbius->habilidade_similar_magia[10] = '
											Jutso do clones das sombras 7° nivel
											Cria 4 cópias de si mesmo com um quarto de seus PVs originais. Elas não executam jutsos. Duração 2min
											Custo chakra: 6
											164 pvs as cópias
											CA 46
										
										';		
										
	$Morbius->historia = '
	Katsou nasceu em uma vila onde uma sociedade ninja existia, desde pequeno ja era treinado pelo seu pai para 
	mais tarde ser poderoso e dar continuidade ao legado da família, entretando quando adolecente houve uma
	terrivel catástrofe em sua vila, seus inimigos mortais, os ninjas das sombras invadiram a vila para roubar
	uma pergaminho que possuia poderes de ressurreição.Os poucos sobrevientes decidiram partir e continuar a
	sua viada em cidades maiores no reino principal, enquanto outros buscavam vingança. Katsuo resolveu desbravar 
	o mundo a fora para ser tornar mais forte e um dia ajudar os sobreviventes em sua vingança.
	Ainda jovem, Katsuo conhece um grupo de aventureiros que se tornariam os seus melhores amigos, juntos se 
	intitulavam equipe 6 que era composto por: Mahatima Gandi, um monge muito forte, Fenhrir o feiticeiro, Loki 
	(Behemuth) o barbaro, Dora a arqueira e Kaiser um samurai renegado pelo seu povo.
	A amizade era perfeita e perpetuou por um longo tempo, entretanto numa aventura fora dos confins de seu 
	mundo(em outro plano), eles conseguiram ajudar a um deus chamado Borunda num combate contra o seu hirmão maligno
	e aprisiona-lo. Condecorados pela tamanha fassanha, o  grupo foi presenteado com um pergaminho. Cada
	um dele passaram a ter posse de um poderoso pergaminho que segundo o deus Borunda conforme o passar do 
	tempo, o pergaminho despertaria mais poderes e os tornaria mais forte. Apartir desse momento    
	Katsuo começou a se corromper quando sentiu o incrivel poder que seu pergaminho estava lhe dando com o passar
	do tempo, ele comuçou a imaginar o que aconteceria se ele juntasse todos os pergaminhos. Acabou chegando a uma 
	conclusão na qual se tornaria um deus se as reunisse.
	A primeira oportunidade de obter um pergaminho foi com o acidente de Dora que foi a porta de entrada para 
	o caminho da desonrra  e escuridão. Logo depois com a desconfiança de Kaiser, Katsu encontrou mais uma vez
	outra porta para se aprofundar ainda mais no caminho onde não teria mais volta. Ele abdicou do respeito e 
	da amizade de todos os seus amigos para se tornar um deus.
	Mais tarde com com os pergaminhos de Dora e Kaiser, Katsuo descobriu que a união destes itens dava poderes 
	ainda maiores do que ele ja tinha, isso reforçou muito a idéa que que todos  os pergaminhos reunidos lhe 
	concederiam os poderes de um deus.
	Katsuo ninja das sombras 23 humano 70 anos pele branca olhos verdes cabelhos pretos e curto sem barba 64kg 1,72
						';																																												 

?>