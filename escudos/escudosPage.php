<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; ecoding=utf-8" />
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
  <p><h1>Gerador de escudos aleatórios</h1></p>
  <p class="margem">Apenas pressionando o link desejado, você encontrará um escudo com características conforme descrita no
  livro do jogador. Os escudos podem ser: Simples,comuns e exóticas (tanto mágica ou não).</p>
	
	<?php 
	
		require_once '../classes/escudos.php';
		require_once '../classes/escudosMagico.php';
		
		if($_GET['estado'] == 'comun'){
			 $comun = new Escudos('', 0, '', '', '', '', '', '', '', '', 'Escudos');
			 
			 $comun->gerarNomeDoEscudo();
			 $comun->gerarEscudo();
			 
			 $nome = $comun->nome; 
			 $custo = $comun->custo;
			 $bonusNaCa = $comun->bonusNaCa;
			 $destrezaMaxima = $comun->destrezaMaxima;
			 $penalidadeNaPericia = $comun->penalidadeNaPericia;
			 $falhaDeMagiaArcana = $comun->falhaDeMagiaArcana;
			 $deslocamentoMedio = $comun->deslocamentoMedio;
			 $deslocamentoPequeno = $comun->deslocamentoPequeno;
			 $peso = $comun->peso;
			 $descricao = $comun->descricao;
			 $categoria = $comun->categoria;
			 
			 require_once '../escudos/escudosFormulario.php';
			}else if($_GET['estado'] == 'magica'){
				 $magica = new EscudosMagicos('', 0, '', '', '', '', '', '', '', '', 'Escudos Mágico',
				 							  '', 0);
			 
				 $magica->gerarNomeDoEscudo();
				 $magica->gerarHabilidadeMagica();
				 $magica->gerarEscudo();
				 $magica->gerarPrecoTotal();
				 
				 $nome = $magica->nome; 
				 $bonusNaCa = $magica->bonusNaCa;
				 $destrezaMaxima = $magica->destrezaMaxima;
				 $penalidadeNaPericia = $magica->penalidadeNaPericia;
				 $falhaDeMagiaArcana = $magica->falhaDeMagiaArcana;
				 $deslocamentoMedio = $magica->deslocamentoMedio;
				 $deslocamentoPequeno = $magica->deslocamentoPequeno;
				 $peso = $magica->peso;
				 $habilidade = $magica->habilidade;
				 $custo = $magica->custo;
				 $custoMagico = $magica->precoBase;
				 $precoTotal =  $magica->gerarPrecoTotal();
				 $descricao = $magica->descricao;
				 
				 require_once '../escudos/escudosMagicoFormulario.php';
			}elseif($_GET['estado'] == 'false'){
	?>		
		<p align="center">
			<img src="../img/escudo1.png" alt="Escudo da Fênix Prateada +5" title="Escudo da Fênix Prateada +5" width="400" height="300"/>
		</p>
	<?php 		}
	?>
	
	<br />
	<?php require_once '../escudos/escudosMenu.php';?>
    <br />
    
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>

