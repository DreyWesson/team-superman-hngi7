
class Person {
  constructor( fullName, id, language) {
    
    this.fullName = fullName;
    this.id = id;
    this.language = language;
  }
  introduction() {
    return `Hello World,This is ${this.fullName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.`;
  }
}

const blackDev = new Person(
  'Aluko Ayodele',
  'HNG-02258',
  'JavaScript'
);

console.log(blackDev.introduction());
