<?php
include("conexion.php");
$resultado="";
$id="";
$nombre="";
$apellido="";
$observaciones="";
$apto="";

$query="SELECT * FROM fisioterapeuta";
if(isset($_POST["halterofilia"]) && $_POST["halterofilia"]!="" && isset($_POST["buscar"]) && $_POST["buscar"]=="search"){
$queryBuscar='SELECT * FROM fisioterapeuta WHERE nombre_dep="'.$_POST["halterofilia"].'"';

$resultBusqueda=$conexion->query($queryBuscar);	
foreach ($resultBusqueda as $rowBusqueda) {
	$id= $rowBusqueda["id_fisio"];
	$nombre= $rowBusqueda["nombre_dep"];
	$apellido=$rowBusqueda["apellido_dep"];
	$observaciones=$rowBusqueda["observaciones"];
	$apto=$rowBusqueda["apto"];
	
}

}
if(isset($_POST["update"]) &&  $_POST["update"]=="actualiza"){
	$id=$_POST["id_fisio"];
	$nombre=$_POST["nombre_dep"];
	$apellido=$_POST["apellido_dep"];
	$observaciones=$_POST["observaciones"];
	$apto=$_POST["apto"];
	$campoId=$_POST["nombre_dep"];


$query= "UPDATE fisioterapeuta SET id_fisio= '$id',nombre_dep='$nombre',apellido_dep='$apellido',observaciones='$observaciones',apto='$apto' WHERE nombre_dep='$campoId'";

$resultado= $conexion->query($query);
//echo $query;



if ($resultado){
	$resultado= "actualizacion exitosa";
}
else{
	$resultado= "error al actualizar";
}

}
if(isset($_POST["borra"]) &&  $_POST["borra"]=="delete"){
	$id="";
	$nombre="";
	$apellido="";
	$observaciones="";
	$apto="";
	$campoId=$_POST["nombre_dep"];


$query= "DELETE  FROM fisioterapeuta  WHERE id_fisioterapeuta='$campoId'";

$resultado= $conexion->query($query);
//echo $query;



if ($resultado){
	$resultado= "eliminacion exitosa";
}
else{
	$resultado= "error al eliminar";
}

}
if(isset($_POST["guardar"]) &&  $_POST["guardar"]=="insert"){
	$id=$_POST["id_fisio"];
	$nombre=$_POST["nombre_dep"];
	$apellido=$_POST["apellido_dep"];
	$observaciones=$_POST["observaciones"];
	$apto=$_POST["apto"];
	$campoId=$_POST["nombre_dep"];

	
$query= "INSERT INTO fisioterapeuta(id_fisio,nombre_dep,apellido_dep,observaciones,apto) VALUES('$id','$nombre','$apellido','$observaciones','$apto')";

$resultado= $conexion->query($query);



if ($resultado){
	$resultado= "insercion exitosa";
}
else{
	$resultado= "error al insertar";
}

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Opciones</title>
	<style type="text/css"></style>
	<link href="fisio.css" type="text/css" rel="stylesheet">
	
	</head>
<body>
	<table width="500" border="2" style="background-color:#FFF;">
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>observaciones</th>
        <th>apto</th>
        
  
      </tr>
     <?php

         $consulta="SELECT*FROM fisioterapeuta";
         $ejecutar=mysqli_query($conexion,$consulta);
         var_dump($ejecutar);
         $i=0;  
         while ($fila= mysqli_fetch_array($ejecutar)) {
         
           $id=$fila['id_fisio'];
           $nombre=$fila['nombre_dep'];
           $apellido=$fila['apellido_dep'];
           $observaciones=$fila['observaciones'];
           $apto=$fila['apto'];

           

           $i++;
         
       ?>


       <tr align="center">
        <td><?php echo $id;?></td>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $apellido; ?></td>
        <td><?php echo $observaciones; ?></td>
        <td><?php echo $apto; ?></td>
        
        
      </tr>
        
      <?php } ?>
    </table>



	<center>
		

		<label>Consultar</label><br>
		
		<form action="#" method="POST"> 

	
	<input type="text" name="halterofilia">
	<button name="buscar" onclick="#" value="search">Buscar</button><br><br><br>


<input type="number"  name= "id_fisio" placeholder="id..." value="<?php echo $id;?>"/>

<input type="text"  name= "nombre_dep" placeholder="nombre..."  value="<?php echo $nombre;?>"/>
<input type="text"  name= "apellido_dep" placeholder="apellido..." value="<?php echo $apellido;?>"/>
<input type="text"  name= "observaciones" placeholder="observaciones..." value="<?php echo $observaciones;?>"/> 
<input type="text"  name= "apto" placeholder="apto..." value="<?php echo $apto;?>"/>



<button name="update" onclick="#" value="actualiza">Modificar</button>
<button name="borra" onclick="#" value="delete">Eliminar</button>
<button name="guardar" onclick="#" value="insert">Guardar</button>

</form>

	
		
</center>
</body>
</html>
<?php
 echo $resultado;
?>



