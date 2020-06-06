let person = {
  name: 'Daniel Adekoya',
  id: 'HNG-05080',
  language: 'javascript',
  email: 'adekoyadaniel53@gmail.com',

    me(name, id, language, email){
       return `Hello World, this is ${person.name} with HNGi7 ID ${person.id} using ${person.language} for stage 2 task.${person.email}` 
  }
}
 
console.log(person.me())
