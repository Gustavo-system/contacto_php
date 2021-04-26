class UI {
	static alerta(etiqueta, classN) {
		const el = document.querySelector(etiqueta);
		el.className = `form-control ${classN}`;
	}

	static limpiarCampos() {
		document.querySelector('#id_nombre').value = '';
		document.querySelector('#id_empresa').value = '';
		document.querySelector('#id_phoneNumber').value = '';
		document.querySelector('#id_email').value = '';
		document.querySelector('#id_asunto').value = '';
	}

	static error(id) {
		const el = document.getElementById(id);
		el.style.opacity = 1;
	}

	static good(id) {
		const el = document.getElementById(id);
		el.style.opacity = 0;
	}
}

function validarContacto() {
	let nombre = document.getElementById('id_nombre').value;
	let empresa = document.getElementById('id_empresa').value;
	let numero = document.getElementById('id_phoneNumber').value;
	let email = document.getElementById('id_email').value;
	let asunto = document.getElementById('id_asunto').value;

	const r_nombre = validarNombre(nombre);
	const r_empresa = validarEmpresa(empresa);
	const r_numero = validarNumero(numero);
	const r_email = validarEmail(email);
	const r_asunto = validarAsunto(asunto);

	if (
		r_nombre == -1 ||
		r_empresa == -1 ||
		r_numero == -1 ||
		r_email == -1 ||
		r_asunto == -1
	) {
		return false;
	} else {
		alert('datos enviados');
		UI.limpiarCampos();
	}
}

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
};

const { nombre, correo } = expresiones;

const validarNombre = (el) => {
	if (el === '' || el.length < 10 || !nombre.test(el)) {
		UI.alerta('#id_nombre', 'is-invalid');
		UI.error('error_nombre');
		return -1;
	} else {
		UI.alerta('#id_nombre', 'is-valid');
		UI.good('error_nombre');
	}
};

const validarEmpresa = (el) => {
	if (el != '') {
		if (el.length < 10) {
			UI.alerta('#id_empresa', 'is-invalid');
			UI.error('error_empresa');
			return -1;
		} else {
			UI.alerta('#id_empresa', 'is-valid');
			UI.good('error_empresa');
		}
	}
};

const validarNumero = (numero) => {
	if (numero === '' || numero.length != 10 || isNaN(numero)) {
		UI.alerta('#id_phoneNumber', 'is-invalid');
		UI.error('error_numero');
		return -1;
	} else {
		UI.alerta('#id_phoneNumber', 'is-valid');
		UI.good('error_numero');
	}
};

const validarEmail = (email) => {
	if (email != '') {
		if (email.length < 10 || !correo.test(email)) {
			UI.alerta('#id_email', 'is-invalid');
			UI.error('error_email');
			return -1;
		} else {
			UI.alerta('#id_email', 'is-valid');
			UI.good('error_email');
		}
	}
};

const validarAsunto = (txt) => {
	if (txt == '' || txt.length < 20) {
		UI.alerta('#id_asunto', 'is-invalid');
		UI.error('error_asunto');
		return -1;
	} else {
		UI.alerta('#id_asunto', 'is-valid');
		UI.good('error_asunto');
	}
};
