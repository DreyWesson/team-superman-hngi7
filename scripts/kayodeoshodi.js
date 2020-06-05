const name = 'Kayode Oshodi';
const id = 'HNG-01936';
const language = 'Javascript';
const email = 'kayodeoshodi400@gmail.com'

const script = () => {
	let output = `Hello world, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`;

	console.log(output);
}

script(name, id, language, email);
