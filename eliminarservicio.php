<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: admin.php ");
}
$iduser = $_SESSION['id_usuario'];
$ID=$_GET['id'];
$EliminarServicio = "DELETE FROM servicossolicitados WHERE idServicioSolicitado='$ID';";
$resultadodelete = $conexion->query($EliminarServicio);
echo "
    <script>
        alert('Usted ha cancelado el servicio');
        window.location='admin.php';
    </script>
";
$conexion->close();
?>