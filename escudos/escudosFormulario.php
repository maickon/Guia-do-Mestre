
<div class="armaduras" align="center">
	<table align="center" width="631" height="260" id="tableArmas">
			<tr id="linha">
	        	<td id="colunaCor">Nome</td>
	        	<td id="colunaBorda"><?php if($nome)echo $nome; ?></td>
	        </tr>
	         
		  	<tr>
	        	<td id="colunaCor">B�nus na CA</td>
	        	<td id="colunaBorda"><?php if($bonusNaCa)echo $bonusNaCa; ?></td>
	        </tr>
	        
		    <tr>
	        	<td id="colunaCor">Destreza M�xima</td>
	        	<td id="colunaBorda"><?php if($destrezaMaxima)echo $destrezaMaxima; ?></td>
	        </tr>
	        
		  	<tr>
	        	<td id="colunaCor">Penalidade na Pericia</td>
	        	<td id="colunaBorda"><?php if($penalidadeNaPericia)echo $penalidadeNaPericia; ?></td>
	        </tr>
	        
	        <tr>
	        	<td id="colunaCor">Falha Arcana</td>
	        	<td id="colunaBorda"><?php if($falhaDeMagiaArcana)echo $falhaDeMagiaArcana; ?></td>
	        </tr>
	        
		  	<tr>
	        	<td id="colunaCor">Deslocamento M�dio</td>
	        	<td id="colunaBorda"><?php if($deslocamentoMedio)echo $deslocamentoMedio; ?></td>
	        </tr>
	        
	        <tr>
	        	<td id="colunaCor">Deslocamento Pequeno</td>
	        	<td id="colunaBorda"><?php if($deslocamentoPequeno)echo $deslocamentoPequeno; ?></td>
	        </tr>
	        
	        <tr>
	        	<td id="colunaCor">Peso</td>
	        	<td id="colunaBorda"><?php if($peso)echo $peso; ?></td>
	        </tr>
	        
	        <tr>
	        	<td id="colunaCor">Pre�o Base</td>
	        	<td id="colunaBorda"><?php if($custo)echo $custo; ?></td>
	        </tr>
	        
	       
	        <tr>
	        	<td id="colunaCor">Descri��o do Escudo</td>
	        	<td id="colunaBorda"><textarea name="introducao" cols="55" rows="10">
				<?php if($descricao)echo $descricao ; ?> </textarea></td>
	        </tr>
	        
</table>
	        
</div>        