<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
	header("Location: admin.php ");
}
$iduser = $_SESSION['id_usuario'];
$sql = "SELECT idusuarios,NombreC FROM usuarios WHERE idusuarios = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Lobster&display=swap" rel="stylesheet">
    <title>Bienvenida</title>
</head>
<body class="d-flex h-100 text-white bg-dark">
    <div class="container position-absolute top-50 start-50 translate-middle mt-5">
            <div class="row">
                <div class="col-12 col-sm-6 p-5">
                    <div class="fs-1 mb-3 " style="font-family: 'Lobster', cursive;">
                        Bienvenidos
                    </div>
                    <div class="small fst-italic mb-3">
                        Sea bienvenido a nuestra veterinaria, ofrecemos variedad de servicios y compra de productos solicitados por ti mismo en línea.
                    </div>
                    <a href="admin.php" class="btn btn-outline-light rounded-pill">Mira nuestros servicios</a>
                </div>
                <div class="col-12 col-sm-6 p-5 text-center">
                    <img class="img-fluid w-100" src="dog.png"/>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>