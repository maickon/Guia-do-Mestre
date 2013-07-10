<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href= "../css/index.css" />
<link rel="stylesheet" type="text/css" href="../css/armas.css" />
</head>

<body>

<div class="container">
  <div class="header">
  	 <?php require_once '../cabecalho.php';?>
    <!-- fim do cabeçalho -->
  </div>
  
  <div class="sidebar1" >
  
    <?php require_once '../menu.php';?>
    
   	<?php require_once '../menuLateral.php'; ?>
   	
   	<!-- fim dos menus laterais -->
  </div>
      <p><h1>Gerador de armas aleatórias</h1></p>
      <p class="margem">Através do link indicado, você encontrará uma arma com características conforme descrita no
      livro do jogador. As armas podem ser: Simples,comuns e exóticas ou qualquer uma das anteriores,porém 
      com propiedades mágicas.</p>
 	  <p class="margem">As opções referem-se a que categoria você deseja gerar as armas, caso deseje somente armas simples,
      clique no link de armas simples, caso deseje armas exóticas, clique no link de armas exóticas ou se desejar,
      você poderá gerar qualquer categoria de armas com habilidades mágicas	.</p>
	<br />
	
	<img src="../img/espada1.jpg" alt="Espada mágica +5" height="200" title="Espada mágica +5" width="700" style="padding-left: 70px;" />
	
		 <p align="center">Selecione uma categoria...</p>
    
        <div align="center">
            <label class="option"> <a href="../armas/armasComuns.php?comun=true#Comun"> Comun   </a> </label>
            <label class="option"> <a href="../armas/armasExoticas.php?exotica=true"> Exótica </a> </label>
            <label class="option"> <a href="../armas/armasSimples.php?simples=true"> Simples </a> </label>
            <label class="option"> <a href="../armas/armasMagicas.php?magica=true"> Mágica  </a> </label>
        </div>
	<br />
	

   
    
    <br />
      
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>

