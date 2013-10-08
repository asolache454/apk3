<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Calculadora de fracciones</title>
<link href="../../jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="../../jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="../../jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>

<?php 
	
	include("class/conecta.php"); 

	$id = $_POST['id'];
	$descr = $_POST['descr'];

?>

</head> 
<body>
<div data-role="page" id="page">
  <div data-role="header">
    <h1>Guardando datos</h1>
  </div>
  <div data-role="content">
  	<?php
    	$inserta = mysql_query('
				insert into
					tml
				values (
					\''.$id.'\',
					'.$descr.')')
				
			or die ('Error en $inserta:<br /><br /> '.mysql_error());
		
			echo '<center>';
				echo '<br /><br /><br /><br />';
					echo '<span class="texto_azul2">  ';      
						echo 'El campo "Los datos se guardaron correctamente...';
					echo '</span><br /><br /><br /><br /><br />';
				echo '<br /><br /><br /><br />';
			echo '</center>';
			echo '<META HTTP-EQUIV="Refresh" CONTENT="2;URL=index.php">';
		?>
  </div>
</div> 
</body>
</html>
