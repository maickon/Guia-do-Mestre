<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href="../css/ficha_montada.css" />
</head>
<body>

<?php
	require('escolher_boss.php'); 
	$nome = gerar_boss();
	require('../personagens_boss/'.$nome.'.php');
	$personagem = $objeto;
	
?>

<div align="center">
<div class="menu" align="left">
	<a href="../index.php"> Home </a>|
    <a href="ficha_montada.php?estado=aleatorio"> Novo Boss </a>|
    <a href="iventario.php?nome=<?php print $nome; ?>"> Iventário </a>|
    <a href="magias.php">Habilidades especiais </a>|
    <a href="magias.php">Magias </a>|
    <a href="../ficha/ficha_txt.php">  História</a>
   <div align="right">
        <input name="enviar" type="submit" value="Buscar" />
        Buscar ND
        <select name="nivel">
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            
        </select>
<!--        Tipo
        <select name="tipo">
            <option>Aberração</option>
            <option>Animal</option>
            <option>Besta Mágica</option>
            <option>Constructo</option>
            <option>Dragão</option>
            <option>Elemental</option>
            <option>Extra-planar</option>
            <option>Fada</option>
            <option>Gigante</option>
            <option>Humanóide</option>
            <option>Humanóide Monstruoso</option>
            <option>Inseto</option>
            <option>Limo</option>
            <option>Morto-vivo</option>
            <option>Planta</option>
        </select>
-->        
        </form>
   </div>
</div>
<div class="ficha">
  <div class="cabecalho" align="left">
        <table width="901">
          <tr class="fundo">
            <td class="negrito">Nome</td>
            <td id="borda"><?php print $personagem->nome ?></td>
            <td class="negrito">Nome do jogador</td>
            <td>Player</td>
            <td class="negrito">Xp</td>
            <td><?php print $personagem->xp ?></td>
            <td class="negrito">Tipo</td>
            <td><?php print $personagem->tipo ?></td>
            <td class="negrito">Posto divino</td>
            <td><?php print $personagem->posto_divino ?></td>
          </tr>
          
          <tr class="fundo">
            <td class="negrito">Cor do Olhos</td>
            <td><?php print $personagem->olhos ?></td>
            <td class="negrito">Cor da pele</td>
            <td><?php print $personagem->pele ?></td>
            <td class="negrito">Cor dos Cabelos</td>
            <td><?php print $personagem->cabelos ?></td>
            <td class="negrito">Subtipo</td>
            <td><?php print $personagem->subtipo ?></td>
            <td class="negrito">Xp fornecido</td>
            <td><?php print $personagem->xp ?></td>
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
    
    <div class="hab">
        
             <table width="595" height="144">
                  <tr class="fundo">
                    <th width="100" scope="row">PV</th>
                    <td width="174"><?php print $personagem->PV; ?></td>
                    <th width="164" scope="row">Deslocamento</th>
                    <td width="137"><?php print $personagem->deslocamento; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">CA</th>
                    <td><?php print $personagem->CA ?></td>
                    <th scope="row">Resistência a magia</th>
                    <td><?php print $personagem->RM ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">Inc.</th>
                    <td><?php print $personagem->iniciativa; ?></td>
                    <th scope="row">Redução de dano</th>
                    <td><?php print $personagem->RD ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">BBA</th>
                    <td><?php print $personagem->BBA[0];?> </td>
                    <th scope="row">KI (energia)</th>
                    <td><?php print $personagem->KI;?> </td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">BBA Rajando</th>
                    <td>
						<?php print $personagem->BBA[1];?> 
                    </td>
                  </tr>
</table>
        </div>
    
    <div class="habilidades">
        <table width="200">
                  <tr class="fundo">
                    <th scope="row">FOR</th>
                    <td><?php print $personagem->for_; ?> </td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">CON</th>
                    <td><?php print $personagem->con_; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">DES</th>
                    <td><?php print $personagem->des_; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">INT</th>
                    <td><?php print $personagem->int_; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">SAB</th>
                    <td><?php print $personagem->sab_; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">CAR</th>
                    <td><?php print $personagem->car_; ?></td>
                  </tr>
      </table>
	</div>

       <div class="testes_resistencia">
			<table width="400">
            	<tr class="fundo">
                    <th>Testes</th>
                    <td>Total</td>
                    <td>Mod.</td>
                    <td>Base</td>
                    <td>Mág.</td>
      			</tr>
                  <tr class="fundo">
                    <th scope="row">Fortitude</th>
                    <td><?php print $personagem->fortitude ?></td>
                    <td><?php print $personagem->con_mod; ?></td>
                    <td><?php print "+".$personagem->teste_base_classe_1[0]; ?></td>
                    <td><?php print "+".$personagem->teste_base_magico; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">Vontade</th>
                    <td><?php print $personagem->vontade; ?></td>
                    <td><?php print $personagem->sab_mod; ?></td>
                    <td><?php print "+".$personagem->teste_base_classe_1[1]; ?></td>
                    <td><?php print "+".$personagem->teste_base_magico; ?></td>
                  </tr>
                  <tr class="fundo">
                    <th scope="row">Reflexos</th>
                    <td><?php print $personagem->reflexos; ?></td>
                    <td><?php print $personagem->des_mod; ?></td>
                    <td><?php print "+".$personagem->teste_base_classe_1[2]; ?></td>
                    <td><?php print "+".$personagem->teste_base_magico; ?></td>
                  </tr>
       	 </table>

       </div>

	<div class="pericias">
       		<table width="300">
            <tr class="fundo">
                    <th scope="row">Nome | Total | Grad | Mod.</th>
              </tr>
                  
           			
            <?php 
					$qtd_pericias = count($personagem->pericias_nome);
					for($x = 0; $x<=$qtd_pericias-1; $x++){
						if(!empty($personagem->pericias_nome[$x])){
							
							print "<tr class='fundo'>";
								print "<th scope='row'>".$personagem->pericias_nome[$x]."</th>";
								print "</tr>";
								
						}																				
														
                    	
					}
			?>
                  
                  
                  
           	</table>

  </div>

       <div class="ataque">
       		
            <table width="398">
            <tr class="fundo">
                    <th width="145" scope="row">Corpo a corpo</th>
                    <td width="241">
                    	<?php print $personagem->armas;	?>
                    </td>
              </tr>
                  
                  <tr class="fundo">
                    <th scope="row">Bônus</th>
                    <td>
						<?php print $personagem->ataque_total; ?>
                    </td>
                  </tr>
                  
                  <tr class="fundo">
                    <th scope="row">Dano</th>
                    <td><?php print $personagem->dado_dano; ?></td>
                  </tr>
            
            </table>
            
       </div>


		<div class="ataque">
       		
            <table width="398">
            <tr class="fundo">
                    <th width="145" scope="row">Ataque a distância</th>
                    <td width="241"><?php print $personagem->ataque_distancia; ?></td>
              </tr>
            </table>
            
       </div>
    
           <br />
           <br />
           <br />
           <br />
           <br />
<div class="talentos">
       		<table width="397" height="25" class="talento">
            <tr class="fundo">
                    <th width="316" scope="row">Talentos</th>
              </tr>
                   <?php  
				    print "<tr class='fundo'>";
				
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