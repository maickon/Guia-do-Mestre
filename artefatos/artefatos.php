<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href= "../css/index.css" />
<link rel="stylesheet" type="text/css" href="../css/historias.css" />
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
      <p><h1>Artefatos Únicos</h1></p>
      <p class="margem">Muito bem pesoal, aqui vocês vão encontrar um infinidade de artefatos poderoso e únicos onde a posse de um deles tornará o seu personagem
      tão poderoso que ele poderá se corromper e desjar dominar o mundo.</p>
 	  <p class="margem">Os artefatos estão misturados, ou seja você poderá encontrar uma espada ou anel, colar brinco, pedrapreciosa, enfim qualquer tipo de objeto
      que possui uma hostória única e poderes únicos.</p>
 	  <p class="margem">Então vamos la... gere um artefato poderoso e crie uma história em cima dele ou melhor coloque um desses artefatos em uma masmorra perdida que seu grupo acaba de descobrir.</p>
	<br />

	<?php
			require_once '../classes/artefatos.php';
			$artefato = new Artefatos();
			$artefato->gerar_artefato();
	?>

	<br />
   		<div class="artefatos">
			<?php 
				echo "<h3>".$artefato->nome."</h3>"; 
				echo "ID #".$artefato->id."<br /><br />";  
				echo "História ".$artefato->descricao_historia."<br /><br />";
				echo "<strong>Oque é?</strong> ".$artefato->descriacao_regra."<br /><br />";  	
			?>
		</div>
        <br />
        <div align="center">
        	<label class="option"><a href="artefatos.php">Novo Artefato</a></label>
            <label class="option"><a href="../index.php">Home</a></label>
        </div>
    <br />
      
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>
