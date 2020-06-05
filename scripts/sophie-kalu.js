const sayHello = (fullName, id, language, email) => {
	return (`Hello World, this is ${fullName} with HNGi7 ID ${id} using ${language} for stage 2 task. ${email}`);
};

// Output
const output = sayHello('Sophie Kalu', 'HNG-03921', 'JavaScript', 'sophiekalu.developer@gmail.com');

console.log(output);
