//Global Object.
const micode = {
    name: 'Abaye Miracle King',
    hngid: 'HNG-00928',
    language: 'JavaScript'
    
} 


const micodeOutputProcessor = (name,hngid,lang) => {
        //output in var
    var syntax = `Hello World, this is ${name} with HNGi7 ID ${hngid} using ${lang} for stage 2 task.`;
    //outputing micode data here.
    console.log(syntax);
}

micodeOutputProcessor(micode.name, micode.hngid,micode.language);
