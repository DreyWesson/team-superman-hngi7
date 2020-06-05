var myHngDetails = {
  name: "Okocha Chibueze Evans",
  id: " HNG - 02521",
  language: "Javascript",
  email: "eokocha0@gmail.com"
};

var { name, id, language, email } = myHngDetails;
function myHngTask() {
  return `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task. ${email}`;
}
console.log(myHngTask(name, id, language,email));
