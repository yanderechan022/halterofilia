<!-- * Login php mysql para web: * Php mysql login, * Copyright 2015 bloguero-ec. * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com) *-->
 
<?php include('conexion.php'); ?>
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Perfil de usuario...</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
 
<body>
<div id="form1">

	 <br><br>
<div>
<?php
user_login();
    echo '<p>Identificacion :   ' . $_SESSION['id'] . '</p>';
    echo '<p> se encuentra en esta página de usuarios registrados donde solo ingresaran usarios que se hayan registrado y logeado correctamente ....</p>';
    echo '<p>Usted podrá hacer uso de página bloqueada usando user_login(); para bloquear dichas páginas a las cuales desea que solo usuarios registrados y logeados accedan a ellas.....</p>';
 
    echo '<a href="login.php?modo=desconectar">desconectar</a>';
    
?>
</div>
</div>
</body>
</html>