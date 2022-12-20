<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: admin.php ");
}
$ID=$_GET['id'];
$iduser = $_SESSION['id_usuario'];

$comprobar = "SELECT idservicio FROM servicossolicitados WHERE idservicio = '$ID' AND idusuarios = '$iduser';";
$resultadoserv = $conexion->query($comprobar);
$filas = $resultadoserv->num_rows;
  if($filas>0){
    echo "
      <script>
        alert('Este servicio ya ha sido agregado anteriormente');
        window.location = 'admin.php';
      </script>
    ";
  }else{
      $EliminarAsignatura = "INSERT INTO servicossolicitados(idusuarios, idservicio)VALUES('$iduser','$ID')"; 
      $resultadomaterias = $conexion->query($EliminarAsignatura);
      echo "
        <script>
            alert('Servicio agregado');
            window.location = 'admin.php';
        </script>
      ";
  }

$conexion->close();
?>