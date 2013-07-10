
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
      <p><h1>Gerador de Armas Simples Aleatórias</h1></p>
      <p class="margem">Apenas pressionando o botão "Gerar" você encontrará uma arma como características conforme descrita no
      livro do jogador. As armas podem ser: Simples,comuns e exóticas (tanto mágica ou não).</p>
 	  <p class="margem">As opções acima referem-se a que categoria você deseja gerar as armas, caso deseje somente armas simples,
      marque apenas armas simples, caso deseje armas mágicas, marque-a ou se desejar mais de uma categoria, merque todas
      	que desejar. Após marcado as opções desejadas pressione o botão e gere a sua arma.</p>
	<br />

	<?php 
		require_once '../classes/armas.php';
			require_once '../classes/armasSimples.php';
			
			if(($_GET['simples'] == true)){
			
				 $simples = new ArmasSiples('', 0, 0, '', '', '', '', '', '', 'Armas Simples');
				 $simples->gerarTipoDeArma();
				 $simples->gerarNomeDaArma();
				 $simples->gerarArmaSimples();
				 
				 $nome = $simples->nome;
				 $custo = $simples->custo;
				 $preco = $simples->preco;
				 $dano = $simples->dano;
				 $decisivo = $simples->decisivo;
				 $distancia = $simples->distancia;
				 $peso = $simples->peso;
				 $tipo = $simples->tipo;
				 $categoria = $simples->categoria;
				 $descricao = $simples->descricao;				 
				 
				 require_once '../armas/armasFormulario.php';
			}else{
				echo '<h1>Error !</h1>';
			}
?>
			
	<br />
    <?php require_once '../armas/armasMenu.php';?>
    <br />
      
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>



	