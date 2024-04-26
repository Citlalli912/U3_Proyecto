<?php
$servidor = "localhost";
$usuariodb = "root";
$passdb = "";
$db = "galeria";

$usuario = $_POST["user"];
$contrasena = $_POST["pass"];
$emali = $_POST["email"];

$conexion = mysqli_connect($servidor,$usuariodb,$passdb,$db);
$consulta = "SELECT nombre, contrasena FROM usuarios WHERE nombre='$usuario' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion,$consulta);

if(mysqli_query($conexion, $cosulta)){
    $_SESSION['usuario']=$usuario;
    header("Location: upload.php");
}else{
    echo "Error: Usuario y/o contrasena incorrecta";
}
mysqli_close($conexion);
?>