<div class="armas" align="center"> 
   <table align="center" width="650" height="260" id="tableArmas">
		<tr id="linha">
        	<td id="colunaCor">Nome</td>
        	<td id="colunaBorda"><?php if($nome)echo $nome; ?></td>
        </tr>
        
	    <tr>
        	<td id="colunaCor">Dano</td>
        	<td id="colunaBorda"><?php if($dano)echo $dano; ?></td>
        </tr>
        
	  	<tr>
        	<td id="colunaCor">Margem de Decisivo</td>
        	<td id="colunaBorda"><?php if($decisivo)echo $decisivo; ?></td>
        </tr>
        
	    <tr>
        	<td id="colunaCor">Alcance</td>
        	<td id="colunaBorda"><?php if($distancia)echo $distancia; ?></td>
        </tr>
        
	  	<tr>
        	<td id="colunaCor">Peso</td>
        	<td id="colunaBorda"><?php if($peso)echo $peso; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Tipo</td>
        	<td id="colunaBorda"><?php if($tipo)echo $tipo; ?></td>
        </tr>
        
	  	<tr>
        	<td id="colunaCor">Categoria</td>
        	<td id="colunaBorda"><?php if($categoria)echo $categoria; ?></td>
        </tr>
        
         <tr>
        	<td id="colunaCor">B�nus M�gico</td>
        	<td id="colunaBorda"><?php if($bonusMagico)echo $bonusMagico; ?></td>
        </tr>
        
         <tr>
        	<td id="colunaCor">Categoria M�gica</td>
        	<td id="colunaBorda"><?php if($categoriaMagica)echo $categoriaMagica; ?></td>
        </tr>
        
         <tr>
        	<td id="colunaCor">Habilidade M�gica 1</td>
        	<td id="colunaBorda"><?php if($habilidade1)echo $habilidade1; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Habilidade M�gica 2</td>
        	<td id="colunaBorda"><?php if($habilidade2)echo $habilidade2; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Habilidade M�gica 3</td>
        	<td id="colunaBorda"><?php if($habilidade3)echo $habilidade3; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Habilidade M�gica 4</td>
        	<td id="colunaBorda"><?php if($habilidade4)echo $habilidade4; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Artefato</td>
        	<td id="colunaBorda"><?php if($artefato)echo $artefato; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Custo da Arma</td>
        	<td id="colunaBorda"><?php if($custoDaArma)echo $custoDaArma; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Pre�o Base</td>
        	<td id="colunaBorda"><?php if($precoBase)echo $precoBase; ?></td>
        </tr>
        
         <tr>
        	<td id="colunaCor">Pre�o Total</td>
        	<td id="colunaBorda"><?php if($preco)echo $preco; ?></td>
        </tr>
        
        <tr>
        	<td id="colunaCor">Descri��o da Arma</td>
        	<td id="colunaBorda"><textarea name="introducao" cols="55" rows="10">
								 <?php if($descricao)echo $descricao ; ?> </textarea></td>
        </tr>
        
        </table>
        
</div>