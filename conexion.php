<?php
$hostname_conexion = "127.0.0.1:33065";  //conexion al hosting
$database_conexion = "halterofilia";  //nombre de la base de datos
$username_conexion = "root"; //nombre de usuario
$password_conexion = "";  //clave de usuario
$conexion = new mysqli($hostname_conexion, $username_conexion, $password_conexion,$database_conexion);  
 
/*Verificamos que la sesion este iniciada*/
session_start();
 
/*eliminamos codigo malicioso de las variables.*/
function limpiar($var)
{
    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = str_replace(chr(160),'',$var);
    return $var;
}
 
/*validamos que el mail esta escrito correctamente.*/
function validar_email($email){
    $mail_correcto = 0; 
    //compruebo unas cosas primeras 
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@"))
    { 
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," ")))
       {//miro si tiene caracter .
          if (substr_count($email,".")>= 1)
          {//obtengo la terminacion del dominio 
             $term_dom = substr(strrchr ($email, '.'),1); 
             //compruebo que la terminacion del dominio sea correcta 
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) )
             {//compruebo que lo de antes del dominio sea correcto 
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                if ($caracter_ult != "@" && $caracter_ult != ".")
                { 
                   $mail_correcto = 1; 
                }
             }
          }
       }
    }
    if ($mail_correcto) 
       return 1;
    else 
       return 0;
}
 
/*con esta opcion verificamos que el usuario este registrado y logeado correctamente*/
function user_login()
{
    if(!$_SESSION['id'])
    {
        exit ("<h5>Solo usuarios registrados y logeados podrán acceder a esta Página,</h5> <a href='javascript:history.back(-1)'>Volver</a>");
    }
}
 
?>