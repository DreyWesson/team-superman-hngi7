//Global Object.
const micode = {
    name: 'Abaye Miracle King',
    hngid: 'HNG-00928',
    language: 'JavaScript',
    email: 'abayemiracle@gmail.com'
} 


const micodeOutputProcessor = (name,id,language,email) => {
        //output in var
    var syntax = `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`;
    //outputing micode data here.
    console.log(syntax);
}

micodeOutputProcessor(micode.name, micode.hngid,micode.language,micode.email);
