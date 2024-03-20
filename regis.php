<?php
//conectar bd
require_once("conexion/database.php");
$db = new Database();
$con = $db->conectar();
session_start();
?>
<?php
    
    $doc_p = $_POST['doc_p'];
    $doc_m = $_POST['doc_m'];
    $fecha = $_POST['fecha'];
    $enfer = $_POST['enfer'];


    $sql=$con -> prepare ("SELECT*FROM historial where id_pac = '$doc_p'");
    $sql -> execute();
    $fila = $sql -> fetchALL(PDO::FETCH_ASSOC);

    if ($doc_p=="" || $doc_m=="" || $fecha=="" || $enfer=="")
    {
    echo '<script>alert("EXISTEN DATOS VACIOS"); </script>';
   
    }
    else if($fila){
        echo '<script>alert("Usuario");</script>';
    }    

    else {
    $insertSQL = $con->prepare ("INSERT INTO historial (id_pac,id_med,fecha,enf) VALUES ('$doc_p','$doc_m', '$fecha','$enfer')");
    $insertSQL->execute();
    echo '<script>alert("Registro exitoso"); </script>';
  
    }

?>