<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href= "../css/index.css" />
<link rel="stylesheet" type="text/css" href="../css/teste.css" />
<link rel="stylesheet" type="text/css" href="../css/ficha_montada.css" />
</head>

<body>

<?php 
	session_start();
	include_once('../classes/personagem.php'); 
	if($_GET['estado'] == 'aleatorio'){
		$personagem = new Personagem();
		$personagem->__init_personagem__($personagem);
		$personagem->nomeJogador = 'Player';
		$personagem->tamanho = 'Medio';
		$personagem->divindade = 'Universal';
		require('ficha_session.php');
		
	}else{
		if($_GET['estado'] == 'montado'){
			$personagem = new Personagem();
			//$personagem->__init_personagem__($personagem);
			$personagem->nivel = $_POST['nivel'];
			$personagem->sexo = $_POST['sexo'];
			$personagem->nome = $_POST['nome'];
			$personagem->classe = $_POST['classe'];
			$personagem->gerar_pts_de_habilidade_add();
			$personagem->for_ = $_POST['for'];
			$personagem->con_ = $_POST['con'];
			$personagem->des_ = $_POST['des'];
			$personagem->int_ = $_POST['int'];
			$personagem->sab_ = $_POST['sab'];
			$personagem->car_ = $_POST['car'];
			$personagem->distribuir_pts_de_habilidade();
			$personagem->olhos = $_POST['olhos'];
			$personagem->pele = $_POST['pele'];
			$personagem->cabelos = $_POST['cabelos'];
			$personagem->raca = $_POST['raca'];
			$personagem->gerar_deslocamento();
			$personagem->gerar_xp();
			$personagem->nomeJogador = $_POST['jogador'];
			$personagem->tendencia = $_POST['tendencia'];
			$personagem->divindade = $_POST['divindade'];
			$personagem->tamanho = $_POST['tamanho'];
			$personagem->gerar_CA();
			$personagem->gerar_PV();
			$personagem->idade = $_POST['idade'];
			$personagem->altura = $_POST['altura'];
			$personagem->peso = $_POST['peso'];
			$personagem->exibir_BBA();
			$personagem->exibir_ataque_corpo_a_corpo();
			$personagem->exibir_ataque_a_distancia();
			$personagem->gerar_testes_de_resistencia();
			$personagem->inicializar_listas();
			$personagem->gerar_pts_de_pericia();
			$personagem->distribuir_pts_de_pericia();
			$personagem->selecionar_pericas_de_classe();
			$personagem->identificar_hab_chave_da_pericia();
			$personagem->talentos();
			$personagem->acumular_talento();
			$personagem->img();

			require('ficha_session.php');
			
		}
	}
?>
<div align="center"> 
<div class="menu">
	<a href="../index.php"> Home </a>|
    <a href="ficha_montada.php?estado=aleatorio"> Nova Ficha </a>|
    <a href="../ficha/ficha_txt.php"> Download Ficha Txt </a>|
    <a href="../armas/armasPage.php"> Armas </a>|
    <a href="../escudos/escudosPage.php?estado=false"> Escudos </a>|
    <a href="../armaduras/armadurasPage.php?estado=false"> Aventuras </a>|
    <a href="#"> Dados </a>|
    <a href="#"> Monstros </a>|
    <a href="../historias/historiaDoPersonagem.php?estado=true"> Histórias </a>|
