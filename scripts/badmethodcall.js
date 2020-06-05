function displayDetails(name, id, lang, email){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${id} using ${lang} for stage 2 task.${email}`);
}
let myDetails = {
  name: 'Celestine Uko',
  id: 'HNG-06445',
  langUsed:'javascript',
  email:'decele2011@gmail.com'
};

displayDetails(myDetails.name, myDetails.id, myDetails.langUsed, myDetails.email);
