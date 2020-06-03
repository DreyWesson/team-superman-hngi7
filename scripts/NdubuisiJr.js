function Intern(name, hngId, devLanguage, email){
    this.DevName=name;
    this.hngId = hngId;
    this.language=devLanguage;
    this.email=email;
}

function sayHelloToHNG(name, Id, language,email){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${Id} using ${language} for stage 2 task.${email}`)
}

let devName="Ndubuisi Jr Chukuigwe";
let devId="HNG-00214";
let devlanguage="JavaScript";
let devEmail="ndubuisijrchukuigwe@gmail.com";
let intern=new Intern(devName, devId, devlanguage,devEmail);
sayHelloToHNG(intern.DevName, intern.hngId, intern.language,intern.email);