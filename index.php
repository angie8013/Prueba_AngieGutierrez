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
	<title>Validación de Formulario con Javascript</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/css.css">
</head>

<body>
   <main>
        <form  method="POST" autocomplete="off" class="formulario" id="formulario">
            

                <!-- div para capturar el documento -->

                <div class="formulario__grupo-input" id="grupo__id_pac">
                    <label for="id_pac" class="formulario__label">Documento del paciente*</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="id_pac" id="id_pac" placeholder="Documento">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                            El documento tiene que ser de 6 a 11 dígitos y solo puede contener numeros.</p>
                </div>

                <!-- div para capturar el nombre -->

                <div class="formulario__grupo-input" id="grupo__id_med">
                    <label for="id_med" class="formulario__label">Documento del medico*</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" onkeyup="mayus(this);" name="id_med" id="id_med" placeholder="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                        El documento tiene que ser de 6 a 11 dígitos y solo puede contener numeros.</p>
                </div>

               <!--div para agregar los dos campos correspondientes-->

               <div class="formulario__grupo-input" id="grupo__fecha">
                    <label for="fecha" class="formulario__label">Fecha de la urgencia*</label>
                        <div class="formulario__grupo-input">
                            <input type="datetime-local" class="formulario__input" name="fecha" id="fecha" placeholder="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                </div>

                <div class="formulario__grupo-input" id="grupo__enf">
                    <label for="enf" class="formulario__label">Documento del medico*</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" onkeyup="mayus(this);" name="enf" id="enf" placeholder="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error"></p>
                </div>
                              
                </div>  

                
                <!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo-iput" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
            
            <p class="text-center">
                      
            <div class="formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn" name="save" value="guardar" >Enviar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
                
        
        </form>
   </main>
   <script src="js/jquery.js"></script>
   <script src="js/form.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <!--  Javascript funcion para convertor en mayusculas y minusculas -->
    <!-- <script src="../js/main.js"></script> -->
    <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }

        function minus(e) {
        e.value = e.value.toLowerCase();
        }
    </script>
  
</body>

</html>