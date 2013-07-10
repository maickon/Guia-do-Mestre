<div class="armas" align="center"> 
   <table align="center" width="631" height="260" id="tableArmas">
		<tr id="linha">
        	<td id="colunaCor">Nome</td>
        	<td id="colunaBorda"><?php if($nome)echo $nome; ?></td>
        </tr>

		 <tr>
        	<td id="colunaCor">Preço</td>
        	<td id="colunaBorda"><?php if($custo)echo $custo; ?></td>
        </tr>
        
	    <tr>
        	<td id="colunaCor">Dano</td>
        	<td id="colunaBorda"><?php if($dano)echo $dano; ?></td>
        </tr>
        
	  	<tr>
        	<td id="colunaCor">Margem de decisivo</td>
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
        	<td id="colunaCor">Descrição da Arma</td>
        	<td id="colunaBorda"><textarea name="introducao" cols="55" rows="10">
								 <?php if($descricao)echo $descricao ; ?> </textarea></td>
        </tr>
        
        </table>
        
</div>