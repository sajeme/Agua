<?php
?>
<html>
	<?php
		echo ($_REQUEST("error")==1)?"Error":"";
	?>
	<body>
		
		<!--era get-->
		<form method="post" action="validar.php">
			Cadena: <input name="cadena">
	<!-- Cadena: <input name="cadena" value="<?php echo $_REQUEST("cadena");?>">   -->

			<input type="submit" name="boton" value="Enviar">
			</form>
	</body>
</html>