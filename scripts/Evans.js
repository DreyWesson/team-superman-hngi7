var myHngDetails = {
  name: "Okocha Chibueze Evans",
  id: " HNG - 02521",
  language: "Javascript",
  email: "eokocha0@gmail.com"
};

var { name, id, language, email } = myHngDetails;
function myHngTask() {
  return console.log (`Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task ${email}`);
}
myHngTask(name, id, language,email);
