<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href= "../css/teste.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teste</title>
</head>
<body>

<?php
include_once('personagem.class.php');
$personagem = new Personagem();
print "<h1>Testes do Projeto Guia do mestre</h1><br /><hr />";
print "<h1>Métodos da classe Personagem</h1>";
print "<p>Apresentamos o nome do método, o seu resultado e o que esperamos que ele retorne.</p>";

$personagem->gerar_nivel();
print "<h3>Testando o método gerar_nivel() | NIVEL: ".$personagem->nivel." | </h3>";
print "Espera-se um numero entre 1 e 20";
print "<hr />";

print "<h3>Testando o método gerar_sexo() | ".$personagem->gerar_sexo()." |</h3>";
print "Só pode ser Masculino ou Feminino";
print "<hr />";

print "<h3>Testando a método gerar_nome() | ".$personagem->gerar_nome()." |</h3>";
print "Tem que retornar um nome que seje referente ao sexo acima.";
print "<hr />";

print "<h3>Testando a método gerar_classe() | ".$personagem->gerar_classe()." |</h3>";
print "Espera-se um nome que referencie uma classe baseado no sexo do personagem. Ex: mago,maga,paladino,paladina...";
print "<hr />";

$personagem->gerar_habilidades_pts();
print "<h3>Testando o método gerar_habilidades_pts() ANTES | FOR ".$personagem->for_." | CON ".$personagem->con_." | DES ".$personagem->des_."
													 | INT ".$personagem->int_." | SAB ".$personagem->sab_." | CAR ".$personagem->car_." | 
													  </h3>";
print "Espera-se numeros entre 3 a 18 para cada habilidade. Este método simula a rolagem de 4d6 descartando a rolagem mais baixa.";
													  
print $personagem->distribuir_pts_de_habilidade();
print "<h3>Testando o método gerar_habilidades_pts() DEPOIS| FOR ".$personagem->for_." | CON ".$personagem->con_." | DES ".$personagem->des_."
													 | INT ".$personagem->int_." | SAB ".$personagem->sab_." | CAR ".$personagem->car_." | 
													  </h3>";
print "Espera-se numeros entre 3 a 23 para cada habilidade. Este método simula a rolagem de 4d6 descartando a rolagem mais baixa somando com 1 ponto adicional
para cada quatro niveis de personagem."; 
print "<hr />";

print "<h3>Testando o método gerar_pts_de_habilidade_add() | Pts: ".$personagem->gerar_pts_de_habilidade_add()." | </h3>";
print "Espera-se um numero entre 0 e 5";
print "<hr />";

print "<h3>Testeando os métodos: gerar_modificador_forca()        | Força Mod: ".$personagem->gerar_modificador_forca()." |</h3>";
print "<h3>Testeando os métodos: gerar_modificador_constituição() | Constituição Mod: ".$personagem->gerar_modificador_constituicao()." |</h3>";
print "<h3>Testeando os métodos: gerar_modificador_destreza()     | Destreza Mod: ".$personagem->gerar_modificador_destreza()." |</h3>";
print "<h3>Testeando os métodos: gerar_modificador_inteligência() | Inteligência Mod: ".$personagem->gerar_modificador_inteligencia()." |</h3>";
print "<h3>Testeando os métodos: gerar_modificador_sabedoria()    | Sabedoria Mod: ".$personagem->gerar_modificador_sabedoria()." |</h3>";
print "<h3>Testeando os métodos: gerar_modificador_carisma() 	  | Carisma Mod: ".$personagem->gerar_modificador_carisma()." |</h3>";
print "Espera-se um numero entre -5 e 5";
print "<hr />";

print "<h3>Testando a método gerar_cor_do_cabelo() | ".$personagem->gerar_cor_do_cabelo()." |</h3>";
print "Espera-se um nome que referencie uma cor para o cabelo.";
print "<hr />";

print "<h3>Testando a método gerar_cor_dos_olhos() | ".$personagem->gerar_cor_dos_olhos()." |</h3>";
print "Espera-se um nome que referencie uma cor para os olhos.";
print "<hr />";

