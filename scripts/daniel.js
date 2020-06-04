let person = {
  fullname: 'Daniel Adekoya',
  id: 'HNG-05080',
  language: 'javascript',
  email: 'adekoyadaniel53@gmail.com',

    me(fullname, id, language, email){
        console.log('Hello World, this '+ person.fullname +' with HNGi7 ID '+ person.id +' using '+ person.language + ' for stage 2 task. '+ person.email +'')
  }
}
person.me ()     
