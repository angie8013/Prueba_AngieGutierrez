<?php
	require 'conexion/database.php';
    $db = new Database();
    $con = $db->conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
<body onload="frm_guardar.tipu.focus()">
      <div class="table-responsive-sm section text-center">
      <table class="table table-dark mn-auto">   
  
      <table class="table table-light">

        <form autocomplete="off" name="frm_consulta" method="GET">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Cedula paciente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Cargo</th>
                <th scope="col"> Tipo de usuario</th>
              </tr>
            </thead>

          <?php
          $sql1 = $con->prepare("SELECT * FROM historial,medico,paciente WHERE historial.id_pac = paciente.id AND historial.id_med = medico.id_med ORDER BY enf ASC");
          $sql1->execute();
          $resultado1 = $sql1->fetchAll(PDO::FETCH_ASSOC);
          foreach ($resultado1 as $resul) {

          ?>
          <tbody>
            <tr>
              <td><input class="form-control" name="id_pac" type="text" value="<?php echo $resul['id_pac'] ?>" readonly="readonly" /></td>
              <td ><input class="form-control" name="nom" type="text" value="<?php echo $resul['nom'] ?>" readonly="readonly" /></td>
              <td><input class="form-control" name="apel" type="text" value="<?php echo $resul['apel'] ?>" readonly="readonly" /></td>
              <td><input class="form-control" name="tel" type="text" value="<?php echo $resul['tel'] ?>" readonly="readonly"  /></td>
              <td><input  class="form-control" name="edad" type="text" value="<?php echo $resul['edad'] ?>" readonly="readonly"  /></td>
              <td><input class="form-control" name="nom_m" type="text" value="<?php echo $resul['nom_m'] ?>" readonly="readonly"  /></td>
              <td><input class="form-control" name="apel_m" type="text" value="<?php echo $resul['apel_m'] ?>" readonly="readonly"  /></td>
              <td><input class="form-control" name="fecha" type="text" value="<?php echo $resul['fecha'] ?>" readonly="readonly"/></td>
              <td><input class="form-control" name="enf" type="text" value="<?php echo $resul['enf'] ?>" readonly="readonly"/></td>


            </tr>
            </tbody>
          <?php 
        } ?>
        </form>
      </table>
      </div>
      
</body>
</html>