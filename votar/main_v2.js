

const renderCrearRespuesta = () => {
	const mainContent = document.getElementById('main-content');
	const crearRespuestas = document.getElementById('crear-respuestas');

	mainContent.innerHTML = crearRespuestas.innerHTML;
}


const renderCrearPregunta = () => {
	const mainContent = document.getElementById('main-content');
	const crearPreguntas = document.getElementById('crear-preguntas');

	mainContent.innerHTML = crearPreguntas.innerHTML;

}

window.onload = () => {
	const mainContent = document.getElementById('main-content');
	const liOptions = document.getElementById('li-options');

	mainContent.innerHTML = liOptions.innerHTML;


	document.getElementById('agregar-pregunta').addEventListener('click', () => {
		// alert('Hello from pregunta');
		renderCrearPregunta();
	});


	document.getElementById('agregar-respuesta').addEventListener('click', () => {
		// alert('Hello from respuesta');
		renderCrearRespuesta();
	});

	// document.getElementById('crear-respuesta').addEventListener('click', () => {
	// 	alert('Hello from crear respxuesta !!!!');
	// 	// renderCrearRespuesta();
	// });

	const formulario = document.getElementById('form-preguntas');
	formulario.onsubmit = (e) => {
		e.preventDefault();
	};


}




