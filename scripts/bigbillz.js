const favour ={
    name: "Adenugba Favour",
    id:'HNG-03382',
    language: 'Javascript',
}

function personInfo({id, name, language}){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.`);
}

personInfo(favour)