</div>
<div class="ficha">
  <div class="cabecalho">
        <table width="901">
          <tr class="fundo">
            <td class="negrito">Nome</td>
            <td id="borda"><?php print $personagem->nome ?></td>
            <td class="negrito">Nome do jogador</td>
            <td>Player</td>
            <td class="negrito">Xp</td>
            <td><?php print $personagem->xp ?></td>
          </tr>
          
          <tr class="fundo">
            <td class="negrito">Cor do Olhos</td>
            <td><?php print $personagem->olhos ?></td>
            <td class="negrito">Cor da pele</td>
            <td><?php print $personagem->pele ?></td>
            <td class="negrito">Cor dos Cabelos</td>
            <td><?php print $personagem->cabelos ?></td>
          </tr>
          
          <tr class="fundo">
            <td class="negrito">Nivel</td>
            <td><?php print $personagem->nivel; ?></td>
            <td class="negrito">Raça</td>
            <td><?php print $personagem->raca ?></td>
            <td class="negrito">Classe</td>
            <td><?php print $personagem->classe ?></td>
            <td class="negrito">Divindade</td>
            <td>universal</td>
            <td class="negrito">Tendencia</td>
            <td><?php print $personagem->tendencia ?></td>
          </tr>
          <tr class="fundo">
            <td class="negrito">Tamanho</td>
            <td>médio</td>
            <td class="negrito">Idade</td>
            <td><?php print $personagem->idade ?></td>
            <td class="negrito">Sexo</td>
            <td><?php print $personagem->sexo ?></td>
            <td class="negrito">Altura</td>
            <td><?php print $personagem->altura ?></td>
            <td class="negrito">Peso</td>
            <td><?php print $personagem->peso ?></td>
          </tr>
        </table>
  </div>    
    <div class="img_personagem">
        	<img src="../img_classes_basicas/<?php print $personagem->img; ?>"  width="200" height="200"/>
	</div
    ><br />
    <div class="habilidades">
<table width="200">
          <tr class="fundo">
            <th scope="row">FOR</th>
            <td><?php print $personagem->for_; ?> </td>
            <td><?php print $personagem->gerar_modificador_forca(); ?></td>
          </tr>
          <tr class="fundo">
            <th scope="row">CON</th>
            <td><?php print $personagem->con_; ?></td>
            <td><?php print $personagem->gerar_modificador_constituicao(); ?></td>
          </tr>
          <tr class="fundo">
            <th scope="row">DES</th>
            <td><?php print $personagem->des_; ?></td>
            <td><?php print $personagem->gerar_modificador_destreza(); ?></td>
          </tr>
          <tr class="fundo">
            <th scope="row">INT</th>
            <td><?php print $personagem->int_; ?></td>
            <td><?php print $personagem->gerar_modificador_inteligencia(); ?></td>
          </tr>
          <tr class="fundo">
            <th scope="row">SAB</th>
            <td><?php print $personagem->sab_; ?></td>
            <td><?php print $personagem->gerar_modificador_sabedoria(); ?></td>
          </tr>
          <tr class="fundo">
            <th scope="row">CAR</th>
            <td><?php print $personagem->car_; ?></td>
            <td><?php print $personagem->gerar_modificador_carisma(); ?></td>
          </tr>
        </table>
	</div>
        
		<div class="hab">
        
             <table width="385" height="136">
                  <tr class="fundo">
                    <th scope="row">PV</th>
                    <td><?php print $personagem->gerar_PV(); ?></td>
                    <th scope="row">Deslocamento</th>
                    <td><?php print $personagem->gerar_deslocamento(); ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">CA</th>
                    <td><?php print $personagem->gerar_CA(); ?> = 10 + <?php print $personagem->gerar_modificador_destreza() ?> + 3 <?php if($personagem->classe == "monge") print $personagem->gerar_modificador_sabedoria(); ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">Inc.</th>
                    <td><?php print $personagem->gerar_modificador_destreza(); ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">BBA</th>
                    <td>
						<?php 
							if(!empty($personagem->bonus_base_ataque[0])){ print '+'.($personagem->bonus_base_ataque[0]);}
							if(!empty($personagem->bonus_base_ataque[1])){ print '/ +'.($personagem->bonus_base_ataque[1]);}
							if(!empty($personagem->bonus_base_ataque[2])){ print '/ +'.($personagem->bonus_base_ataque[2]);}
							if(!empty($personagem->bonus_base_ataque[3])){ print '/ +'.($personagem->bonus_base_ataque[3]);} 
						 ?> 
                    </td>
                  </tr>
          </table>
        </div>
		  <br />
          <br />
       <div class="testes_resistencia">
