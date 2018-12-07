<?php
include("conexion.php");
$resultado="";
$empresa="";
$age="";
$Fecha="";
$VIP="";
$Provincia="";
$query="SELECT * FROM compania";
if(isset($_POST["compania"]) && $_POST["compania"]!="" && isset($_POST["buscar"]) && $_POST["buscar"]=="search"){
$queryBuscar='SELECT * FROM compania WHERE nombre="'.$_POST["compania"].'"';

$resultBusqueda=$conexion->query($queryBuscar);	
foreach ($resultBusqueda as $rowBusqueda) {
	$empresa= $rowBusqueda["nombre"];
	$age=$rowBusqueda["Edad"];
	$Fecha=$rowBusqueda["Fecha"];
	$VIP=$rowBusqueda["VIP"];
	$Provincia=$rowBusqueda["Provincia"];
}

}
if(isset($_POST["update"]) &&  $_POST["update"]=="actualiza"){
	$empresa=$_POST["nombre"];
	$age=$_POST["Edad"];
	$Fecha=$_POST["Fecha"];
	$VIP=$_POST["VIP"];
	$Provincia=$_POST["Provincia"];
	$campoId=$_POST["name"];


$query= "UPDATE compania SET nombre= '$empresa', Edad='$age',Fecha='$Fecha',VIP='$VIP',Provincia='$Provincia' WHERE nombre='$campoId'";

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
	$empresa="";
	$age="";
	$Fecha="";
	$VIP="";
	$Provincia="";
	$campoId=$_POST["name"];


$query= "DELETE  FROM compania  WHERE nombre='$campoId'";

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
	$empresa=$_POST["nombre"];
	$age=$_POST["Edad"];
	$Fecha=$_POST["Fecha"];
	$VIP=$_POST["VIP"];
	$Provincia=$_POST["Provincia"];
	$campoId=$_POST["name"];
$query= "INSERT INTO compania(nombre,Edad,Fecha,VIP,Provincia) VALUES('$empresa','$age','$Fecha','$VIP','$Provincia')";

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
	<link href="crud.css" type="text/css" rel="stylesheet">
	</head>
<body>



	<center>
		

		<label>Consultar</label><br>
		
		<form action="#" method="POST"> 

	
	<input type="text" name="compania">
	<button name="buscar" onclick="#" value="search">Buscar</button><br><br><br>


<input type="text"  name= "nombre" placeholder="nombre..." value="<?php echo $empresa;?>"/>
<input type="hidden"  name= "name"  value="<?php echo $empresa;?>"/>
<input type="text"  name= "Edad" placeholder="Edad..." value="<?php echo $age;?>"/>
<input type="date"  name= "Fecha" placeholder="yyy-mm-dd..." value="<?php echo $Fecha;?>"/> 
<input type="text"  name= "VIP" placeholder="VIP..." value="<?php echo $VIP;?>"/>
<input type="text"  name= "Provincia" placeholder="Provincia..." value="<?php echo $Provincia;?>"/>


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



