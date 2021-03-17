
const sayHello = () => {

	// alert('Hello')

	const listCandidatos = document.getElementById('list-candidatos')
	const candidato = listCandidatos.value

	console.log(candidato)

}


const myForm = document.getElementById('myForm')

myForm.onsubmit = (e) => {
	e.preventDefault()
	sayHello()
}

// .addEventListener('onclick', sayHello())

// action="votar.php" role="form" method="post"