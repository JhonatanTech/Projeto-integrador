const inputs = document.querySelectorAll('.validate')
const button = document.querySelector('button')

inputs.forEach((input, index) => {
	console.log(index + ' - '+ input.value);
	if (input.value == '' || input.value == null) {
		button.classList.add('disabled')
		console.log('Parou');
		
	} else {
		button.classList.remove('disabled')
		console.log('Tem conteudo');
	}
})