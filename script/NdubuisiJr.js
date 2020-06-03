function Intern(name, hngId, devLanguage){
    this.DevName=name;
    this.hngId = hngId;
    this.language=devLanguage;
}

function sayHelloToHNG(name, Id, language){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${Id} using ${language} for stage 2 task`)
}

let devName="Ndubuisi Jr Chukuigwe";
let devId="HNG-00214";
let devlanguage="JavaScript";

let intern=new Intern(devName, devId, devlanguage);
sayHelloToHNG(intern.DevName, intern.hngId, intern.language);