print "<h3>Testando a método gerar_cor_da_pele() | ".$personagem->gerar_cor_da_pele()." |</h3>";
print "Espera-se um nome que referencie uma cor para a pele.";
print "<hr />";

print "<h3>Testando a método gerar_raca() | ".$personagem->gerar_raca()." |</h3>";
print "Espera-se um nome de uma raça (humano,elfo,elfa,etc..) que referencie com o sexo do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_deslocamento() | ".$personagem->gerar_deslocamento()." |</h3>";
print "Espera-se um numero entre 6m a 9m.";
print "<hr />";

print "<h3>Testando a método gerar_xp() | ".$personagem->gerar_xp()." |</h3>";
print "Espera-se um valor entre 1.000 e 210.000.";
print "<hr />";

print "<h3>Testando a método gerar_tendencia() | ".$personagem->gerar_tendencia()." |</h3>";
print "Espera-se um nome que referencie uma tendencia que esteja de acordo com a classe do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_CA() | ".$personagem->gerar_CA()." |</h3>";
print "Espera-se um numero que seje a soma de 13 + o modificador de destreza, caso a classe seja monge, deve-se incluir o modificador de sabedoria caso positivo
e o bônus concedido pela classe monge.";
print "<hr />";

print "<h3>Testando a método gerar_PV() | ".$personagem->gerar_PV()." |</h3>";
print "Classe ".$personagem->classe."<br />";
print "DV ".$personagem->dv."<br />";
print "Nivel ".$personagem->nivel."<br />";
print "Modificador Constituição ".$personagem->gerar_modificador_constituicao()."<br />";
print "Espera-se um numero que represente a rolagem de dados simulada de acordo com a quantidade de dados de vida baseado na classe do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_altura() | ".$personagem->gerar_altura()." |</h3>";
print "Espera-se um numero que represente a altura conforme a raça do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_peso() | ".$personagem->gerar_peso()." |</h3>";
print "Espera-se um numero que represente o peso conforme a raça do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_idade() | ".$personagem->gerar_idade()." |</h3>";
print "Espera-se um numero que represente o tempo de vida de um personagem conforme a sua raça.";
print "<hr />";

//$personagem->formatar_BBA();
print "<h3>Testando a método formatar_BBA() BOM | ".$personagem->bonus_base_ataque[0]." / ".$personagem->bonus_base_ataque[1]." /
											 	     ".$personagem->bonus_base_ataque[2]." / ".$personagem->bonus_base_ataque[3]." |</h3>";
											 
//$personagem->formatar_BBA_medio();
//$personagem->formatar_BBA();											  
print "<h3>Testando a método formatar_BBA() MÉDIO | ".$personagem->bonus_base_ataque[0]." / ".$personagem->bonus_base_ataque[1]." /
											  	     ".$personagem->bonus_base_ataque[2]." / ".$personagem->bonus_base_ataque[3]." |</h3>";

//$personagem->formatar_BBA_ruin();
//$personagem->formatar_BBA();
print "<h3>Testando a método formatar_BBA() RUIN | ".$personagem->bonus_base_ataque[0]." / ".$personagem->bonus_base_ataque[1]." /
	    											 ".$personagem->bonus_base_ataque[2]." / ".$personagem->bonus_base_ataque[3]." |</h3>";

print "Espera-se um que seja retornado um bonus base de ataque referente ao nivel do personagem conforme as regras do jogo.";
print "<hr />";

$personagem->exibir_BBA();
print "<h3>Testando a método exibir_BBA() | ".$personagem->bonus_base_ataque[0]." / ".$personagem->bonus_base_ataque[1]." /
	    							 		".$personagem->bonus_base_ataque[2]." / ".$personagem->bonus_base_ataque[3]." |</h3>";
print "Espera-se que retorne-se um BBA que seje pertencente ao personagem da classe escolida.";
print "<hr />";

print "<h3>Testando a método exibir ataque_corpo_a_corpo() | ".$personagem->exibir_ataque_corpo_a_corpo()." |</h3>";
print "Espera-se um numero que represente o BBA considerando o nivel do personagem.";
print "<hr />";

