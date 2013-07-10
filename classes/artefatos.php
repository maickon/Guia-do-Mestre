<?php

class Artefatos{

	public $id;
	public $nome;
	public $descricao_historia;
	public $descriacao_regra;
	
	function __contruct($id,$nome,$descricao_historia,$descriacao_regra){
			
			$this->id = $id;
			$this->nome = $nome;
			$this->descricao_historia = $descricao_historia;
			$this->descriacao_regra = $descriacao_regra;
	
		}
		
	function gerar_artefato(){
	
		$escolido = rand(1,23);
		
		switch($escolido){
		
			case 1:
				$this->id = "<strong>".$escolido."</strong>";
				$this->nome = "<strong>Verethragna Blade</strong>";
				
				$this->descricao_historia = "<strong>
												Verethragna Deus Persa da guerra e do triunfo,a cerca de 2.500 em uma batalha contra os humanos,
												resolveu criar essa espada de presente a o único humano que conseguiu o ferir,como prova de sua bravura.
										     </strong>";
											 
				$this->descriacao_regra = "
											Trata-se de uma espada longa (1d8) indestrutivel que não pode ser atingida por nenhum tipo de magia. 
											Qualquer dano causado por ela será crítico sempre que atingir um oponente. Ou seja ela causará sempre dano dobrado. 
											Considera-se um 20 no dado quando atacar com ela.
										  
										  ";
				break;
				
				case 2:
				$this->id = "<strong>".$escolido."</strong>";
				$this->nome = "<strong>
								Anel de Minerva
							   </strong>";
				
				$this->descricao_historia = "<strong>
												Um dia certo ferreiro criou esse anel para presentear Minerva Deusa da sabedoria Greco-romana,
												e como ato de gratidão ela devolveu o anel com sua benção divina,dando o poder de aumentar a Sabedoria 
												daquele que o porta.
										     </strong>";
											 
				$this->descriacao_regra = "
										  	Este anel concede +8 de sabedoria ao usuário.
										  ";
				break;
				
				case 3:
				$this->id = "<strong>".$escolido."</strong>";
				$this->nome = "<strong>
								Senjou blade
							   </strong>";
				
				$this->descricao_historia = "<strong>
												Durante a era de edo, Masamune date pediu a seu ferreiro para criar essa katana sendo 
												feita com propriedades magicas,para ser ultilizada na batalha de senjougahara,
												e até os tempos atuais,ela vem estando em varios campos de batalha sendo passada para os melhores samurais de edo.
										     </strong>";
											 
				$this->descriacao_regra = "
										  	Esta katana +5 possui a habilidade de uma vez por dia causar o dano do laijutso máximo sem precisar rolar os d6.
										  ";
				break;
				
				case 4:
				$this->id = "<strong>".$escolido."</strong>";
				$this->nome = "<strong>
								Armadura de midas
							   </strong>";
				
				$this->descricao_historia = "<strong>
											Essa armadura foi feita a pedido do rei Midas,para conter seu poder magico de trasforma tudo em ouro,
											mais ele percebeu que ela fazia mais do que isso... ela fez ele ser imune a qualquer poder magico,humano ou divino.
											</strong>";
											 
				$this->descriacao_regra = "
										  	A armadura de midas é um camisão de cota de malha que concede ao ser portador imunidade total vinda de qualquer magia, 
											seja arcana ou divina (até 9º circulo). Magias de área também não afetam o portador, 
											a armadura simplesmente anula a magia que entrar na área da armadura(3m).
										  ";
				break;
			
				case 5:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Colar encantador
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Esse colar foi feito pelo poder da Deusa Afrodite,tendo como poder encantar os inimigos e 
												fazerem eles ficarem atordoados por certo tempo.
												</strong>";
												 
					$this->descriacao_regra = "
												Este colar concede o poder de atordoar qualquer pessoa que olhe diretamente o seu portador,
												a vítima de ser bem sucedido em um teste de VONTADE CD 20 para não ficar atordoado por 1d4 de rodadas. 
											  ";
					break;
					
				case 6:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Machado do Espirito Incandecente
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Forjado pelo proprio Hefesto esse marchado tem o poder de ficar incandecente quando seu portador 
												entra em furia na batalha.
												</strong>";
												 
					$this->descriacao_regra = "
												Este machado grande obra prima, liberta seus poderes quando o seu portador entra em uma fúria destrutiva.
												Enquanto o usuário estiver em fúria este machado será +5 flamejante e concederá +4 em força e constituição.
											  ";
					break;
					
				case 7:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Faísca de Zeus
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Durante a batalha dos Deuses do Olimpo contra Tifão,seus poderes cruzados deram origem a varios itens magicos,
												sendo um deles essa lança.
												</strong>";
												 
					$this->descriacao_regra = "
												Trata-se de uma lança longa +4 capaz de disparar um raio que alcança 10m 
												de distância como ataque a distância causando 10d6 de dano.
											  ";
					break;	
					
				case 8:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Bússola de Jasão
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Feito para direcionar o navio argos de Jasão em sua busca pelo velocino de ouro,
												essa bússola têm o poder de mostrar a direção do que o coração de seu portador mais deseja.
												</strong>";
												 
					$this->descriacao_regra = "
												A bússola possui o poder de guiar o seu portador até onde ele deseja ir,
												 basta o portador conhecer sobre o lugar, ou seja ja ter estado la.
											  ";
					break;
					
				case 9:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Machado do Espirito Incandecente
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Forjado pelo proprio Hefesto esse marchado tem o poder de ficar incandecente quando seu portador 
												entra em furia na batalha.
												</strong>";
												 
					$this->descriacao_regra = "
												Este machado grande obra prima, liberta seus poderes quando o seu portador entra em uma fúria destrutiva.
												Enquanto o usuário estiver em fúria este machado será +5 flamejante e concederá +4 em força e constituição.
											  ";
					break;
					
				case 10:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Arco longo dos poderosos
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Esse arco foi criado pelo lider Legolas da tribo dos elfos,a quanto tempo ele foi feito ninguém sabe... 
												só uma coisa é conhecida deste arco... que só um poderoso arqueiro consegue o ultilizar.												</strong>";
												 
					$this->descriacao_regra = "
												Este arco longo só pode ser usado por arqueiros experientes (12º ou mais), uma vez usado por arqueiro
												inesperiente ou por pessoas que não saibam usar o arco, ele simplesmente não funcionará pois sua corda usada para dispara 
												a flecha sumirá. Entretando quando usado por um arqueiro experiente, 
												este arco possuirá a habilidade de dobrar a quantidade de flexas lançadas pelo arco no momento do disparo.
											  ";
					break;
					
				case 11:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Escudo Aegis
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Por décadas esse escudo foi perdido... mais a poucos anos um aventureiro o encontro em meio sua jornada,
												e quando viu o nome  encrustado nele tremeu de medo... pois era o proprio escudo Aegis.		
												</strong>";
												 
					$this->descriacao_regra = "
												Este escudo grande banhado a ouro com uma face de uma medusa no centro, 
												possui a habiliade de transmitir uma sensação de terror que é capaz de paralizar qualquer pessoa que o veja por 1d4 de rodadas.  
											  ";
					break;
					
				case 12:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Espadoa dos três (Creezol)
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Há dois mil anos essa espada foi forjada pelos 3 mais poderosos paladinos,tendo sido feita para manter a ordem no mundo, 
												segundo lendas, uma vez empunhada por um paladino poderoso, o mal se curva diante dela e toda ordem volta ao normal .			
												</strong>";
												 
					$this->descriacao_regra = "
												Esta espada larga obra prima conhecida como (Creezol), quando empunhada por um paladino de nivel 16 ou maior, 
												se torna uma +5 sagrada com mais três habilidades adicionais: 1º caçadora de demônhos.
												<br />
												<strong>Caçadora de domônhos(nova Hablidade):</strong>
													Qualquer demônio diante desta espada não consegue mentir.
													Quando esta espada atinge um demônio ela simplemente rompe a existencia da criatura causando exatamente o dano suficiente para matar a criatura.
												<br />
												<strong>2º Ressureição verdadeira</strong>
													3 vezes por dia, a espada pode lançar em seu portador após a sua morte.
												<br />
												<strong>3º Compuração</strong>
													Qualquer pessoa de tendencia maligna que empunhar esta espada, sofrerá 3d6 de pontos de dano e seu verdadeiro eu cairá num poço profundo de esquecimento permanentemente(nenhuma magia é capaz de trazer a memória de volta) esquecendo quem foi,
													 o que sentia e sua própria tendencia(ou seja a espada vai lhe dar uma chance de ser bom). 

											  ";
					break;
					
				case 13:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Bracelete de Osiris
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Em nome de Osiris o faraó ordenou a seus cervos a fazerem esses braceletes para o Deus...o 
												único problema foi que o faraó ficou tão encantado pelo poder dos braceletes que os tomou para ele mesmo.
												</strong>";
												 
					$this->descriacao_regra = "
												Estes incriveis braceletes de ouro encrustados com joias preciosas aumentam sua beleza e bem estar, 
												lhe fazendo se sentir tão bem que a sensação do portador é que o bracelete faz parte de seu próprio corpo.
												 Em termos de regras ele concede +6 em carisma.
											  ";
					break;
					
				case 14:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Machado do Espirito Incandecente
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Forjado pelo proprio Hefesto esse marchado tem o poder de ficar incandecente quando seu portador 
												entra em furia na batalha.
												</strong>";
												 
					$this->descriacao_regra = "
												Este machado grande obra prima, liberta seus poderes quando o seu portador entra em uma fúria destrutiva.
												Enquanto o usuário estiver em fúria este machado será +5 flamejante e concederá +4 em força e constituição.
											  ";
					break;
					
				case 15:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Excalibur
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Em meio da era das trevas aproximadamente 400 anos d.c. Merlin forjou essa espada para o rei Arthur,a espada se tornou simbolo do trono... 
												mais nos tempos atuais seu paradeiro era desconhecido...até agora.
												</strong>";
												 
					$this->descriacao_regra = "
											Trata-se de uma espada +5 indestrutivel.
											
											  ";
					break;
					
				case 16:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Machado do Espirito Incandecente
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Forjado pelo proprio Hefesto esse marchado tem o poder de ficar incandecente quando seu portador 
												entra em furia na batalha.
												</strong>";
												 
					$this->descriacao_regra = "
												Este machado grande obra prima, liberta seus poderes quando o seu portador entra em uma fúria destrutiva.
												Enquanto o usuário estiver em fúria este machado será +5 flamejante e concederá +4 em força e constituição.
											  ";
					break;
					
				case 17:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Tomo de Merlin
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Merlin antes de sumir no mundo deixou esse livro que contém os segredos de suas magias... mais como sempre, ele de usou suas brincadeiras
												e selou as magias,para que o mago que o encontrasse só podesse ter acesso as magias conforme a capacidade de seu poder.
												</strong>";
												 
					$this->descriacao_regra = "
												 Este livro poderoso só tem seu efeito despertado quando lido por um mago, 
												para qualquer outra pessoa que não seja um mago, esse livro não passará de um item mundano. 
												Quando lido, este livro disperta em seu leitor o conhecimento de todas as magias até o circulo atual em que ele pode conjurar, 
												além disso sua capacidade de magias conjuradas por dia aumentam em +1 para todos os circulos que ele conhece. 
												Uma vez lido o livro perde o seu poder e se torna um item mundano.											  ";
					break;
					
				case 18:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Machado do Espirito Incandecente
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Forjado pelo proprio Hefesto esse marchado tem o poder de ficar incandecente quando seu portador 
												entra em furia na batalha.
												</strong>";
												 
					$this->descriacao_regra = "
												Este livro poderoso só tem seu efeito despertado quando lido por um mago, 
												para qualquer outra pessoa que não seja um mago, esse livro não passará de um item mundano. 
												Quando lido, este livro disperta em seu leitor o conhecimento de todas as magias até o circulo atual em que ele pode conjurar, 
												além disso sua capacidade de magias conjuradas por dia aumentam em +1 para todos os circulos que ele conhece. 
												Uma vez lido o livro perde o seu poder e se torna um item mundano.
											  ";
					break;
					
				case 19:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Elmo Espartando de Batalha
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Feito em esparta esse elmo tem como caracteristica,
												proporcionar ao usuario melhor visão do campo de batalha ao mesmo tempo que o protege.
												</strong>";
												 
					$this->descriacao_regra = "
												Este elmo espartano elém de conceder +2 na CA de bônus mágico, 
												permite ao seu portador sucesso em qualquer teste de observar somente quando ele estiver em combate.
											  ";
					break;
					
				case 20:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									A espada de Hector
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Por que fazes armas...? fizeram essa pergunta a um ferreiro... e ele respondeu...
												- Pela mesma razão que um mago estuda suas magias. Não se trata de fazer bem ou mal, 
												mas sim a arte e o talento na criação de sua obra de arte. Anos mais tarde ele mostrou sua 
												obra prima... essa bela espada cuja beleza e brilho era tanta, que palavras não precisaram 
												ser ditas. Foi presenteada ao rei Hector que derrotou seus inimigo na batalha dos 1000 dias.

												</strong>";
												 
					$this->descriacao_regra = "
												A espada de Hector como hoje em dia é conhecida, 
												trata-se de uma espada longa +3 eneria brilhante que ao ser usada emana uma forte luz que reluz por até 10m. 
											  ";
					break;
				
				case 21:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Dragão hate
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Feita das escamas de um dragão essa armadura se tornou imune a magia de dragões... 
												e ela se tornou o escudo preferido dos caçadores de dragões.

												</strong>";
												 
					$this->descriacao_regra = "
												Muito conhecida entre os caçadores de dragões, essa armadura vem sido procurada por muitos deles ha séculos. 
												Trata-se de uma armadura de batalha mágica que concede ao seu usuário +6 de bônus na CA além de imunidade total a magias de dragões.  
											  ";
					break;
				
				
				case 22:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Os cristais de Iris
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Os cristais de Iris foram dados de presente aos humanos pela Deusa para facilitar a 
												vida dos aventureiros,quando destruidos esses cristais enviam o 
												portador para o lugar desejado por ele.

												</strong>";
												 
					$this->descriacao_regra = "
												Trata-se de cristais mágicos que estão espalhados por todo o mundo, esses cristais tem a habiliade de 
												teleportar o seu portador para o local que ele deseja quando o cristal for destruido pelo seu portador. 
											  ";
					break;
				
				
				case 23:
					$this->id = "<strong>".$escolido."</strong>";
					$this->nome = "<strong>
									Sengoku Basara 
								   </strong>";
					
					$this->descricao_historia = "<strong>
												Feito em meio a era sengoku essa murasame tem grande poder destrutivo... que foi comprovado em muitas batalhas.
												</strong>";
												 
					$this->descriacao_regra = "
												Essa murasame trata-se de uma espada longa +5 sanguinária maior, seu poder de destruição é tão efetivo que basta acertar um único individuo que ele sangrará até a morte, sendo assim o seu portador em uma guerra não precisa lutar com seu inimigo até a morte, basta ecerta-lo apenas uma vez e partir para outro.
												Em termos de regra (sanguenária maior) é uma habilidade que causa um dano fixo toda rodada em uma vítima atingida pela arma. Esse dano é equivalente ao bônus mágico da arma. O dano só pode ser estancado com alguma cura.
 
											  ";
					break;
					
					
			}
		
		}
	
	}

?>