<table width="400">
            	<tr class="fundo">
                    <th>Testes</th>
                    <td>Total</td>
                    <td>Mod.</td>
                    <td>Base</td>
      </tr>
                  <tr class="fundo">
                    <th scope="row">Fortitude</th>
                    <td><?php print ($personagem->fortitude+$personagem->gerar_modificador_constituicao()); ?></td>
                    <td><?php print $personagem->gerar_modificador_constituicao(); ?></td>
                    <td><?php print "+".$personagem->fortitude; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">Vontade</th>
                    <td><?php print ($personagem->vontade+$personagem->gerar_modificador_sabedoria()); ?></td>
                    <td><?php print $personagem->gerar_modificador_sabedoria(); ?></td>
                    <td><?php print "+".$personagem->vontade; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">Reflexos</th>
                    <td><?php print ($personagem->reflexos+$personagem->gerar_modificador_destreza()); ?></td>
                    <td><?php print $personagem->gerar_modificador_destreza(); ?></td>
                    <td><?php print "+".$personagem->reflexos; ?></td>
                  </tr>
       	 </table>

       </div>
       
       <br />
<div class="pericias">
       		<table width="300">
            <tr class="fundo">
                    <th scope="row">Nome</th>
                    <td>Total</td>
                    <td>Grad</td>
                    <td>Mod.</td>
              </tr>
                  
           			
            <?php 
					$qtd_pericias = count($personagem->pericias_grad);
					for($x = 0; $x<=$qtd_pericias-1; $x++){
						if(!empty($personagem->pericias_grad[$x])){
							
							$total = $personagem->pericias_grad[$x]+$personagem->pericias_mod[$x];
							print "<tr class='fundo'>";
								print "<th scope='row'>".$personagem->pericias_nome[$x]."</th>";
								print "<td>".$total."</td>";
                    			print "<td>".$personagem->pericias_grad[$x]."</td>";
								print "<td>".$personagem->pericias_mod[$x]."</td>";
								print "</tr>";
								
						}																				
														
                    	
					}
			?>
                  
                  
                  
           	</table>

  </div>
        
           <br />
        
       <div class="ataque">
       		
            <table width="398">
            <tr class="fundo">
                    <th width="145" scope="row">Ataque</th>
                    <td width="241">Desarmado</td>
              </tr>
                  
                  <tr class="fundo">
                    <th scope="row">Bônus</th>
                    <td>
						<?php 
							if(!empty($personagem->bonus_base_ataque[0])){ print '+'.($personagem->bonus_base_ataque[0]+$personagem->gerar_modificador_forca());}
							if(!empty($personagem->bonus_base_ataque[1])){ print '/ +'.($personagem->bonus_base_ataque[1]+$personagem->gerar_modificador_forca());}
							if(!empty($personagem->bonus_base_ataque[2])){ print '/ +'.($personagem->bonus_base_ataque[2]+$personagem->gerar_modificador_forca());}
							if(!empty($personagem->bonus_base_ataque[3])){ print '/ +'.($personagem->bonus_base_ataque[3]+$personagem->gerar_modificador_forca());} 
						?>
                    </td>
                  </tr>
                  
                  <tr class="fundo">
                    <th scope="row">Dano</th>
                    <td><?php $zr=0; if($personagem->gerar_modificador_forca() < 0){ print $personagem->dado_dano."+".$zr;}else{print $personagem->dado_dano."".$personagem->gerar_modificador_forca();} ?></td>
                  </tr>
            
            </table>
            
       </div>
    
       
           <br />
<div class="talentos">
       		<table width="397" height="25" class="talento">
            <tr class="fundo">
                    <th width="316" scope="row">Talentos</th>
              </tr>
                   <?php  
				    print "<tr class='fundo'>";
				    print "<td>Talentos adicionais ".$personagem->acumular_talento()."</td>";
				    print "</tr>";
					$qtd_talentos = count($personagem->talentos);
					for($x = 0; $x<=$qtd_talentos-1; $x++){
						if(!empty($personagem->talentos[$x])){
							
							print "<tr class='fundo'>";
								print "<td>".$personagem->talentos[$x]."</td>";
								print "</tr>";
								
						}																				
														
                    	
					}
			?>
           	</table>

  </div>
         
</div>

</div>
</body>
</html>



	