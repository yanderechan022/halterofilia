
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

<img class='logo' src="logo.png">
 </header>
<body>
<form name="registrar" action="" id="form1" method="post" onsubmit="return validar()" />
    <
 
    <div >
    <?php
if(isset($_POST['registro']))//Vallidamos que el formulario fue enviado
{
    /*Validamos que todos los campos esten llenos correctamente*/
    if( ($_POST['fechanacimiento'] != '') && ($_POST['id'] != '') && ($_POST['nombre'] != '') && ($_POST['mail'] != '') && ($_POST['pass'] != '') && ($_POST['conf_pass'] != ''))
    {
        if($_POST['pass'] != $_POST['conf_pass'])
        {
            echo '<h5>Las contraseñas no coinciden</h5>';
        }
        else
        {
            $fechanacimiento= limpiar ($_POST['fechanacimiento']); 
            $id= limpiar($_POST['id']);
            $nombre= limpiar($_POST['nombre']);
            $mail= limpiar($_POST['mail']);
            $pass= md5(md5(limpiar($_POST['pass'])));
            
             
            $b_user= $conexion ->query("SELECT id FROM user WHERE id='$id'");
            if($user=@mysqli_fetch_array($b_user))
            {
                echo '<h5>El nombre de usuario o el email ya esta registrado.</h5>';
                mysqli_free_result($b_user); //liberamos la memoria del query a la db
            }
            else
            {
                if(validar_email($_POST['mail']))
                {

                    $add="INSERT INTO user (fechanacimiento,id,nombre,mail,pass) values ('$fechanacimiento','$id','$nombre','$mail','$pass')";

                    

                    $res=$conexion ->query($add);
                    echo '<h4>Te has registrado Correctamente, ahora podras iniciar sesión como usuario registrado.</h4>';
                }
                else
                {
                    echo '<h5>El email no es valido.</h5>';
                }
            }
        }
    }
    else
    {
        echo '<h5>Deberas llenar todos los campos.</h5>';
    }
}
?>
 
    </div>
 <div class="cajar">
        <div class="iden">
        <label class='id' for="login_username">* N. Identificacion :</label> 
        <input type="text" name="id" id="id" class="ni" title="Ingrese un nombre de usuario" placeholder="Numero Identificacion" required />
  </div>
   <div class="nom">
        <label class='nomb' for="login_username">* Nombres : </label> 
        <input type="text" name="nombre" id="nombre" class="n" title="Ingrese un nombre de usuario" placeholder="Digite nombre" required/>
  </div>
    <div class="fec">
        <label class='fecha' for="login_username">* Fecha Nacimiento:</label> 
        <input type="date" name="fechanacimiento" id="fechanacimiento" class="f" title="Ingrese un nombre de usuario" placeholder="Fecha" required/>
  </div>
     
    <div class="mail">
        <label class='mai' for="login_mail">* Email :</label> 
        <input type="text" name="mail" id="mail" class="m" title="Ingrese su correo" required />
    </div>            
     
    <div class="pas">
        <label class='pass' for="login_pass">* Contraseña :</label> 
        <input type="password" name="pass" id="pass" class="p" title="Ingrese su contraseña" required />
    </div>
     
    <div class="cpas">
        <label class='cpass' for="login_conf_pass">* Confirme contraseña:</label>
        <input type="password" name="conf_pass" id="conf_pass" class="cp" title="Confirme su contraseña" required />
    </div>
        <div class="bt"> 
         <span><input name="registro" type="submit" value="Registrar"  class="registrar"/>
        <input type="reset" name="Limpiar" style="width:100px;" tabindex="6" value="Limpiar" class="limpiar" /></span>
         </div>
        </div>
        <h2>Ya estás registrado?<a href="login.php" > Inicia sesión
    </form>
 
</body>
</html>