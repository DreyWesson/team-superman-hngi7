const mydata = {
  id: 'HNG-01457',
  name: 'Ereyomi',
  language: 'JavaScript',
  email: 'ereyomioluwaseyi@gmail.com',
};

const runHNG = ({id, name, language, email}) => { 
   console.log( `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`);
};

runHNG(mydata);
