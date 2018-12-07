
<?php include('conexion.php'); ?>
<!doctype>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="csslogin.css">
<title></title>
</head>
 <header>
<a href="inicio.html"><img class="ca" src="casa.png"></a>

    <br>SOFWEIGHTLIFTING
<img class='logo' src="logo.png">
 </header>
<body>
   


<div class='cerrar'>
     <br><br>  <br><br>
   <?php
 
if(isset($_POST['login']))
{
    /*Validamos que todos los campos esten llenos correctamente*/
    if(($_POST['id'] != '') && ($_POST['pass'] != '') )
    {
 
    $id= $_POST['id'];
    $pass= md5(md5($_POST['pass']));
    $b_user=$conexion ->query("SELECT * FROM user WHERE id='$id'");   
    $ses = @mysqli_fetch_assoc($b_user) ;
    if(@mysqli_num_rows($b_user))
    {
        if($ses['pass'] == $pass)
        {   
            $_SESSION['id']=        $ses["id"];
            $_SESSION['nombre']= $ses["nombre"];
            $_SESSION['fechanacimiento']=  $ses["fechanacimiento"];
            $_SESSION['mail']=  $ses["mail"];
            $_SESSION['rol']= $ses['id_rol'];

        }
        else
        {
            echo '<h5>Contraseña incorrecta.</h5>';
        }
    }
    else
    {
        echo '<h5>Nombre de Usuario incorrecto.</h5>';
    }
    }
    else
     
    echo '<h5>Deberas llenar todos los campos.</h5>';
     
    }
     
if(isset($_GET['modo']) == 'desconectar')
{
    session_destroy();
    echo '<meta http-equiv="Refresh" content="2;url=login.php"> ';
    exit ('CERRANDO SESION.......' );
}
     

  if(isset($_SESSION['rol']) && $_SESSION['rol']== '777') {
echo '<a href="?modo=desconectar">Cerrar Sesión';
    echo '<meta http-equiv="Refresh" content="2;url=inicio_nutricionista.php"> ';

    /*echo '<a href="?modo=desconectar">Cerrar Sesión';*/
    echo '<a href="inicio_nutricionista.php"><br>Ir al perfil</a>';
     }

else{
  if (isset($_SESSION['rol']) && $_SESSION['rol'] == '222')
  {

 echo '<meta http-equiv="Refresh"content="2;url=juezInterno.php"> ';

  echo '<a href="?modo=desconectar">Cerrar Sesión';
    echo '<a href="juezInterno.php"><br>Ir al perfil</a>'; 
  }


  else{
  if (isset($_SESSION['rol']) && $_SESSION['rol'] == '111')
  {

 echo '<meta http-equiv="Refresh"content="2;url=juezInterno.php"> ';

  echo '<a href="?modo=desconectar">Cerrar Sesión';
    echo '<a href="juezInterno.php"><br>Ir al perfil</a>'; 
  
  }
  else{
  if (isset($_SESSION['rol']) && $_SESSION['rol'] == '666')
  {

 echo '<meta http-equiv="Refresh"content="2;url=fisioterapeuta.php"> ';

  echo '<a href="?modo=desconectar">Cerrar Sesión';
    echo '<a href="fisioterapeuta.php""><br>Ir al perfil</a>'; 
  
  }
  else{
  if (isset($_SESSION['rol']) && $_SESSION['rol'] == '333')
  {

 echo '<meta http-equiv="Refresh"content="2;url=juezInterno.php"> ';

  echo '<a href="?modo=desconectar">Cerrar Sesión';
    echo '<a href="juezInterno.php"><br>Ir al perfil</a>'; 
  
  }
  else{
  if (isset($_SESSION['rol']) && $_SESSION['rol'] == '0')

  {
   echo '<p class="se" style="color: white;">Identificacion :   ' . $_SESSION['id'] . '</p>';
    echo '<p class="se" style="color: white;">Usuario :   ' . $_SESSION['nombre'] . '</p>';
    echo '<p class="se" style="color: white;">Fecha de nacimiento :   ' .  $_SESSION['fechanacimiento'] . '</p>';
    echo '<p class="se" style="color: white;">mail :   ' . $_SESSION['mail'] . '</p>'; 

   echo '<a href="?modo=desconectar">Cerrar Sesión';
  }
    

}
}
}
}

} ?> 
    </div>

<?php
if (!isset($_SESSION['rol']) ){
?>
<form name="login_user" id="form1" method="POST" action=""> 
<div class='caja'>
    <br><br><br><br>
    <div class='usu'>
        <label for="login_username">Identificacion :</label> 
        <input type="text" name="id" id="login_username" class="lo" title="Ingrese su nombre de usuario" placeholder="Digite identificacion" />
    </div>      
    <br><br>
    <div class="contrasena">
        <label for="login_password">Clave :</label>
        <input type="password" name="pass" id="login_password" class="lo" title="Clave requerida" />
    </div>            
     <br><br>
                 
    <div class="submit">
        <input type="submit" class="enviar" name="login" style="width:100px;" tabindex="6" value="Entrar" />
         </div>
         <div class="tex">
        <label>
            <input type="checkbox" name="remember" id="login_remember" value="0" />
            Recuerdeme en este computador
        </label>  
         </div>
   
     
    <p class="back">No eres Usuario...?<a href="registro.php">Registrate..</a></p>
   </div>
</form>
<?php
}
?>   

 

  


</body>
</html>
