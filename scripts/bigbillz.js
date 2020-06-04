const favour ={
    name: "Adenugba Favour",
    id:'HNG-03382',
    language: 'Javascript',
    email:'adenugbafavour@gmail.com'
}

function personInfo({id, name, language, email}){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${id}. This script was made using ${language}. You can reach me on ${email}.`);
}

personInfo(favour)