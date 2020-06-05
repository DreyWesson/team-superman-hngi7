// Introducing variables by let function
//Javascript files should end with .js extention
//template strings use backticks `` not "" nor ''
let name = "Bizhigitov Aldiyar";
let id = "HNG-01395";
let language = "JavaScript";
let email = "bialdik10@gmail.com";

function HNGtask(name, id, language, email) {
  console.log(
    `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`
  );
}

HNGtask(name, id, language, email);