print "<h3>Testando a método exibir ataque_a_distancia() | ".$personagem->exibir_ataque_a_distancia()." |</h3>";
print "Espera-se um numero que represente o BBA considerando o nivel do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_teste_de_resistencia_bom() | ".$personagem->gerar_teste_de_resistencia_bom()." |</h3>";
print "Espera-se um numero que represente os Testes de Resistencia considerando o nivel do personagem.";
print "<hr />";

print "<h3>Testando a método gerar_teste_de_resistencia_ruin() | ".$personagem->gerar_teste_de_resistencia_ruin()." |</h3>";
print "Espera-se um numero que represente os Testes de Resistencia considerando o nivel do personagem.";
print "<hr />";

$personagem->gerar_testes_de_resistencia();
print "<h3>Testando a método gerar_testes_de_resistencia() |FORT ".$personagem->fortitude."| VONT ".$personagem->vontade."| REFL ".$personagem->reflexos."|</h3>";
print "Inicializa os testes de resistencia.";
print "<hr />";

print "<h3>Testando a método gerar_fortitude_total() | ".$personagem->gerar_fortitude_total()." |</h3>";
print "Contituiçao modificador ".$personagem->gerar_modificador_constituicao()."<br />";
print "Espera-se um numero que represente a sua fortutide considerando o nivel do personagem e sua constituição.";
print "<hr />";

print "<h3>Testando a método gerar_vontade_total() | ".$personagem->gerar_vontade_total()." |</h3>";
print "Contituiçao modificador ".$personagem->gerar_modificador_sabedoria()."<br />";
print "Espera-se um numero que represente a sua vontade considerando o nivel do personagem e sua sabedoria.";
print "<hr />";

print "<h3>Testando a método gerar_reflexos_total() | ".$personagem->gerar_reflexo_total()." |</h3>";
print "Contituiçao modificador ".$personagem->gerar_modificador_destreza()."<br />";
print "Espera-se um numero que represente o seu reflexo considerando o nivel do personagem e sua destreza.";
print "<hr />";

print "<h3>Testando a método gerar_pts_de_pericia() | ".$personagem->gerar_pts_de_pericia()." |</h3>";
print "Classe ".$personagem->classe."<br />";
print "Nivel ".$personagem->nivel."<br />";
print "Espera-se um numero que represente a quantidade total dos pontos de pericia decorrente a cada nivel do personagem.";
print "<hr />";

print "<h3>Testando a método distribuir_pts_de_pericia() | ".$personagem->distribuir_pts_de_pericia()." |</h3>";
print "Classe ".$personagem->classe."<br />";
print "Nivel ".$personagem->nivel."<br />";
print "Inteligência modificador ".$personagem->gerar_modificador_inteligencia()."<br />";
$grad_max = $personagem->nivel+3;
print "Graduação máxima ".$grad_max."<br />";
$qtdPericias = count($personagem->pericias_valor);
print "Quantidade de pericias ".$qtdPericias."<br />";
print "Espera-se uma lista com numeros que representam cada pericia que o personagem possa ter conforme o seu nivel.";
print "<hr />";



print "<h3>Testando a método selecionar_pericas_de_classe() | ".$personagem->selecionar_pericas_de_classe()." |</h3>";
print "Classe ".$personagem->classe."<br />";
print "Nivel ".$personagem->nivel."<br />";
print "Pericias <br />". var_dump($personagem->pericias);
print "Nome das pericias <br />". var_dump($personagem->pericias_nome);
print "Espera-se um numero que represente a quantidade total dos pontos de pericia decorrente a cada nivel do personagem.";
print "<hr />";

print "<h3>Testando a método talentos() | ".$personagem->talentos()." |</h3>";
print "Classe ".$personagem->classe."<br />";
print "Nivel ".$personagem->nivel."<br />";
print "Pericias <br />". var_dump($personagem->talentos);
print "Espera-se um numero que represente a quantidade total dos talentos do personagem.";
print "<hr />";
?>


</body>
</html>