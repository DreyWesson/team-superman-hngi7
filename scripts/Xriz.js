
let me = {
	name: 'Christopher Emediong',
  id: 'HNG-04809',
  langUsed:'javascript',
  email:'emichris380@gmail.com',
  printMyDetails: function (name, id, lang, email){
      console.log(`Hello World, this is ${name} with HNGi7 ID ${id} using ${lang} for stage 2 task.${email}`);
  }
};

me.printMyDetails(me.name, me.id, me.langUsed, me.email);
