
<div class="armaduras" align="center">
	<table align="center" width="631" height="260" id="tableArmas">
			<tr id="linha">
	        	<td id="colunaCor">Nome</td>
	        	<td id="colunaBorda"><?php if($nome)echo $nome; ?></td>
	        </tr>
	         
		  	<tr>
	        	<td id="colunaCor">Bônus na CA</td>
	        	<td id="colunaBorda"><?php if($bonusNaCa)echo $bonusNaCa; ?></td>
	        </tr>
	        
		    <tr>
	        	<td id="colunaCor">Destreza Máxima</td>
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
	        	<td id="colunaCor">Deslocamento Médio</td>
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
	        	<td id="colunaCor">Preço Base</td>
	        	<td id="colunaBorda"><?php if($custo)echo $custo; ?></td>
	        </tr>
	        
	       
	        <tr>
	        	<td id="colunaCor">Descrição do Escudo</td>
	        	<td id="colunaBorda"><textarea name="introducao" cols="55" rows="10">
				<?php if($descricao)echo $descricao ; ?> </textarea></td>
	        </tr>
	        
</table>
	        
</div>        