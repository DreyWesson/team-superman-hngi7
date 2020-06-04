
function greeting(name, id, language, email) {
	console.log(`Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`);
}

const internInfo = {
	name: "Kennedy Nnodim",
	email: "kennedy.nnodimch@yahoo.com",
	id: "HNG-01622", 
	language: "JavaScript"
};

greeting(internInfo.name, internInfo.id, internInfo.language, internInfo.email);