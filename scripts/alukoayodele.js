
class Person {
  constructor( fullName, id, email, language) {
    
    this.fullName = fullName;
    this.id = id;
    this.email = email;
    this.language = language;
  }
  output() {
    return `Hello World,This is ${this.fullName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.`;
  }
}

const blackDev = new Person(
  'Aluko Ayodele',
  'HNG-02258',
  'ayodelealuko009.aa@gmail.com',
  'JavaScript'
);

console.log(blackDev.output());
