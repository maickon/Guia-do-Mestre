<div class="armas" align="center"> 
   <table align="center" width="631" height="260" id="tableArmas">
		<tr id="linha">
        	<td id="colunaCor">Cdigo</td>
        	<td id="colunaBorda"><?php if($codigo)echo '#'.$codigo; ?></td>
        </tr>

		 <tr>
        	<td id="colunaCor">Titulo</td>
        	<td id="colunaBorda"><?php if($titulo)echo $titulo; ?></td>
        </tr>
        
        <tr>	
        	<td id="colunaCor">Descrição</td>
        	<td id="colunaBorda"><textarea name="introducao" cols="63" rows="10">
								 <?php if($descricao)echo $descricao ; ?> 
								 </textarea></td>
        </tr>
        
        </table>
        
</div>