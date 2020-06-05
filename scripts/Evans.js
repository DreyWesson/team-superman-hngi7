var myHngDetails = {
  name: "Okocha Chibueze Evans",
  id: " HNG - 02521",
  language: "javascript",
};

var { name, id, language } = myHngDetails;
function myHngTask() {
  return `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task`;
}
myHngTask(name, id, language);
