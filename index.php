<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Calculadora de fracciones</title>
<link href="../../jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="../../jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="../../jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>

</head> 
<body>
<div data-role="page" id="page">
  <div data-role="header">
    <h1>SISTEMA DE PRUEBA</h1>
  </div>
  <div data-role="content">
  	<form name="form1" method="post" action="guardar.php">
      <table width="100%" border="0">
        <tr>
          <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>ALTAS</strong></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="50%" align="right">ID:</td>
          <td width="50%"><input type="number" name="id" id="id" value=""></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><label>Descr:</label></td>
          <td><input type="text" name="descr" id="descr" value=""></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="guardar" id="button" value="Guardar">
          </td>
        </tr>
      </table>
		</form>
  </div>
</div> 
</body>
</html>
