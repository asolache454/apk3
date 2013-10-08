<?php

	$hostname_conecta = '132.248.31.102';
	$username_conecta = 'alex';
	$password_conecta = 'c4rn4g3';
	$conecta = mysql_pconnect($hostname_conecta, $username_conecta, $password_conecta);
	
	$database_conecta = mysql_select_db ('prueba')  or die ('Error al seleccionar la Base de Datos: '.mysql_error());
	
	mysql_query("SET NAMES utf8");
	//mysql_query("SET NAMES iso-8859-1");
	
	// or trigger_error(mysql_error(),E_USER_ERROR);
	
	//$password_conecta);
	//, $username_conecta, $password_conecta) or trigger_error(mysql_error(),E_USER_ERROR);
?>