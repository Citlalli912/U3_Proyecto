<?php
session_start();
if(empty($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <h1>Inicia sesion</h1>
    <form action="validar_login.php" method="post">
        <label for="user">Nombre de ususario</label>
        <br>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">Contraseña</label>
        <br>
        <input type="text" name="pass" id="pass">
        <br>
        <input type="submit" value="Iniciar sesion">
    </form>
</body>
</html>
<?php
}else{
    header("Location: index.php");
}
?>