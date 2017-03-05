<?php
// incluir  conexion al bases de datos
include ("conexion.php");
//capturar los datos que envia el usuario
 $name =$_POST['Nombre'];
 $user =$_POST['Usuario'];
 $mail = $_POST['Email'];
 $password =$_POST['psw'];

$sql = " SELECT * FROM `usuarios` WHERE  `Usuario` = '$user' OR `Email` = '$mail' ";
$query = mysqli_query($connect,$sql);
if (mysqli_num_rows($query)> 0) {
    echo 'El usuario ya existe';
}
else {

	$insert = "INSERT INTO `usuarios`(`Nombre`, `Usuario`, `Email`, `Password`) VALUES ('$name', '$user', '$mail', '$password')";
	$query =mysqli_query($connect, $insert);

	if ($query) {
	 echo 'Registrado'; 
	}

	
} 


?>