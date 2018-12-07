<?php
include("conexion_n.php");
$resultado="";
$empresa="";
$empresa1="";
$age="";
$Fecha="";
$VIP="";
$Provincia="";
$query="SELECT * FROM halterofilia";
if(isset($_POST["halterofilia"]) && $_POST["halterofilia"]!="" && isset($_POST["buscar"]) && $_POST["buscar"]=="search"){
$queryBuscar='SELECT * FROM nutricionista WHERE id_nutricionista="'.$_POST["halterofilia"].'"';

$resultBusqueda=$conexion->query($queryBuscar);	
foreach ($resultBusqueda as $rowBusqueda) {
	$empresa= $rowBusqueda["id_nutricionista"];
	$empresa1= $rowBusqueda["nombre_dep"];
	$age=$rowBusqueda["apellido_dep"];
	$Fecha=$rowBusqueda["fecha_nacimiento"];
	$VIP=$rowBusqueda["deltoides"];
	$Provincia=$rowBusqueda["biceps_braquial"];
}

}
if(isset($_POST["update"]) &&  $_POST["update"]=="actualiza"){
	$empresa=$_POST["id_nutricionista"];
	$empresa1=$_POST["nombre_dep"];
	$age=$_POST["apellido_dep"];
	$Fecha=$_POST["fecha_nacimiento"];
	$VIP=$_POST["deltoides"];
	$Provincia=$_POST["biceps_braquial"];
	$campoId=$_POST["name"];


$query= "UPDATE nutricionista SET id_nutricionista= '$empresa',nombre_dep='$empresa1' apellido_dep='$age',fecha_nacimiento='$Fecha',deltoides='$VIP',biceps_braquial='$Provincia' WHERE id_nutricionista='$campoId'";

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
	$empresa1="";
	$age="";
	$Fecha="";
	$VIP="";
	$Provincia="";
	$campoId=$_POST["name"];


$query= "DELETE  FROM nutricionista  WHERE id_nutricionista='$campoId'";

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
	$empresa=$_POST["id_nutricionista"];
	$empresa=$_POST["nombre_dep"];
	$age=$_POST["apellido_dep"];
	$Fecha=$_POST["fecha_nacimiento"];
	$VIP=$_POST["deltoides"];
	$Provincia=$_POST["biceps_braquial"];
	$campoId=$_POST["name"];
$query= "INSERT INTO nutricionista(id_nutricionista,nombre_dep,apellido_dep,fecha_nacimiento,deltoides,biceps_braquial) VALUES('$empresa','$empresa1','$age','$Fecha','$VIP','$Provincia')";

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
	<link href="fisio.css" rel="stylesheet">
	</head>
<body>



	<center>
		

		<label>Consultar</label><br>
		
		<form action="#" method="POST"> 

	
	<input type="text" name="halterofilia">
	<button name="buscar" onclick="#" value="search">Buscar</button><br><br><br>


<input type="text"  name= "id_nutricionista" placeholder="nombre..." value="<?php echo $empresa;?>"/>
<input type="hidden"  name= "name"  value="<?php echo $empresa;?>"/>
<input type="text"  name= "nombre_dep" placeholder="nombre deportista" value="<?php echo $empresa1;?>"/>
<input type="hidden"  name= "name"  value="<?php echo $empresa1;?>"/>
<input type="text"  name= "apellido_dep" placeholder="apellido deportista" value="<?php echo $age;?>"/>
<input type="date"  name= "fecha_nacimiento" placeholder="yyy-mm-dd..." value="<?php echo $Fecha;?>"/> 
<input type="text"  name= "deltoides" placeholder="deltoides" value="<?php echo $VIP;?>"/>
<input type="text"  name= "biceps_braquial" placeholder="biceps braquial" value="<?php echo $Provincia;?>"/>


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



