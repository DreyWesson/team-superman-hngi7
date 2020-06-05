function Intern(name, hngId, devLanguage, devEmail) {
  this.DevName = name;
  this.hngId = hngId;
  this.language = devLanguage;
  this.mail = devEmail;
}

function sayHelloToHNG(name, Id, language, email) {
  console.log(
    `Hello World, this is ${name} with HNGi7 ID ${Id} using ${language} for stage 2 task.${email}`
  );
}

let devName = "Adeogun Babafemi";
let devId = "HNG-03777";
let devLanguage = "JavaScript";
let devEmail = "babafem.adeogun@gmail.com";

let int_object = new Intern(devName, devId, devLanguage, devEmail);
sayHelloToHNG(
  int_object.DevName,
  int_object.hngId,
  int_object.language,
  int_object.mail
);
