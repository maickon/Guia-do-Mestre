<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href="../css/ficha_montada.css" />
</head>
<body>

<?php
	//require('../personagens_boss/katsuo.php'); 
	$nome = $_GET['nome'];
	require('../personagens_boss/'.$nome.'.php');
	$personagem = $objeto;
?>
<div align="center">
    <div class="menu" align="left">
        <a href="../index.php"> Home </a>|
        <a href="ficha_boss.php"> Boss </a>|
        <a href="#"> Iventário </a>|
        <a href="#"> Técnicas/Magias </a>|
        <a href="#">  História</a>
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
            Tipo
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
            
            </form>
       </div>
    </div>
<div class="ficha" align="center">
    
     <div class="magias">
            <table width="397" height="25">
                <tr class="fundo">
                        <th width="316" scope="row">Magias/Técnias</th>
                  </tr>
                       <?php  
                        print "<tr class='fundo'>";
                    
                        print "</tr>";
                        $qtd_talentos = count($personagem->habilidade_similar_magia);
                        for($x = 0; $x<=$qtd_talentos-1; $x++){
                            if(!empty($personagem->habilidade_similar_magia[$x])){
                                
                                print "<tr class='fundo'>";
                                    print "<td>".$personagem->habilidade_similar_magia[$x]."</td>";
                                    print "</tr>";
                                    
                            }																				
                                                            
                            
                        }
                ?>
                </table>
     </div>
     
         <div align="left">
            <table width="397" height="25">
                <tr class="fundo">
                        <th width="316" scope="row">Iventário</th>
                  </tr>
                       <?php  
                        print "<tr class='fundo'>";
                    
                        print "</tr>";
                        $qtd_talentos = count($personagem->iventario);
                        for($x = 0; $x<=$qtd_talentos-1; $x++){
                            if(!empty($personagem->iventario[$x])){
                                
                                print "<tr class='fundo'>";
                                    print "<td>".$personagem->iventario[$x]."</td>";
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