<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	session_start();

	$ficha = fopen("ficha.txt", "w+");
	fwrite($ficha, 
	"\t ####################################################################################################################################
	 \r#################################################FICHA DESENVOLVIDA PELO GUIA DO MESTRE#############################################
	 \r####################################################################################################################################
	 \r##########################################################CRIADOR MAICKON RANGEL####################################################
	 \r####################################################################################################################################																											 
					
	
	 \rNOME ".$_SESSION['nome']."\t JOGADOR ".$_SESSION['nome_jogador']."\t XP ".$_SESSION['xp']."
	 \rOLHOS ".$_SESSION['olhos']." \tCOR DA PELE ".$_SESSION['pele']." \t CABELOS ".$_SESSION['cabelos']."
	 \rNIVEL ".$_SESSION['nivel']." \tRAÇA ".$_SESSION['raca']." \tCLASSE ".$_SESSION['classe']."\tDIVINDADE ".$_SESSION['divindade']."\tTENDENCIA ".$_SESSION['tendencia']."
	 \rTAMANHO ".$_SESSION['tamanho']." \tIDADE ".$_SESSION['idade']." \tSEXO ".$_SESSION['sexo']." \tALTURA ".$_SESSION['altura']." \tPESO ".$_SESSION['peso']."
	 \n\n
	 \rFOR ".$_SESSION['for'].$_SESSION['for_mod']."\t\tPV ".$_SESSION['PV']."\t\tDESLOCAMENTO ".$_SESSION['deslocamento']."
	 \rCON ".$_SESSION['con'].$_SESSION['con_mod']."\t\tCA ".$_SESSION['CA']." = 10 + ".$_SESSION['des_mod']." + 3 + ".$_SESSION['mon_sab']."		
	 \rDES ".$_SESSION['des'].$_SESSION['des_mod']."\t\tIniciativa ".$_SESSION['des_mod']."
	 \rINT ".$_SESSION['int'].$_SESSION['int_mod']."\t\tBBA ".$_SESSION['sinal_1'].$_SESSION['bonus_base_de_ataque1']
	 														 .$_SESSION['sinal_2'].$_SESSION['bonus_base_de_ataque2']
															 .$_SESSION['sinal_3'].$_SESSION['bonus_base_de_ataque3']
															 .$_SESSION['sinal_4'].$_SESSION['bonus_base_de_ataque4']."
	 \rSAB ".$_SESSION['sab'].$_SESSION['sab_mod']."
	 \rCAR ".$_SESSION['car'].$_SESSION['car_mod']."
		
	 \rTESTES	   \tTOTAL\tMOD.\tBASE\t\t\t\tPERICIAS \t\tTOTAL MOD GRAD
	 \rFORTITUDE\t".($_SESSION['base_fort']+$_SESSION['con_mod'])."  = \t".$_SESSION['con_mod']."\t".$_SESSION['base_fort']."\t\t\t\t".$_SESSION['pericias_nome'][0]." ".($_SESSION['pericias_mod'][0] + $_SESSION['pericias_grad'][0])." = ".$_SESSION['pericias_grad'][0]." ".$_SESSION['pericias_mod'][0]."
	 \rVONTADE  \t".($_SESSION['base_vont']+$_SESSION['sab_mod'])."  = \t".$_SESSION['sab_mod']."\t".$_SESSION['base_vont']."\t\t\t\t".$_SESSION['pericias_nome'][1]." ".($_SESSION['pericias_mod'][1] + $_SESSION['pericias_grad'][1])." = ".$_SESSION['pericias_grad'][1]." ".$_SESSION['pericias_mod'][1]."
	 \rREFEXOS  \t".($_SESSION['base_refl']+$_SESSION['des_mod'])."  = \t".$_SESSION['des_mod']."\t".$_SESSION['base_refl']."\t\t\t\t".$_SESSION['pericias_nome'][2]." ".($_SESSION['pericias_mod'][2] + $_SESSION['pericias_grad'][2])." = ".$_SESSION['pericias_grad'][2]." ".$_SESSION['pericias_mod'][2]."
	 																					 \r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][3]."".($_SESSION['pericias_mod'][3] + $_SESSION['pericias_grad'][3])." = ".$_SESSION['pericias_grad'][3]." ".$_SESSION['pericias_mod'][3]."
	 \rATAQUE "."".$_SESSION['ataque_desarmado']."	\t\t\t\t\t".$_SESSION['pericias_nome'][4]."".($_SESSION['pericias_mod'][4] + $_SESSION['pericias_grad'][4])." = ".$_SESSION['pericias_grad'][4]." ".$_SESSION['pericias_mod'][4]."
	 \rBONUS "."\t".$_SESSION['ataque_corpo_a_corpo']."	\t\t\t\t\t\t".$_SESSION['pericias_nome'][5]."".($_SESSION['pericias_mod'][5] + $_SESSION['pericias_grad'][5])." = ".$_SESSION['pericias_grad'][5]." ".$_SESSION['pericias_mod'][5]."
	 \rDANO "."\t".$_SESSION['dano']."					\t\t".$_SESSION['pericias_nome'][6]."".($_SESSION['pericias_mod'][6] + $_SESSION['pericias_grad'][6])." = ".$_SESSION['pericias_grad'][6]." ".$_SESSION['pericias_mod'][6]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][7]."".($_SESSION['pericias_mod'][7] + $_SESSION['pericias_grad'][7])." = ".$_SESSION['pericias_grad'][7]." ".$_SESSION['pericias_mod'][7]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][8]."".($_SESSION['pericias_mod'][8] + $_SESSION['pericias_grad'][8])." = ".$_SESSION['pericias_grad'][8]." ".$_SESSION['pericias_mod'][8]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][9]."".($_SESSION['pericias_mod'][9] + $_SESSION['pericias_grad'][9])." = ".$_SESSION['pericias_grad'][9]." ".$_SESSION['pericias_mod'][9]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][10]."".($_SESSION['pericias_mod'][10] + $_SESSION['pericias_grad'][10])." = ".$_SESSION['pericias_grad'][10]." ".$_SESSION['pericias_mod'][10]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][11]."".($_SESSION['pericias_mod'][11] + $_SESSION['pericias_grad'][11])." = ".$_SESSION['pericias_grad'][11]." ".$_SESSION['pericias_mod'][11]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][12]."".($_SESSION['pericias_mod'][12] + $_SESSION['pericias_grad'][12])." = ".$_SESSION['pericias_grad'][12]." ".$_SESSION['pericias_mod'][12]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][13]."".($_SESSION['pericias_mod'][13] + $_SESSION['pericias_grad'][13])." = ".$_SESSION['pericias_grad'][13]." ".$_SESSION['pericias_mod'][13]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][14]."".($_SESSION['pericias_mod'][14] + $_SESSION['pericias_grad'][14])." = ".$_SESSION['pericias_grad'][14]." ".$_SESSION['pericias_mod'][14]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][15]."".($_SESSION['pericias_mod'][15] + $_SESSION['pericias_grad'][15])." = ".$_SESSION['pericias_grad'][15]." ".$_SESSION['pericias_mod'][15]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][16]."".($_SESSION['pericias_mod'][16] + $_SESSION['pericias_grad'][16])." = ".$_SESSION['pericias_grad'][16]." ".$_SESSION['pericias_mod'][16]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][17]."".($_SESSION['pericias_mod'][17] + $_SESSION['pericias_grad'][17])." = ".$_SESSION['pericias_grad'][17]." ".$_SESSION['pericias_mod'][17]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][18]."".($_SESSION['pericias_mod'][18] + $_SESSION['pericias_grad'][18])." = ".$_SESSION['pericias_grad'][18]." ".$_SESSION['pericias_mod'][18]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][19]."".($_SESSION['pericias_mod'][19] + $_SESSION['pericias_grad'][19])." = ".$_SESSION['pericias_grad'][19]." ".$_SESSION['pericias_mod'][19]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][20]."".($_SESSION['pericias_mod'][20] + $_SESSION['pericias_grad'][20])." = ".$_SESSION['pericias_grad'][20]." ".$_SESSION['pericias_mod'][20]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][21]."".($_SESSION['pericias_mod'][21] + $_SESSION['pericias_grad'][21])." = ".$_SESSION['pericias_grad'][21]." ".$_SESSION['pericias_mod'][21]."
																						\r\t\t\t\t\t\t\t\t".$_SESSION['pericias_nome'][22]."".($_SESSION['pericias_mod'][22] + $_SESSION['pericias_grad'][22])." = ".$_SESSION['pericias_grad'][22]." ".$_SESSION['pericias_mod'][22]."
	 \rTALENTOS
	 \rTalentos Add-".$_SESSION['talentos_add']."
	 \r1-".$_SESSION['talentos'][0]."
	 \r2-".$_SESSION['talentos'][1]."
	 \r3-".$_SESSION['talentos'][2]."
	 \r4-".$_SESSION['talentos'][3]."
	 \r5-".$_SESSION['talentos'][4]."
	 \r6-".$_SESSION['talentos'][5]."
	 \r7-".$_SESSION['talentos'][6]."
	 \r8-".$_SESSION['talentos'][7]."
	 \r9-".$_SESSION['talentos'][8]."
	 \r10-".$_SESSION['talentos'][9]."
	 \r11-".$_SESSION['talentos'][10]."
	 \r12-".$_SESSION['talentos'][11]."
	 \r13-".$_SESSION['talentos'][12]."
	 \r14-".$_SESSION['talentos'][13]."
	 \r15-".$_SESSION['talentos'][14]."
	 \r16-".$_SESSION['talentos'][15]."
	 \r17-".$_SESSION['talentos'][16]."
	 \r18-".$_SESSION['talentos'][17]."
	 \r19-".$_SESSION['talentos'][18]."
	 \r20-".$_SESSION['talentos'][19]."
	 
	\r####################################################################################################################################	");
	fclose($ficha);
	header('Location:ficha.txt');
	
?>