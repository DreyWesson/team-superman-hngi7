// Stage 1
// #team-superman

// Function to return Specified Output to be streamed by a .php script

//initialise var.
let name = "Joshua Omobola";
let Id = "HNG-05190";
let Lang = "JavaScript";
let email = "omobolathejoshua@gmail.com"

//Declare Intern Class.
function Intern(name, hngId, lang){
    this.internName = name;
    this.internId = hngId;
    this.internlang = lang;
    this.interEmail = email;
};

//declared helloHng function
const helloHng = (name, hngId, lang, email) => console.log (`Hello World, this is ${name} with HNGi7 ID ${hngId} using ${lang} for stage 2 task.${email}`);

//Mould Obj from Intern Class.
let intern = new Intern(name, Id, Lang, email);

//Return String
helloHng(intern.internName, intern.internId, intern.internlang, intern.interEmail);


