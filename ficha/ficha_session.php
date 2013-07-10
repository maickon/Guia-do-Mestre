<?php

			$_SESSION['nivel'] = $personagem->nivel;
			$_SESSION['sexo'] = $personagem->sexo;
			$_SESSION['nome'] = $personagem->nome;
			$_SESSION['classe'] = $personagem->classe;
			$_SESSION['for'] = $personagem->for_;
			$_SESSION['con'] = $personagem->con_;
			$_SESSION['des'] = $personagem->des_;
			$_SESSION['int'] = $personagem->int_;
			$_SESSION['sab'] = $personagem->sab_;
			$_SESSION['car'] = $personagem->car_;
			
			$_SESSION['for_mod'] = $personagem->gerar_modificador_forca();
			$_SESSION['con_mod'] = $personagem->gerar_modificador_constituicao();
			$_SESSION['des_mod'] = $personagem->gerar_modificador_destreza();
			$_SESSION['int_mod'] = $personagem->gerar_modificador_inteligencia();
			$_SESSION['sab_mod'] = $personagem->gerar_modificador_sabedoria();
			$_SESSION['car_mod'] = $personagem->gerar_modificador_carisma();
			
			$_SESSION['olhos'] = $personagem->olhos;
			$_SESSION['pele'] = $personagem->pele;
			$_SESSION['cabelos'] = $personagem->cabelos;	
			$_SESSION['raca'] = $personagem->raca;
			$_SESSION['deslocamento'] = $personagem->gerar_deslocamento();
			$_SESSION['xp'] = $personagem->xp;	
			$_SESSION['nome_jogador'] = $personagem->nomeJogador;
			$_SESSION['tendencia'] = $personagem->tendencia;
			$_SESSION['divindade'] = $personagem->divindade;
			$_SESSION['tamanho'] = $personagem->tamanho;
			$_SESSION['CA'] = $personagem->gerar_CA();
			$_SESSION['PV'] = $personagem->gerar_PV();
			$_SESSION['idade'] = $personagem->idade;
			$_SESSION['altura'] = $personagem->altura;
			$_SESSION['peso'] = $personagem->peso;
			$_SESSION['base_fort'] = $personagem->fortitude;
			$_SESSION['base_vont'] = $personagem->vontade;
			$_SESSION['base_refl'] = $personagem->reflexos;  
			$_SESSION['BBA'] = $personagem->exibir_BBA();
			$_SESSION['bonus_base_de_ataque1'] = $personagem->bonus_base_ataque[0];
			$_SESSION['bonus_base_de_ataque2'] = $personagem->bonus_base_ataque[1];
			$_SESSION['bonus_base_de_ataque3'] = $personagem->bonus_base_ataque[2];
			$_SESSION['bonus_base_de_ataque4'] = $personagem->bonus_base_ataque[3];
			$_SESSION['ataque_desarmado'] = 'desarmado';
			$zr=0; if($personagem->gerar_modificador_forca() < 0){ $_SESSION['dano'] = $personagem->dado_dano."+".$zr;}else{$_SESSION['dano'] = $personagem->dado_dano."".$personagem->gerar_modificador_forca();} 
			
			if(!empty($_SESSION['bonus_base_de_ataque1'])){ $_SESSION['sinal_1'] = '+';}else{ $_SESSION['sinal_1'] = ''; }
			if(!empty($_SESSION['bonus_base_de_ataque2'])){ $_SESSION['sinal_2'] = '/ +';}else{ $_SESSION['sinal_2'] = ''; }
			if(!empty($_SESSION['bonus_base_de_ataque3'])){ $_SESSION['sinal_3'] = '/ +';}else{ $_SESSION['sinal_3'] = ''; }
			if(!empty($_SESSION['bonus_base_de_ataque4'])){ $_SESSION['sinal_4'] = '/ +';} else{ $_SESSION['sinal_4'] = ''; }
			
			$_SESSION['ataque_corpo_a_corpo'] = $personagem->exibir_ataque_corpo_a_corpo();
			$_SESSION['ataque_a_distancia'] = $personagem->exibir_ataque_a_distancia();
			$_SESSION['pericias_nome'] = $personagem->pericias_nome;
			$_SESSION['pericias_mod'] = $personagem->pericias_mod;
			$_SESSION['pericias_grad'] = $personagem->pericias_grad;
			$_SESSION['talentos'] = $personagem->talentos;
			$_SESSION['talentos_add'] = $personagem->acumular_talento();
			
			if($personagem->classe == "monge"){
				 $_SESSION['mon_sab'] = $_SESSION['sab_mod'];
			}else{
				 $_SESSION['mon_sab'] = '';
			}
			$qtd_pericias = count($personagem->pericias_grad);
			
			for($x =0; $x<= $qtd_pericias-1; $x++){
					$_SESSION['pericias_nome'][$x] =  $personagem->pericias_nome[$x];
			}
			
			for($x =0; $x<= $qtd_pericias-1; $x++){
					$_SESSION['pericias_mod'][$x] =  $personagem->pericias_mod[$x];
			}
			
			for($x =0; $x<= $qtd_pericias-1; $x++){
					$_SESSION['pericias_grad'][$x] =  $personagem->pericias_grad[$x];
			}
		
		
?>