<?php
	$dbhost='localhost:3306';/*nombre de servidor*/  
	$dbusername='root';/*usuario de base de datos*/  
	$dbuserpass='';/*contraseña, la deje en blanco para pruebas*/  
	$dbname='bootstrap';/*nombre de la base de datos*/  
	$enlace = mysqli_connect($dbhost, $dbusername, $dbuserpass, $dbname);

	if (!$enlace) {
	    print "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    print "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    print "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	print "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
	print "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

	mysqli_close($enlace);
?>