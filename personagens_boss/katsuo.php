<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//FICHA DO PRIMEIRO BOOSS
	
	require('../classes/ficha_de_boss.php');
	
	$Katsuo = new Boss();
	
	$objeto = $Katsuo;
	$Katsuo->nome = 'Katsuo';
	$Katsuo->nomeJogador = 'Maickon Rangel';
	$Katsuo->classe = 'Ninja';
	$Katsuo->raca = 'Humano';
	$Katsuo->olhos = 'Verdes';
	$Katsuo->cabelos = 'Ruivos';
	$Katsuo->pele = 'Branca';
	$Katsuo->tendencia = 'L/M';
	$Katsuo->peso = '64Kg';
	$Katsuo->altura = '1,72';
	$Katsuo->deslocamento = '32m';
	$Katsuo->idade = '70';
	$Katsuo->sexo = 'Masculino';
	$Katsuo->tipo = 'Humanóide';
	$Katsuo->subtipo = 'Padrão';
	$Katsuo->xp_fornecido = '20.000 xp';
	$Katsuo->posto_divino = 'Nenhum';
	
	$Katsuo->nivel = '23';
	$Katsuo->xp = '253.000';
	
	$Katsuo->for_ = ' 42+16';
	$Katsuo->des_ = ' 49+19';
	$Katsuo->con_ =	' 45+17';
	$Katsuo->int_ =	' 45+17';
	$Katsuo->sab_ =	' 48+19';
	$Katsuo->car_ =	' 49+19';
	
	$Katsuo->for_mod =  '+16';
	$Katsuo->des_mod =  '+19';
	$Katsuo->con_mod =	'+17';
	$Katsuo->int_mod =	'+17';
	$Katsuo->sab_mod =	'+19';
	$Katsuo->car_mod =	'+19';
	
	$Katsuo->PV = '659 = 150+322+287';
	$Katsuo->iniciativa = '+22';
	$Katsuo->CA = '51 = 10+19+5+8+5+5-1';
	$Katsuo->BBA[0] = '+16/+11/+6';
	$Katsuo->BBA[1] = '+16/+16/+16/+11/+6';
	$Katsuo->KI = '416 = 437-21';
	
	$Katsuo->fortitude = '28';
	$Katsuo->vontade = '30';
	$Katsuo->reflexos = '38';
	$Katsuo->teste_base_classe_1[0] = '6'; //fort
	$Katsuo->teste_base_classe_1[1] = '6'; //vont
	$Katsuo->teste_base_classe_1[2] = '12';//refl
	
	$Katsuo->teste_base_magico = '5';	   //Bonus magico
	
	$Katsuo->armas = 'Desarmado';
	$Katsuo->ataque_total = '+41/+41/+41/+36/+32';
	$Katsuo->ataque_distancia = '+42/+42/+42/+38/+33';
	$Katsuo->dado_dano = '2d8+22';

	$Katsuo->pericias_nome[0] = 'Abrir Fechaduras (Des)	  44 = 26 + 18';
	$Katsuo->pericias_nome[1] = 'Acrobacia (Des)		  44 = 26 + 18';
	$Katsuo->pericias_nome[2] = 'Arte da Fuga (Des)	 	  44 = 26 + 18';
	$Katsuo->pericias_nome[3] = 'Esconder-se (Des)	  	  50 = 26 + 18 + 6';	
	$Katsuo->pericias_nome[4] = 'Concentração (Con) 	  43 = 26 + 17';
	$Katsuo->pericias_nome[5] = 'Saltar (for)	 	  	  82 = 26 + 16 + 10 + 30';
	$Katsuo->pericias_nome[6] = 'Conhecimento arcano(Int) 43 = 26 + 17';
	$Katsuo->pericias_nome[7] = 'Blefar  (Car)		  	  45 = 26 + 19';	 
	$Katsuo->pericias_nome[8] = 'Disfarces (Car)		  45 = 26 + 19';
	$Katsuo->pericias_nome[9] = 'Equilíbrio (Des)	 	  44 = 26 + 18';
	$Katsuo->pericias_nome[10] = 'Ouvir (Sab)			  45 = 26 + 19';
	$Katsuo->pericias_nome[11] = 'Procurar (Int)		  43 = 26 + 17';
	
	$Katsuo->imunidades[0] = 'venenos e doenças';
	
	$personagem->iventario[0] = 'manto da resistância +5';
	$personagem->iventario[1] = 'Anel da proteção +5';
	$personagem->iventario[2] = 'Anel da juventude(rejuvelece entre 20 a 47 anos)';
	$personagem->iventario[3] =	'20 kunais explosivas (10d6)';
	$personagem->iventario[4] =	'20 agulhas com linhas';
	$personagem->iventario[5] = '1 pergaminho da vida';
	$personagem->iventario[6] = '20 shurikens';
	
	$Katsuo->talentos[0] = 'Salto nas nuvens(ganho)';
	$Katsuo->talentos[1] = 'Rajada de golpes';
	$Katsuo->talentos[2] = 'Ataque desarmadov';
	$Katsuo->talentos[3] = 'Movimento rápido';
	$Katsuo->talentos[4] = 'Chakra ';
	$Katsuo->talentos[5] = 'Evasão';
	$Katsuo->talentos[6] = 'Evasão aprimorada';
	$Katsuo->talentos[7] = 'Mestre em jutso';
	$Katsuo->talentos[8] = 'Tecnica do jutso mudo(custo add +1 pts de chakra e CD+5)';
	$Katsuo->talentos[9] = 'Tecnica do parado(custo add +1 pts de chakra e CD+5)';
	$Katsuo->talentos[10] = 'Tecnica da substituição de corpo';
	$Katsuo->talentos[11] = 'Técnica do salto de gafanhoto';
	$Katsuo->talentos[12] = 'Tecnica do chakra adesivo';
	$Katsuo->talentos[13] = 'mestre em jutso aprimorado (reduz em 2 pts de chakra o seu jutso)';
	$Katsuo->talentos[14] = 'Tecnica do salto símio';
	$Katsuo->talentos[15] = 'Tecnica do jutso máximo';
	$Katsuo->talentos[16] = 'Tecnica do jutso potencializado';
	$Katsuo->talentos[17] = 'Reflexos rápidos';
	$Katsuo->talentos[18] = 'Vitalidade aprimorada';
	$Katsuo->talentos[19] = 'esquiva';
	$Katsuo->talentos[20] = 'iniciativa aprimorada(ganho)';
	$Katsuo->talentos[21] = 'ataque poderoso(ganho)';
	$Katsuo->talentos[22] = 'mobilidade';
	$Katsuo->talentos[23] = 'acuidade com arma(ganho)';
	$Katsuo->talentos[24] = 'foco em pericia (esconder-se) (ganho)';
	$Katsuo->talentos[25] = 'foco em pericia aprimorado(esconder-se) (ganho)';
	$Katsuo->talentos[26] = 'especialização em arma(shuriken)';
	$Katsuo->talentos[27] = 'especialização aprimorada em arma(shuriken)';
	$Katsuo->talentos[28] = 'especialização em combate';
	$Katsuo->talentos[29] = 'jutso persistente(dobra a duração)';
	$Katsuo->talentos[30] = 'jutso prolongado(aumenta para 24 horas)';
	
	
	$Katsuo->habilidade_similar_magia[0] = '
											Jutso de invocação 9° nivel
											Criatura (Escorpião monstruoso) ND 12 (livro dos monstros, página 290)
											Custo de chakra: 7
											
											';
											
	$Katsuo->habilidade_similar_magia[1] = '
											Edo tensai 9° nivel
											Ressucita alguém.
											Custo de chakra: 7
											
											';
	$Katsuo->habilidade_similar_magia[2] = '
											Jutso do saldo alto 1° nivel
											Concede +30 em saltar(sempre lançada como Jutso persistente: dura 24h)
											Custo de chakra: 3
											
											';
											
	$Katsuo->habilidade_similar_magia[3] = '
											Jutso da shuriken elétrica 2° nivel
											6 shurikens de eletricidade que podem ser arremessadas de uma única vez no alvo 
											causando 3d6 de dano por eletricidade +1. Alcance 13m decisivo(19-20)x2
											Custo de chakra: 1
											
											';										
	
	$Katsuo->habilidade_similar_magia[4] = '
											Jutso da pele metálica 5°nivel
											Concede +8 de bônus de armadura natural e penalidade de -2 na destreza.
											(sempre lançada como Jutso persistente: dura 24h)
											Custo de chakra: 7
											
											';
	$Katsuo->habilidade_similar_magia[5] = '
											Black Rasengan no jutso 9° nivel
											Uma esfera negra de puro vácuo que desintegra tudo o que toca. 
											Deslocamento 9m, alcance 90m, duração 22 rodadas, dano 40d6. Detalhes pág 112(livro do arcano)
											Custo chakra: 7
											
											';
	$Katsuo->habilidade_similar_magia[6] = '
											Suiton no jutso 1° nivel
											Cia até 172 Litros  dagua, alcance 40,5m
											Custo de chakra: 1
											
											';
	$Katsuo->habilidade_similar_magia[7] = '
											Jutso do vôo 3° nivel
											Capacidade de voar com deslocamento de 18m. .(sempre lançada como Jutso persistente: dura 24h)
											Custo de chakra: 5
											
											';
	$Katsuo->habilidade_similar_magia[8] = '
											
											Jutso tensai 1° nivel
											Aumenta 6 no bônus e dano.(sempre lançada como Jutso persistente: dura 24h)
											Custo chakra: 3
											
											';
	$Katsuo->habilidade_similar_magia[9] = '
											Jutso da proteção 1° nivel
											Aumenta + 5 na CA por bônus de deflexão. .(sempre lançada como Jutso persistente: dura 24h)
											Custo chakra: 3
											
											';				
	$Katsuo->habilidade_similar_magia[10] = '
											Jutso do clones das sombras 7° nivel
											Cria 4 cópias de si mesmo com um quarto de seus PVs originais. Elas não executam jutsos. Duração 2min
											Custo chakra: 6
											164 pvs as cópias
											CA 46
										
										';		
										
	$Katsuo->historia = '
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