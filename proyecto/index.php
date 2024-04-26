<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi galeria de imagenes</title>
</head>
<body>
    <section class="fondo">
        <h1>Mi galeria de imagenes</h1>
    <nav>
        <ul>
            <li><a href="upload.php">Subir imagen</a></li>
            <li><a href="#">Registrar</a></li>
        </ul>
    </nav>
    <div class="galeria">
    <?php
    $ruta_imagenes = "imagenes/";
    $imagenes = opendir($ruta_imagenes);
    $hay_imagenes = false; /*variable booleana*/
    if($imagenes){
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen ) && getimagesize ($ruta_imagenes . $imagen)){
                echo "<img src = '$ruta_imagenes$imagen'>";
                $hay_imagenes = true;
            }
        }
        closedir ($imagenes);
    }else{
        echo "Error: al cargar carpeta de imagenes";
    }
    if(!$hay_imagenes){
        echo "No hay imagenes aun. Subir una imagen";
    }
    
    ?>
    </div>
    </section>
</body>
</html>