const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	id_pac,id_med: /^\d{7,11}$/, 
	enf: /^[a-zA-ZÀ-ÿ\s]{15,40}$/, 
	
}

const campos = {
	id_pac: false,
	id_med: false,
	enf: false,

	// telefono: false
	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "id_pac":
			validarCampo(expresiones.id_pac, e.target, 'id_pac');
		break;
		case "id_med":
			validarCampo(expresiones.id_med, e.target, 'id_med');
		break;
		case "enf":
			validarCampo(expresiones.enf, e.target, 'enf');	
		break;
		
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
		var doc_p = document.getElementById('id_pac').value;
		var doc_m = document.getElementById('id_med').value;
		var enfer = document.getElementById('enf').value;

	const terminos = document.getElementById('terminos');
	if(campos.id_pac && campos.id_med && campos.enf && terminos.checked ){
		formulario.reset();
		console.log(doc_p);console.log(doc_m);console.log(enfer);
		$.post ("registro.php?cod=datos",{doc_p: doc_p, doc_m: doc_m, enfer: enfer}, function(document){$("#mensaje").html(document);
		
		}),
		
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} 
});
