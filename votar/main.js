


const initMainBackBttn = () => {
	//End Session
	const bttn = document.getElementById('main-back');
	bttn.addEventListener('click', () => {
		initRenderEnc();	
	});
}

const initBackBttn = () => {
	//End Session
	const bttn = document.getElementById('back');
	bttn.addEventListener('click', () => {
		initRenderPreg();	
	});
}

const initFormResp = () => {
	const formulario = document.getElementById('form-respuestas');
	formulario.onsubmit = (e) => {
		e.preventDefault();


		//Codigo php que envia las respuestas a sql tomando en cuenta el id de la preguntas
		const textResp = document.getElementById('text-respuestas');
		textResp.value = '';
		//render respuestas
		initBackBttn();
	}
}


const renderCrearRespuesta = () => {
	const mainContent = document.getElementById('main-content');
	const crearRespuestas = document.getElementById('crear-respuestas');
	mainContent.innerHTML = crearRespuestas.innerHTML;

	initFormResp();
}



const initRenderResp = () => {
	renderCrearRespuesta();
	// document.getElementById('agregar-respuesta').addEventListener('click', () => {
	// 	renderCrearRespuesta();
	// });
}


const initFormPreg = () => {
	const formulario = document.getElementById('form-preguntas');
	formulario.onsubmit = (e) => {
		e.preventDefault();

		//Codigo php que envia las preguntas a sql
		const textPreg = document.getElementById('text-pregunta');
		textPreg.value = '';

		//render respuestas
		initRenderResp();
	}
}


const renderCrearPregunta = () => {
	const mainContent = document.getElementById('main-content');
	const crearPreguntas = document.getElementById('crear-preguntas');
	mainContent.innerHTML = crearPreguntas.innerHTML;
	initFormPreg();
	initMainBackBttn();
}


const initRenderPreg = () => {
	renderCrearPregunta();
}



//render encuestas

const initFormEnc = () => {

	const formulario = document.getElementById('form-encuestas');

	formulario.onsubmit = (e) => {
		e.preventDefault();

		//Codigo php que envia las encuestas a sql

		//.......

		const textEnc = document.getElementById('text-encuesta');
		textEnc.value = '';


		//render respuestas
		initRenderPreg();
	}
}


const renderCrearEncuesta = () => {
	const mainContent = document.getElementById('main-content');
	const crearEnc = document.getElementById('crear-encuestas');
	mainContent.innerHTML = crearEnc.innerHTML;
	initFormEnc();
}


const initRenderEnc = () => {
	renderCrearEncuesta();
}






window.onload = () => {

	//render options
	initRenderEnc();
}




