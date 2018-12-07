
<?php
include("conexion.php");
?>
 
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="csslogin.css">
<title>Registro - Login php mysql</title>
</head>
 <header>
 <a href="inicio.html"><img class="ca" src="casa.png"></a></h2></a>

    <br>
    <div class="ctex">
<h2 class="ctex">CONTACTENOS</h2> </div>
<img class='logo' src="logo.png">
 </header>
<body>
<form name="registrar" action="" id="form1" method="post" onsubmit="return validar()" />
    <
 
    <div >
 
 
    </div>
 <div class="cajac">
  
   <div class="nom">
        <label class='nomb' for="login_username">* Nombres : </label> 
        <input type="text" name="nombre" id="nombre" class="n" title="Ingrese un nombre de usuario" placeholder="Digite nombre" required/>
  </div>
  
     
    <div class="mail">
        <label class='mai' for="login_mail">* Email :</label> 
        <input type="text" name="mail" id="mail" class="m" title="Ingrese su correo" required />
    </div>            
     <div class="mensaje">
        <label class='mai' for="login_mail">Mensaje :</label> 
        <input type="text" name="mail" id="mail" class="mens" title="Ingrese su corre0"required />
    
    </div>
        <div class="bt"> 
         <span><input name="registro" type="submit" value="Enviar"  class="cont"/>
      </div>
    </form>
 
</body>
</html>