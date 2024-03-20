<?php
//conectar bd
require_once("conexion/database.php");
$db = new Database();
$con = $db->conectar();
session_start();
?>
<?php
    
    $id_pac = $_POST['id_pac'];
    $id_med = $_POST['id_med'];
    $fecha = $_POST['fecha'];
    $enf = $_POST['enf'];


    $sql=$con -> prepare ("SELECT*FROM historial where id_pac = '$id_pac'");
    $sql -> execute();
    $fila = $sql -> fetchALL(PDO::FETCH_ASSOC);

    if ($id_pac=="" || $id_med=="" || $fecha=="" || $enf=="")
    {
    echo '<script>alert("EXISTEN DATOS VACIOS"); </script>';
   
    }

    else {
    $insertSQL = $con->prepare ("INSERT INTO historial (id_pac,id_med,fecha,enf) VALUES ('$id_pac','$id_med', '$fecha','$enf')");
    $insertSQL->execute();
    echo '<script>alert("Registro exitoso"); </script>';
  
    }

?>