function Intern(name, hngId, devLanguage) {
    this.DevName = name;
    this.hngId = hngId;
    this.language = devLanguage;
}

function sayHelloToHNG (name, Id, language) {
    console.log ('Hello World, this is ${name} with HNGi7 ID ${Id} using ${language} for stage 2 task ')
}

let devName = "Adeogun Babafemi";
let devId = "HNG-03777";
let devLanguage = "JavaScript";

let Intern = new Intern (devName, devId, devLanguage);
sayHelloToHNG (Intern.DevName, Intern.hngId, Intern.language);