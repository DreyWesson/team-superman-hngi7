<<<<<<< HEAD
//You should go lear how objects are create in Js. const obj = {}
//Template strings are init with `` not "" nor ''
let info = {
  fullName: "Ajayi Michael",
  id: "HNG-00384",
  language: "JavaScript",
  email: "ajayimichael150@gmail.com",
};

let profile = `Hello World, this is ${info.fullName} with HNGi7 ID ${info.id} using ${info.language} for stage 2 task.${info.email}`;

console.log(profile);
=======
var info = {
    fullName: 'Ajayi Michael',
    id: 'HNG-00384',
    language: 'JavaScript',
    email: 'ajayimichael150@gmail.com'
};

function data(){
    console.log('Hello World, this is' + ' ' + info.fullName + ' ' + 'with HNGi7 ID' + ' ' + info.id + ' ' + 'using' + ' ' + info.language + ' ' + 'for stage 2 task.' + info.email);
};

data();
>>>>>>> 76e0d68d619296c4c96dc01e4d33d342b8cabea9
