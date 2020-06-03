
class Person {
  constructor(greetings, fullName, id, language) {
    this.greetings = greetings;
    this.fullName = fullName;
    this.id = id;
    this.language = language;
  }
  introduction() {
    return `${this.greetings},This is ${this.fullName} with HNGi7 ID ${this.id}  and using ${this.language} for stage 2 task.`;
  }
}

const blackDev = new Person(
  'Hello World',
  'Aluko Ayodele',
  'HNG-02258',
  'JavaScript'
);

console.log(blackDev.introduction());
