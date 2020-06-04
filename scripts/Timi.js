 function Intern(name, hngId, language,email){
    this.name=name;
    this.hngId = hngId;
    this.language=language;
    this.email = email;
}

var userInfo = new Intern (
"Busari Ridwan Oluwatimilehin",
"HNG-03060",
"Javascript",
"Teemealeheen@gmail.com"
);

console.log(`Hello World, this is ${userInfo.name} with HNGi7 ID ${userInfo.hngId} using ${userInfo.language} for stage 2 task.${userInfo.email}`)
