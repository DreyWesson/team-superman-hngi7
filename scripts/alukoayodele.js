
class Person {
  constructor( fullName, id, language, email) {
    
    this.fullName = fullName;
    this.id = id;
    this.language = language;
    this.email = email;
  }
  output() {
    return `Hello World,This is ${this.fullName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`;
  }
}

const blackDev = new Person(
  'Aluko Ayodele',
  'HNG-02258',
  'JavaScript',
  'ayodelealuko009.aa@gmail.com',
);

console.log(blackDev.output());
