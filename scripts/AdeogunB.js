function Intern(name, hngId, devLanguage, email) {
    this.DevName = name;
    this.hngId = hngId;
    this.language = devLanguage;
    this.email = email;
}

function sayHelloToHNG (name, Id, language, email) {
    console.log ('Hello World, this is ${name} with HNGi7 ID ${Id} using ${language} for stage 2 task.${email}')
}

let devName = "Adeogun Babafemi";
let devId = "HNG-03777";
let devLanguage = "JavaScript";
let devEmail = "babafem.adeogun@gmail.com"

let Intern = new Intern (devName, devId, devLanguage, devEmail);
sayHelloToHNG (Intern.DevName, Intern.hngId, Intern.language, Intern.devEmail);
